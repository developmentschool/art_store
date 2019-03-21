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
                $model = new Picture(['product_id' => 1, 'title' => $file->baseName, 'ext' => $file->extension]);
                $fileFullName = \Yii::getAlias('@bigImg') . DIRECTORY_SEPARATOR . $file->name;
                $file->saveAs($fileFullName);

                Image::thumbnail($fileFullName, 120,
                    120)->save(\Yii::getAlias('@midImg') . DIRECTORY_SEPARATOR . $file->name, ['quality' => 100]);
                Image::thumbnail($fileFullName, 40,
                    40)->save(\Yii::getAlias('@smallImg') . DIRECTORY_SEPARATOR . $file->name, ['quality' => 100]);

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