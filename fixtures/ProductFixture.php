<?php

namespace app\fixtures;


use app\models\tables\Product;
use yii\test\ActiveFixture;

class ProductFixture extends ActiveFixture
{
    public $modelClass = Product::class;

    public $depends = [CategoryFixture::class];
}