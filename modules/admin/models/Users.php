<?php


namespace app\modules\admin\models;


use app\models\SignupForm;
use app\modules\admin\traits\Status;

/**
 * Class Users
 * @package app\modules\admin\models
 *
 * @method  getDefaultStatus()
 * @method  statusRender()
 */
class Users extends \app\models\User
{
    /**
     * Implements methods
     * self::getStatuses()
     * self::getDefaultStatus()
     * self::statusRender()
     * self::getStatusColumnForWidget()
     */
    use Status;

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
}