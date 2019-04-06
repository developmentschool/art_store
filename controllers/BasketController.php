<?php

namespace app\controllers;

use app\models\tables\Product;
use app\services\BasketService;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class BasketController extends Controller
{
    public function actionIndex()
    {

        $products = BasketService::getProductsInBasket();
        $totalSum = BasketService::getTotalSum();
        $view = (isset($products[0]) ? 'index' : 'emptyBasket');
        return $this->render($view, [
            'mark' => $this->activeMarks(),
            'products' => $products,
            'totalSum' => $totalSum,
        ]);
    }

    public function actionCheckout()
    {
        $products = BasketService::getProductsInBasket();
        $totalSum = BasketService::getTotalSum();
        return $this->render('checkout', [
            'mark' => $this->activeMarks(),
            'products' => $products,
            'totalSum' => $totalSum,
        ]);
    }

    public function actionOrder()
    {

        return $this->render('pay', ['mark' => $this->activeMarks()]);
    }

    private function getAction()
    {
        return (explode('/', $this->action->getUniqueId()))[1];
    }

    private function activeMarks()
    {
        $action = $this->getAction();
        $marks = [
            'active' => [
                'index' => null,
                'checkout' => null,
                'pay' => null,
            ],
            'urls' => [
                'index' => Url::toRoute('/basket'),
                'checkout' => Url::toRoute('basket/checkout'),
                'pay' => Url::toRoute('basket/pay'),
            ],
        ];

        $marks['active'][$action] = 'active';
        $marks['urls'][$action] = '#';
        return $marks;
    }

    public function actionDelete()
    {
        Yii::$app->basket->clearBasket();
        $this->redirect(Yii::$app->request->referrer);
    }

    public function actionDeleteItem($id)
    {
        Yii::$app->basket->delFromBasket($id);
        $this->redirect(Yii::$app->request->referrer);
    }

}
