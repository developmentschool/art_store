<?php

namespace app\controllers;

use app\models\tables\Product;
use yii\data\Pagination;

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
        return $this->render('index', ['products' => $products, 'pages' => $pages]);

    }

    public function actionView($id)
    {
        $model = Product::findOne($id);
        return $this->render('card', [
            'model' => $model,
        ]);
    }

}
