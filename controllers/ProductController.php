<?php

namespace app\controllers;

use app\models\tables\Picture;
use app\models\tables\Product;
use yii\data\Pagination;
use yii\helpers\Html;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Product::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->all(), 'pageSize' => 10,]);
        $products = $query
            ->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $pictures = \Yii::$app->cloudinary->getImageUrlsByProductIds($products);

        return $this->render('index', [
            'products' => $products,
            'pages' => $pages,
            'pictures' => $pictures,
        ]);

    }

    public function actionView($id)
    {
        $model = Product::findOne($id);
        return $this->render('card', [
            'model' => $model,
        ]);
    }

}
