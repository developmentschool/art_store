<?php

namespace app\models\tables;


use app\components\imageControl\MainImageBehavior;
use app\models\tables\query\CategoryQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 * @property int $parent_id
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Category $parent
 * @property Category[] $categories
 * @property Product[] $products
 * @property Picture[] $pictures
 */
class Category extends ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
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
            'mainImage' => [
                'class' => MainImageBehavior::class,
                'relationship' => 'pictures'
            ]

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],

            [['parent_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            ['status', 'default', 'value' => self::STATUS_INACTIVE],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'parent_id' => 'Parent ID',

            'status' => 'Status',

            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {

        return $this->hasOne(static::className(), ['id' => 'parent_id']);

    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {

        return $this->hasMany(static::className(), ['parent_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new CategoryQuery(get_called_class());
        if (!\Yii::$app->getModule('admin', false)) {
            $query->active();
            //$query->loadImages();
            //$query->loadMainImage();
        }
        $query->loadCategories();

        return $query;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryPictures()
    {
        return $this->hasMany(CategoryPicture::class, ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPictures()
    {
        return $this->hasMany(Picture::class, ['id' => 'picture_id'])
            ->via('categoryPictures');

    }
}
