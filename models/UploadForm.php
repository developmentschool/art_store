<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 19.03.2019
 * Time: 21:22
 */

namespace app\models;

use app\models\tables\Picture;
use yii\base\Model;
use yii\db\Exception;
use yii\helpers\Html;
use yii\imagine\Image;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $imageFiles;


    public function rules()
    {
        return [
            [
                'imageFiles',
                'image',
                'skipOnEmpty' => false,
                'extensions' => 'png, jpg, gif',
                'maxFiles' => 4,
                'minWidth' => 300,
                'maxWidth' => 360,
                'minHeight' => 300,
                'maxHeight' => 360,
            ],
        ];
    }


    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->imageFiles as $file) {
                $public_id = Html::encode(str_replace(' ', '', $file->baseName));
                \Yii::$app->cloudinary->uploadImage($file->tempName, ['public_id' => str_replace(' ', '', $public_id)]);

                $model = new Picture(['product_id' => 2, 'title' => $public_id, 'ext' => $file->extension]);

                if (!$model->save()) {
                    throw new Exception("ошибка");
                };
            }
            return true;
        } else {
            return false;
        }
    }
}