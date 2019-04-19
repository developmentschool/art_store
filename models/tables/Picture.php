<?php

namespace app\models\tables;

<<<<<<< HEAD
use app\components\imageControl\FileBehavior;
=======
use Yii;
>>>>>>> master
use yii\db\ActiveRecord;

/**
 * This is the model class for table "picture".
 *
 * @property int $id
 * @property string $title
 * @property string $ext
 * @property string $created_at
 * @property string $updated_at
 */
class Picture extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'picture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'ext'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255,],
            [['ext'], 'string', 'max' => 12],
<<<<<<< HEAD
            ['file', 'file', 'extensions' => ['jpg', 'jpeg', 'pjpeg', 'png', 'gif'], 'skipOnEmpty' => !$this->isNewRecord],
=======
>>>>>>> master
        ];
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
<<<<<<< HEAD
            'file' => [
                'class' => FileBehavior::class,
                'storage' => \Yii::$app->cloudinary,
            ]
=======
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
            'product_id' => 'Product ID',
            'title' => 'Title',
            'ext' => 'Extension',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
<<<<<<< HEAD

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryPictures()
    {
        return $this->hasMany(CategoryPicture::className(), ['picture_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductPictures()
    {
        return $this->hasMany(ProductPicture::className(), ['picture_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasMany(Category::class, ['id' => 'product_id'])
            ->via('categoryPictures');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasMany(Product::class, ['id' => 'product_id'])
            ->via('productPictures');
    }
=======
>>>>>>> master
}
