<?php


namespace app\controllers;


use app\models\User;
use app\services\BasketService;
use app\services\UserService;
use Yii;
use yii\web\Controller;

class BasketAjaxController extends Controller
{
    public function actionAdd()
    {
        if (Yii::$app->request->isAjax) {
            $params = Yii::$app->request->get();
            $id = $params['id'];
            $quantity = $params['quantity'];
            Yii::$app->basket->addToBasket($id, $quantity);
            return $this->prepareResponse();
        }
        return false;
    }

    public function actionGetnum()
    {
        if (Yii::$app->request->isAjax) {
            return $this->prepareResponse();
        }
        return false;
    }

    public function actionDel()
    {
        if (Yii::$app->request->isAjax) {
            $params = Yii::$app->request->get();
            $id = $params['id'];
            $quantity = $params['quantity'];
            Yii::$app->basket->delFromBasket($id, $quantity);
            return $this->prepareResponse();
        }
        return false;
    }

//    public function actionGetUserAddresses()
//    {
//        /**
//         * @var $user User
//         */
//        $user=Yii::$app->user;
//        $id = $user->getId();
////        $userData = UserService::getUserInfo($id);
//        $userData = [
//            'fuck' => $id,
//        ];
//        return json_encode($userData);
//    }


    private function prepareResponse()
    {
        $response = [];
        $response['basketSum'] = BasketService::getTotalSum();
        $response['basketCount'] = BasketService::getProductNum();
        return json_encode($response);
    }

}