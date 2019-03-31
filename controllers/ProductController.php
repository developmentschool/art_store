<?php

namespace app\controllers;


use app\models\tables\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;


class ProductController extends Controller
{
    public function actionIndex()
    {
        $productDataProvider = new ActiveDataProvider([
            'query' => Product::find(),
            'pagination' => [
                'pageSize' => 12,
            ],
        ]);
        return $this->render('index', [
            'productDataProvider' => $productDataProvider,
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
