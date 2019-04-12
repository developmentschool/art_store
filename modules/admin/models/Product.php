<?php


namespace app\modules\admin\models;


use app\modules\admin\traits\Status;

/**
 * Class Product
 * @package app\modules\admin\models
 *
 * @method  getDefaultStatus()
 * @method  statusRender()
 */
class Product extends \app\models\tables\Product
{
    /**
     * Implements methods
     * self::getStatuses()
     * self::getDefaultStatus()
     * self::statusRender()
     * self::getStatusColumnForWidget()
     */
    use Status;


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            'category_id' => 'Category',
            'category.title' => 'Category',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\tables\query\ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return (new \app\models\tables\query\ProductQuery(get_called_class()));
    }

}