<?php


namespace app\components\imageControl\actions;


use yii\db\ActiveRecord;

class ImageAddAction extends ImageBaseAction
{
    public function run()
    {
        /* @var $imageModel ActiveRecord */
        $imageModel = new $this->imageClass();
        $ownerId = $this->getOwnerId();
        $ownerModel = $this->ownerClass::findOne($ownerId);
        $imageModel->load(\Yii::$app->request->post());
        $imageModel->save();

        $extraColumns = [];
        if (!$ownerModel->hasMainImage()) {
            $extraColumns = ['is_main' => $ownerModel->mainFlag];
        }
        $imageModel->link($this->getOwnerName(), $ownerModel, $extraColumns);


        return $this->controller->runAction('image-render', ['id' => $ownerModel->id, 'view' => 'imagesUpdate']);
    }
}