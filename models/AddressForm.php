<?php


namespace app\models;


use yii\base\Model;

class AddressForm extends Model
{
    public $id;
    public $userId;
    public $city;
    public $address;

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'ID пользователя',
            'city' => 'Город',
            'address' => 'Адрес',
        ];
    }

    public function rules()
    {
        return [
            [['city', 'address'], 'string'],
            [['address','city'], 'required'],
            [['userId', 'id'], 'safe'],
        ];
    }

}