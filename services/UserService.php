<?php


namespace app\services;


use app\models\OrderForm;
use app\models\tables\UserAddresses;
use app\models\tables\UserProfiles;
use app\models\tables\Users;
use yii\helpers\ArrayHelper;

class UserService
{
    public static function getUserInfo($id): array
    {
        $userData = [];
        $userIdentity = Users::findOne(['id' => $id]);
        $addressesInfo = UserAddresses::find()
            ->select(['city', 'address'])
            ->where(['user_id' => $id])
            ->asArray()
            ->all();

        /**
         * @var $userProfile UserProfiles
         */
        $userProfile = $userIdentity->getUserProfiles()->one();
        $userData['email'] = $userIdentity->email;
        $userData['firstName'] = $userProfile->first_name;
        $userData['lastName'] = $userProfile->last_name;
        $userData['phone'] = $userProfile->phone;
        $userData['city'] = ArrayHelper::getColumn($addressesInfo, 'city');
        $userData['address'] = ArrayHelper::getColumn($addressesInfo, 'address');

        return $userData;
    }

    public static function setUserInfo(UserProfiles $profileModel, UserAddresses $addressModel, OrderForm $model)
    {
        if (is_null(UserProfiles::find()
            ->where(['first_name' => $model->firstName])
            ->andWhere(['last_name' => $model->lastName])
            ->andWhere(['phone' => $model->phoneNum])
            ->one())) {
            $profileModel->first_name=$model->firstName;
            $profileModel->last_name=$model->lastName;
            $profileModel->phone=$model->phoneNum;
            $profileModel->save();
        }
        if (is_null(UserAddresses::find()
            ->where(['city' => $model->city])
            ->andWhere(['address' => $model->address])
            ->one())) {
            $addressModel->city=$model->city;
            $profileModel->last_name=$model->lastName;
            $profileModel->phone=$model->phoneNum;
            $profileModel->save();
        }
    }
}