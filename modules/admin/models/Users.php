<?php


namespace app\modules\admin\models;


use app\models\SignupForm;
use yii\validators\DefaultValueValidator;

class Users extends \app\models\User
{

    /**
     * @var string
     */
    public $newPassword;

    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            ['newPassword', 'safe'],
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function beforeValidate()
    {
        if ($this->newPassword) {
            $model = new SignupForm(['password' => $this->newPassword]);
            if (!$model->validate(['password'])) {
                $this->addError('newPassword', $model->getFirstError('password'));
                return false;
            }
            $this->setPassword($this->newPassword);
        }
        return parent::beforeValidate();
    }

    /**
     * {@inheritDoc}
     */
    public function afterValidate()
    {
        if ($this->hasErrors('password_hash')) {
            $this->addError('newPassword', $this->getFirstError('password_hash'));
        }

        parent::afterValidate();
    }

    /**
     * {@inheritDoc}
     */
    public function beforeSave($insert)
    {
        $this->removePasswordResetToken();
        return parent::beforeSave($insert);

    }

    /**
     *Returns an inverted array of constants defining user status
     *
     * @return array|null
     * @throws \ReflectionException
     */
    public function getStatuses()
    {
        $arr = array_filter(
            (new \ReflectionClass(static::class))->getConstants(),
            function ($key) {
                return strpos($key, 'STATUS') !== false;
            }, ARRAY_FILTER_USE_KEY);

        return array_flip(array_change_key_case($arr, CASE_LOWER));
    }

    /**
     * Returns the default status value.
     *
     * @return bool|mixed
     */
    public function getDefaultStatus()
    {
        $validators = $this->getActiveValidators('status');
        foreach ($validators as $validator) {
            if ($validator instanceof DefaultValueValidator) {
                return $validator->value;
            }
        }
        return false;
    }
}