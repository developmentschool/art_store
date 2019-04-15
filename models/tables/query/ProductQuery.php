<?php

namespace app\models\tables\query;

use app\models\tables\Product;

/**
 * This is the ActiveQuery class for [[\app\models\tables\Product]].
 *
 * @see \app\models\tables\Product
 */
class ProductQuery extends \yii\db\ActiveQuery
{

    public function active()
    {
        return $this->andWhere([Product::tableName() . '.status' => Product::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\tables\Product[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\tables\Product|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
