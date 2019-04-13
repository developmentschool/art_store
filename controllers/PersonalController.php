<?php

namespace app\controllers;

use app\models\AddressForm;
use app\models\tables\UserAddresses;
use app\models\tables\UserProfiles;
use app\models\tables\Users;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\PasswordChangeForm;
use app\models\UserProfileForm;
use app\services\UserService;
use Yii;
use yii\bootstrap4\ActiveForm;
use yii\web\Response;

class PersonalController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index',],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        $model = new UserProfileForm();
        $addressModel = new AddressForm();
        $passwordModel = new PasswordChangeForm();
        $userId = Yii::$app->user->id;
        $userData = UserService::getUserInfo($userId);
        $addresses = UserAddresses::find()->where(['user_id' => $userId])->asArray()->all();
        return $this->render('index', [
            'model' => $model,
            'passwordModel' => $passwordModel,
            'addressModel' => $addressModel,
            'userData' => $userData,
            'addresses' => $addresses,
        ]);
    }

    public function actionPasswordChange()
    {
        $model = new PasswordChangeForm();
        $postData = Yii::$app->request->post();
        $user_id = Yii::$app->user->id;
        if (Yii::$app->request->isAjax && $model->load($postData)) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
        $user = Users::findOne(['id' => $user_id]);
        $user->password_hash = Yii::$app->security->generatePasswordHash($model->newPass);
        return $this->responseForUser($user->save(), 'Пароль изменен');
    }

    public function actionInfo()
    {
        $model = new UserProfileForm();
        if ($model->load(Yii::$app->request->post())) {
            $userProfile = UserProfiles::findOne(['user_id' => $model->userId]);
            $userProfile->first_name = $model->firstName;
            $userProfile->last_name = $model->lastName;
            $userProfile->phone = $model->phoneNum;
            $userProfile->birthday = $model->birthday;
        }
        return $this->responseForUser($userProfile->save(), 'Ваши данные изменены');
    }

    public function actionDeleteAddress($id)
    {
        return $this->responseForUser(UserAddresses::deleteAll(['id' => $id]), 'Адрес удален');
    }

    public function actionAddress()
    {
        $model = new AddressForm();
        $model->load(Yii::$app->request->post());
        if ($model->id === '') {
            $address = new UserAddresses([
                'user_id' => $model->userId,
                'city' => $model->city,
                'address' => $model->address,
            ]);
            return $this->responseForUser($address->save(), 'Новый адрес внесен');
        } else {
            $address = UserAddresses::findOne(['id' => $model->id]);
            $address->city = $model->city;
            $address->address = $model->address;
            return $this->responseForUser($address->save(), 'Адрес изменен');
        }

    }

    protected function responseForUser($isTrue, $message)
    {
        if ($isTrue) {
            Yii::$app->session->setFlash('success', $message);
        } else {
            Yii::$app->session->setFlash('warning', 'Произошла ошибка');
        };
        return $this->redirect(Url::toRoute('personal/index'));
    }


    public function actionOrders()
    {
        return $this->render('orders');
    }

}
