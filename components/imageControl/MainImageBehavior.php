<?php


namespace app\components\imageControl;


use yii\base\Behavior;
use yii\db\ActiveRecord;

/**
 *
 *
 * public function behaviors()
 *  {
 *      return [
 *          'mainImage' => [
 *              'class' => MainImageBehavior::class,
 *              'relationship' => 'pictures'
 *          ]
 *      ];
 *  }
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
    public function getLoadMainImage()
    {
        /* @var $owner ActiveRecord */
        $owner = $this->owner;

        $relation = $owner->getRelation($this->relationship);
        $viaRelation = $relation->via[1];
        $viaTable = $viaRelation->modelClass::tableName();
        $viaRelationLink = $viaRelation->link;

        $query = $owner->hasOne($relation->modelClass, $relation->link)
            ->viaTable($viaTable, $viaRelationLink);

        if ($this->hasMainImage()) {
            $query->via->andWhere([$this->mainColumnName => $this->mainFlag]);
        } else {
            \Yii::warning('Нет главного изображения у ' . get_class($owner) . ' с ID ' . $owner->id);
        }

        return $query;
    }

    /**
     * @return mixed|object|\yii\db\ActiveQuery
     * @throws \yii\base\InvalidConfigException
     */
    public function getMainImage()
    {
        $owner = $this->owner;

        if ($model = $owner->loadMainImage) {
            return $model;
        }

        if ($model = $this->getLoadMainImage()->one()) {
            return $model;
        }

        $relationClass = $this->owner->getRelation($this->relationship)->modelClass;

        return \Yii::createObject($relationClass);
    }


    /**
     * @param $viaRelation
     * @return bool
     */
    public function hasMainImage()
    {
        /* @var $owner ActiveRecord */
        $owner = $this->owner;

        $relation = $owner->getRelation($this->relationship);
        $viaRelation = $relation->via[1];

        return (bool)$viaRelation->where([$this->mainColumnName => $this->mainFlag])->one();
    }
}