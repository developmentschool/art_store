<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 25.03.2019
 * Time: 20:20
 */

namespace app\components;


use app\models\tables\ProductPicture;
use Cloudinary\Uploader;
use yii\base\Component;
use app\models\tables\Picture;

class CloudinaryComponent extends Component
{
    public $cloud_name;
    public $api_key;
    public $api_secret;

    public function init()
    {
        parent::init();
        \Cloudinary::config([
            'cloud_name' => $this->cloud_name,
            'api_key' => $this->api_key,
            'api_secret' => $this->api_secret,
        ]);
    }

    /**
     * @param $imgName string
     *
     * @return mixed|string|string[]|null
     */
    public function getImageUrl($imgName)
    {
        return cloudinary_url($imgName);
    }

    /**
     * @param string $pathToImage
     * @param array $options
     */
    public function uploadImage(string $pathToImage, array $options = [])
    {
        if (Uploader::upload($pathToImage, $options)) {
            return true;
        };
        return false;
    }

    public function deleteImage(string $public_id, array $options = [])
    {
        if (Uploader::destroy($public_id, $options)) {
            return true;
        };
        return false;
    }

    public function getImageUrlsByProductIds(array $productArrays): array
    {

        foreach ($productArrays as $key => $product) {
            $models = ProductPicture::findAll(['product_id' => $product['id']]);
            $product['pictureUrl'] = $this->getUrl($models);
            $productArrays[$key] = $product;
        }
        return $productArrays;
    }

    public function getUrl(array $productPictureModels = null): string
    {
        $result = 'http://placehold.it/640x640/33bee5/ffffff/&text=Image';
        /**
         * @var $model ProductPicture;
         */
        if (is_null($productPictureModels)) {
            return $result;
        }
        foreach ($productPictureModels as $model) {
            if ($model->is_main) {
                /**
                 * @var Picture $picture
                 */
                $picture = $model->getPicture()->one();

                /**
                 * @property CloudinaryComponent cloudinary
                 */
                return $result = $this->getImageUrl($picture->title . '.' . $picture->ext);

            }
            if (!$model->is_main) {
                /**
                 * @var Picture $picture
                 */
                $picture = $model->getPicture()->one();
                $result = $this->getImageUrl($picture->title . '.' . $picture->ext);
            }

        }
        return $result;
    }

    public function getMainPicUrl($id): string
    {
        $models = ProductPicture::findAll(['product_id' => $id]);
        return $this->getUrl($models);
    }
}