<?php

namespace app\controllers;

use app\models\tables\Category;
use yii\data\ActiveDataProvider;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $categoryDataProvider = new ActiveDataProvider([
            'query' => Category::find()->where(['parent_id' => null])
        ]);
        return $this->render('index', ['categoryDataProvider' => $categoryDataProvider]);
    }

    public function actionView($id)
    {
        $category = Category::findOne($id);

        $childCategoryDataProvider = new ActiveDataProvider([
            'query' => $category->getCategories(),
            'pagination' => [
                'params' => []
            ]
        ]);

        $productDataProvider = new ActiveDataProvider([
            'query' => $category->getProducts(),
            'pagination' => [
                'pageSize' => 4
            ]
        ]);

        return $this->render('view', [
            'category' => $category,
            'categoryDataProvider' => $childCategoryDataProvider,
            'productDataProvider' => $productDataProvider
        ]);
    }

}
