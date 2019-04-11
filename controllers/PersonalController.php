<?php

namespace app\controllers;

use app\models\OrderForm;
use app\models\UserProfileForm;
use app\services\UserService;

class PersonalController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new UserProfileForm();
        $userData = UserService::getUserInfo(\Yii::$app->user->id);
        return $this->render('index', [
            'model' => $model,
            'userData' => $userData,
            'addresses' => [
                '1' => '1',
            ],
        ]);
    }

    public function actionOrders()
    {
        return $this->render('orders');
    }

}
