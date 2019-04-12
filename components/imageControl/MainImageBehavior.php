<?php


namespace app\components\imageControl;


use yii\base\Behavior;
use yii\db\ActiveRecord;

/**
 *
 *  public function behaviors()
 *  {
 *      return [
 *          'file' => [
 *              'class' => FileBehavior::class,
 *              'storage' => \Yii::$app->cloudinary,
 *          ]
 *      ];
 *  }
 *
 *
 *
 *
 *
 * Class MainImageBehavior
 * @package app\components\imageControl
 */


class MainImageBehavior extends Behavior
{

    /**
     * @var bool the is_main field flag in the intermediate table in the database
     */
    public $mainFlag = true;

    /**
     * @var string relationship name from access method for related data
     * If the name of the method [[getPictures()]], the [[relationship]] will be 'pictures'
     */
    public $relationship;

    /**
     * @var string name of the column in the database
     */
    public $mainColumnName = 'is_main';


    /**
     * @var string name of the model attribute to be used.
     * for the [[viaTable ()]] method
     */
    private $mainFlagAttribute = 'mainFlag';


    /**
     * Returns the associated model, with the active attribute `is_main` or null
     *
     * @return \yii\db\ActiveQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function getMainImage()
    {
        /* @var $owner ActiveRecord */
        $owner = $this->owner;

        $relation = $owner->getRelation($this->relationship);
        $viaRelation = $relation->via[1];
        $viaTable = $viaRelation->modelClass::tableName();
        $viaRelationLink = $viaRelation->link;
        $viaRelationLink[$this->mainColumnName] = $this->mainFlagAttribute;

        return $owner->hasOne($relation->modelClass, $relation->link)
            ->viaTable($viaTable, $viaRelationLink);
    }
}