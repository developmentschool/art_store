<?php


namespace app\components\imageControl\actions;


use yii\base\Exception;
use yii\db\ActiveRecord;

class ImageDeleteAction extends ImageBaseAction
{

    public function run($id)
    {

        /* @var $imageModel ActiveRecord */
        $imageModel = $this->imageClass::findOne($id);
        if (!$imageModel) {
            throw new Exception('Not found item'); //TODO: Доработать обработку ошибки
        }

        $ownerId = $this->getOwnerId();
        $ownerModel = $this->ownerClass::findOne($ownerId);
        $imageModel->unlink($this->getOwnerName(), $ownerModel, true);
        $imageModel->delete();

        return $this->controller->runAction('image-render', ['id' => $ownerModel->id, 'view' => 'imagesUpdate']);
    }

}