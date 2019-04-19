<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;
    public $captcha;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
<<<<<<< HEAD
            [
                'username',
                'unique',
                'targetClass' => '\app\models\User',
                'message' => 'This username has already been taken.',
            ],
=======
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
>>>>>>> master
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
<<<<<<< HEAD
            [
                'email',
                'unique',
                'targetClass' => '\app\models\User',
                'message' => 'This email address has already been taken.',
            ],
=======
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
>>>>>>> master
            [['password', 'password_repeat'], 'required'],
            [['password', 'password_repeat'], 'string', 'min' => 6],
            [['password_repeat'], 'compare', 'compareAttribute' => 'password'],
            [['captcha'], 'captcha'],
        ];
    }

<<<<<<< HEAD
    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'password_repeat' => 'Повторить пароль',
        ];
    }

=======
>>>>>>> master
    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);
    }

    /**
     * Sends confirmation email to user
<<<<<<< HEAD
     *
     * @param User $user user model to with email should be send
     *
=======
     * @param User $user user model to with email should be send
>>>>>>> master
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
<<<<<<< HEAD


        $mail = Yii::$app
=======
        return Yii::$app
>>>>>>> master
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
<<<<<<< HEAD
            ->setSubject('Регистрация на сайте ' . Yii::$app->name);

        for ($i = 0, $res = false; !$res && $i < 5; $i++) {

            try {
                $res = $mail->send();
            } catch (\Swift_TransportException $e) {
                Yii::error($e->getMessage(), __CLASS__);
                $res = false;
            }

            sleep(1);
        }
        return $res;
=======
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
>>>>>>> master
    }
}