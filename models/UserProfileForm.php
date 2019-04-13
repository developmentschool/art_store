<?php


namespace app\models;


use yii\base\Model;

class UserProfileForm extends Model
{
    public $birthday;
    public $userId;
    public $firstName;
    public $lastName;
    public $phoneNum;

    public function attributeLabels()
    {
        return [
            'birthday' => 'День Рождения',
            'userId' => 'ID',
            'firstName' => 'Имя',
            'lastName' => 'Фамилия',
            'phoneNum' => 'Телефон',
        ];
    }

    public function rules()
    {
        return [
            [['birthday', 'firstName', 'lastName', 'phoneNum'], 'string'],
            [['userId', 'birthday'], 'safe'],
            [['birthday'], 'date'],
        ];
    }
}