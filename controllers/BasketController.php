<?php

namespace app\controllers;

use app\models\OrderForm;
use app\models\tables\Orders;
use app\models\tables\OrdersProducts;
use app\models\tables\Product;
use app\models\tables\UserProfiles;
use app\models\tables\Users;
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
        if (is_null(Yii::$app->basket->getbasket())) {
            return $this->redirect(Url::toRoute('/product'));
        }
        $user = Yii::$app->user;
        $userData = [];
        /**
         * @var $userIdentity Users
         */

        if (!$user->isGuest) {
            $userIdentity = Users::findOne(['id' => $user->getId()]);
            /**
             * @var $userProfile UserProfiles
             */
            $userProfile = $userIdentity->getUserProfiles()->one();
            $userData['email'] = $userIdentity->email;
            $userData['firstName'] = $userProfile->first_name;
            $userData['lastName'] = $userProfile->last_name;
            $userData['phone'] = $userProfile->phone;


        } else {
            return $this->redirect('/site/login');
        }
        $products = BasketService::getProductsInBasket();
        $totalSum = BasketService::getTotalSum();
        return $this->render('checkout', [
            'model' => (new OrderForm()),
            'mark' => $this->activeMarks(),
            'products' => $products,
            'totalSum' => $totalSum,
            'userData' => $userData,
        ]);
    }

    public function afterAction($action, $result)
    {
        if ($action->id === 'checkout') {
            Yii::$app->getUser()->setReturnUrl('/basket/checkout');
        }
        return parent::afterAction($action, $result);

    }

    public function actionOrder()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(Url::toRoute('site/login'));
        }
        if (is_null(Yii::$app->basket->getbasket())) {
           return $this->redirect(Url::toRoute('/product'));
       }

        $model = new OrderForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $orderArr = [];
            $order = new Orders([
                'shipment_addr' => $model->address,
                'user_id' => Yii::$app->user->getId(),
            ]);
            $order->save();
            $orderId = $order->id;
            $orderArr['orderId'] = $orderId;
            $orderArr['address'] = $model->address;
            $orderArr['phone'] = $model->phoneNum;
            $orderArr['payment'] = $model->payment;
            $basket = Yii::$app->basket->getBasket();
            $totalSum = BasketService::getTotalSum();
            $orderArr['totalSum'] = $totalSum;
            foreach ($basket as $id => $quantity) {
                (new OrdersProducts([
                    'order_id' => $orderId,
                    'product_id' => $id,
                    'quantity' => $quantity,
                ]))->save();
            }
            Yii::$app->basket->clearBasket();
        }
        return $this->render('pay', [
            'mark' => $this->activeMarks(),
            'order' => $orderArr,
        ]);
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
