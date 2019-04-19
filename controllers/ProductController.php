<?php

namespace app\controllers;


<<<<<<< HEAD
use app\models\tables\Category;
use app\models\tables\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use Yii;
=======
use app\models\tables\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

>>>>>>> master

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
<<<<<<< HEAD
        $categories = Category::find()
            ->where(['parent_id' => null])
            ->asArray()
            ->all();
        $menu = [];
        foreach ($categories as $category) {
            $menu[] = ['label' => $category['title'], 'url' => ["category/{$category['id']}"]];
        }
=======
>>>>>>> master

        $model = Product::findOne($id);
        return $this->render('card', [
            'model' => $model,
<<<<<<< HEAD
            'menu' => $menu,
        ]);
    }


=======
        ]);
    }

>>>>>>> master
}
