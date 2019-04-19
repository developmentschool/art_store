<?php

namespace app\models\tables;

<<<<<<< HEAD
use app\components\imageControl\MainImageBehavior;
use app\components\PictureBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%product}}".
=======
use app\components\PictureBehavior;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "product".
>>>>>>> master
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $price
 * @property int $category_id
<<<<<<< HEAD
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property CategoryPicture[] $cps
 * @property OrdersProducts[] $ordersProducts
 * @property Category $category
 * @property ProductPicture[] $productPictures
 */
class Product extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;
=======
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Category $category
 */
class Product extends ActiveRecord
{
    public $mainPictureUrl = null;
>>>>>>> master

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
<<<<<<< HEAD
        return '{{%product}}';
=======
        return 'product';
>>>>>>> master
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
                'connectedClassName' => ProductPicture::className(),
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
            [['title', 'price', 'category_id'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
<<<<<<< HEAD
            [['category_id', 'status'], 'integer'],
=======
            [['category_id'], 'integer'],
>>>>>>> master
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [
                ['category_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Category::className(),
<<<<<<< HEAD
                'targetAttribute' => ['category_id' => 'id']
            ],
            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]],
=======
                'targetAttribute' => ['category_id' => 'id'],
            ],
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
            'description' => 'Description',
            'price' => 'Price',
            'category_id' => 'Category ID',
<<<<<<< HEAD
            'category.title' => 'Category',
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
<<<<<<< HEAD
    public function getCps()
    {
        return $this->hasMany(CategoryPicture::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery | ActiveRecord
     */
    public function getOrdersProducts()
    {
        return $this->hasMany(OrdersProducts::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
=======
>>>>>>> master
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
<<<<<<< HEAD

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductPictures()
    {
        return $this->hasMany(ProductPicture::className(), ['product_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\tables\query\ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \app\models\tables\query\ProductQuery(get_called_class());
        if (!\Yii::$app->getModule('admin', false)) {
            $query->active();
        }
        return $query;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPictures()
    {
        return $this->hasMany(Picture::class, ['id' => 'picture_id'])
            ->via('productPictures');
    }

    /**
     * @param $orderId
     * @return array|ActiveRecord|null
     */
    public function getQuantityInOrder($orderId)
    {
        return $this->getOrdersProducts()->where(['order_id' => $orderId])->one()->quantity;
    }
=======
>>>>>>> master
}
