<?php


namespace app\components;


use yii\base\Behavior;
use yii\db\ActiveRecord;

class PictureBehavior extends Behavior
{
    public $mainPictureUrl;
    public $connectedClassName;

    /**
     * @return mixed
     */
    public function getMainPictureUrl()
    {
        return $this->mainPictureUrl;
    }

    /**
     * @param mixed $mainPictureUrl
     */
    public function setMainPictureUrl()
    {
        $mainPictureUrl = \Yii::$app->cloudinary->getMainPicUrl($this->owner->id, $this->connectedClassName);
        $this->owner->mainPictureUrl = $mainPictureUrl;
    }

    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_FIND => 'setMainPictureUrl',
        ];
    }

}