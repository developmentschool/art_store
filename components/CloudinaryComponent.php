<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 25.03.2019
 * Time: 20:20
 */

namespace app\components;


use Cloudinary\Uploader;
use yii\base\Component;

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
}