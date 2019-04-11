<?php


namespace app\models;


class UserProfileForm extends OrderForm
{
    public $birthday;

    public function attributeLabels()
    {
        $attributes = parent::attributeLabels();
        $attributes['birthday'] = 'День Рождения';
        return $attributes;
    }
}