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
                'maxFiles' => 36,
                'minWidth' => 200,
                'maxWidth' => 360,
                'minHeight' => 200,
                'maxHeight' => 360,
            ],
        ];
    }


    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->imageFiles as $file) {
                $public_id = Html::encode(str_replace(' ', '', $file->baseName));
                \Yii::$app->cloudinary->uploadImage($file->tempName, ['public_id' => $public_id]);

                $model = new Picture([
                    'title' => $public_id,
                    'ext' => $file->extension]);
                if (!$model->save()) {
                    throw new \yii\base\Exception(['message'=>'Here is something happens']);
                };
            }
            return true;
        } else {
            return false;
        }
    }
}