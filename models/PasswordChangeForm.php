<?php


namespace app\models;

use Yii;
use yii\base\Model;

class PasswordChangeForm extends Model
{
    public $currentPass;
    public $newPass;
    public $newPassRepeat;

    public function rules()
    {
        return [
            [['currentPass', 'newPass', 'newPassRepeat'], 'required'],
            [['newPass', 'newPassRepeat',], 'string', 'min' => 6],
            [
                ['currentPass',],
                'validatePass',
                'message' => 'Пароль не верный',
                'skipOnEmpty' => false,
                'skipOnError' => false,
            ],
            [['newPassRepeat',], 'compare', 'compareAttribute' => 'newPass', 'message' => 'Пароли должны совпадать'],

        ];
    }

    public function validatePass($attribute, $params)
    {
        if (!$this->hasErrors()) {
            /**
             * @var $user User;
             */
            $id = Yii::$app->getUser()->getId();
            $user = User::findOne(['id' => $id]);

            if (!$user || !$user->validatePassword($this->currentPass)) {
                $this->addError($attribute, 'Пароль не верный');
            }
        }
    }

    public function attributeLabels()
    {
        return [
            'currentPass' => 'Текущий пароль',
            'newPass' => 'Новый пароль',
            'newPassRepeat' => 'Повторить пароль',
        ];
    }

}