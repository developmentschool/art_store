<?php

namespace app\models\tables;

<<<<<<< HEAD
use app\components\imageControl\MainImageBehavior;
=======
>>>>>>> master
use app\components\PictureBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 * @property int $parent_id
<<<<<<< HEAD
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

=======
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Product[] $products
 */
class Category extends ActiveRecord
{
>>>>>>> master
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
            'mainPictureUrl' => [
                'class' => PictureBehavior::className(),
                'connectedClassName' => CategoryPicture::className(),
            ],
<<<<<<< HEAD
            'mainImage' => [
                'class' => MainImageBehavior::class,
                'relationship' => 'pictures'
            ]
=======
>>>>>>> master
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
<<<<<<< HEAD
            [['parent_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            ['status', 'default', 'value' => self::STATUS_INACTIVE],
=======
            [['parent_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
>>>>>>> master
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
<<<<<<< HEAD
            'status' => 'Status',
=======
>>>>>>> master
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
<<<<<<< HEAD
        return $this->hasOne(static::className(), ['id' => 'parent_id']);
=======
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
>>>>>>> master
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
<<<<<<< HEAD
        return $this->hasMany(static::className(), ['parent_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\tables\query\CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \app\models\tables\query\CategoryQuery(get_called_class());
        if (!\Yii::$app->getModule('admin', false)) {
            $query->active();
        }
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
=======
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
>>>>>>> master
    }
}
