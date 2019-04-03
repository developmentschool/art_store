<?php


namespace rbac\commands;


use app\models\User as Identity;
use yii\base\Model;

class User extends Model
{
    const ROLE_ADMIN = 'admin';
    const PERMISSION_ADMIN_PANEL = 'permAdminPanel';

    /**
     * @var Identity
     */
    private $_identityClass = Identity::class;

    public $username;

    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username'], 'trim'],
            ['username', 'exist', 'targetClass' => $this->_identityClass, 'message' => 'User is not found'],
        ];
    }

    public function assignAdmin()
    {
        $this->createRoleAdmin();

        $user = $this->getUser();
        $auth = \Yii::$app->getAuthManager();
        $role = $auth->getRole(static::ROLE_ADMIN);
        if (!$auth->checkAccess($user->id, static::ROLE_ADMIN)) {
            $auth->assign($role, $user->id);
        }

    }

    public function createRoleAdmin()
    {
        $auth = \Yii::$app->getAuthManager();
        if (!$adminPanel = $auth->getPermission(static::PERMISSION_ADMIN_PANEL)) {
            $adminPanel = $auth->createPermission(static::PERMISSION_ADMIN_PANEL);
            $adminPanel->description = 'Admin panel';
            $auth->add($adminPanel);
        }
        if (!$admin = $auth->getRole(static::ROLE_ADMIN)) {
            $admin = $auth->createRole(static::ROLE_ADMIN);
            $admin->description = 'Admin';
            $auth->add($admin);
        }
        if (!$auth->hasChild($admin, $adminPanel)) {
            $auth->addChild($admin, $adminPanel);
        }
    }

    protected function getUser()
    {
        return $this->_identityClass::findByUsername($this->username);
    }


}