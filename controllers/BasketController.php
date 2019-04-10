<?php

namespace app\controllers;

use app\models\OrderForm;
use app\models\tables\Orders;
use app\models\tables\OrdersProducts;
use app\models\tables\Product;
use app\models\tables\UserAddresses;
use app\models\tables\UserProfiles;
use app\models\tables\Users;
use app\services\BasketService;
use app\services\OrderService;
use app\services\UserService;
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

        /**
         * @var $userIdentity Users
         */

        if (!$user->isGuest) {
            $view = 'checkout';
            $id = $user->getId();
            $userData = UserService::getUserInfo($id);

        } else {
            $view = 'letsLogin';
        }
        $products = BasketService::getProductsInBasket();
        $totalSum = BasketService::getTotalSum();
        return $this->render($view, [
            'model' => (new OrderForm()),
            'mark' => $this->activeMarks(),
            'products' => $products,
            'totalSum' => $totalSum,
            'userData' => $userData,
        ]);
    }

    public function actionOrder()
    {
        if (is_null(Yii::$app->basket->getbasket())) {
            return $this->redirect(Url::toRoute('/product'));
        }

        $model = new OrderForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $order = new Orders([
                'shipment_addr' => $model->city . ', ' . $model->address,
                'user_id' => Yii::$app->user->getId(),
            ]);

           if( $order->save()){
               $orderId = Yii::$app->db->lastInsertID;
               $orderArr = OrderService::prepareOrderInfo($orderId, $model);
               BasketService::saveProductsInOrder($order->id);
               Yii::$app->basket->clearBasket();
               UserService::setUserInfo((new UserProfiles()), (new UserAddresses()), $model);
               OrderService::sendOrderMail(Yii::$app->mailer, $orderArr);
           }

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
