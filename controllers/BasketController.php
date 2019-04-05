<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class BasketController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['mark' => $this->activeMarks()]);
    }

    public function actionCheckout()
    {
        return $this->render('checkout', ['mark' => $this->activeMarks()]);
    }

    public function actionPay()
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

    public function actionAdd()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->get();
            $id = $data['id'];
            $quantity = $data['quantity'];
            Yii::$app->basket->addToBasket($id, $quantity);
            $arr = [];
            $countProduct = Yii::$app->basket->getProductNum();
            $arr['data'] = $countProduct;
            $arr = json_encode($arr);
            return $arr;
        }
    }

    public function actionGetnum()
    {
        if (Yii::$app->request->isAjax) {
            $arr = [];
            $arr['data'] = Yii::$app->basket->getProductNum();
            $arr = json_encode($arr);
            return $arr;
        }
    }

}
