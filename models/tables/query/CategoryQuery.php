<?php

namespace app\models\tables\query;

use app\models\tables\Category;

/**
 * This is the ActiveQuery class for [[\app\models\tables\Category]].
 *
 * @see \app\models\tables\Category
 */
class CategoryQuery extends \yii\db\ActiveQuery
{

    public function active()
    {
        return $this->andWhere([Category::tableName() . '.status' => Category::STATUS_ACTIVE]);
    }

    public function loadImages()
    {
        return $this->with('pictures');
    }

    public function loadCategories()
    {
        return $this->with('categories');
    }

    public function loadMainImage()
    {
        return $this->with('loadMainImage');
    }

    /**
     * {@inheritdoc}
     * @return \app\models\tables\Category[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\tables\Category|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
