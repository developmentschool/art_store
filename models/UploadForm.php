<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 19.03.2019
 * Time: 21:22
 */

namespace app\models;

use yii\base\Model;
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
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }
// TODO: реализовать запись данных в базу данных
    public function upload()
    {
        if ($this->validate()) {
            // TODO: реализовать проверки размера и сохранения фото в размерах big/mid/small
            foreach ($this->imageFiles as $file) {
                $file->saveAs('img/mid/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}