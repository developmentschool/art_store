<?php


namespace app\models;


use yii\base\Model;

class OrderForm extends Model
{
    public $firstName;
    public $lastName;
    public $city;
    public $address;
    public $email;
    public $phoneNum;
    public $comment;
    public $basket;
    public $payment;

    public function rules()
    {
        return [

            ['email', 'trim'],
            [['email', 'firstName', 'lastName', 'city', 'phoneNum'], 'required'],
            ['email', 'email'],
            [['email', 'firstName', 'lastName', 'city', 'address'], 'string', 'max' => 255],
        ];
    }
}