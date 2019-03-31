<?php

namespace app\models\tables;

use app\components\PictureBehavior;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category_picture".
 *
 * @property int $id
 * @property int $product_id
 * @property int $picture_id
 * @property int $is_main
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Picture $picture
 * @property Product $product
 */
class CategoryPicture extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cp';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => date('Y-m-d H:i:s'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'picture_id', 'is_main', 'created_at'], 'required'],
            [['product_id', 'picture_id', 'is_main'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['picture_id'], 'exist', 'skipOnError' => true, 'targetClass' => Picture::className(), 'targetAttribute' => ['picture_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'picture_id' => 'Picture ID',
            'is_main' => 'Is Main',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPicture()
    {
        return $this->hasOne(Picture::className(), ['id' => 'picture_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
