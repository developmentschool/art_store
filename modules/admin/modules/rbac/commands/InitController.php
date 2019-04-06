<?php


namespace rbac\commands;


use yii\console\Controller;
use yii\helpers\Console;

class InitController extends Controller
{
    public $rbacTablesName = [
        'auth_assignment',
        'auth_item',
        'auth_item_child',
        'auth_rule',
    ];

    public function actionIndex()
    {
        $username = $this->prompt(
            'Username:',
            [
                'required' => true,
                'validator' => function ($input, &$error) {
                    $user = new User(['username' => $input]);
                    if (!$user->validate()) {
                        $error = $user->getFirstError('username');
                        return false;
                    }
                    return true;
                }
            ]
        );
        $user = new User(['username' => $username]);
        $user->assignAdmin();
        $this->stdout('Done', Console::FG_GREEN, Console::BG_GREY);
    }


    protected function isExistRbacTables()
    {
        foreach ($this->rbacTablesName as $tableName) {
            if (!\Yii::$app->getDb()->getTableSchema($tableName, true)) {
                return false;
            }
        }
        return true;
    }

    protected function createRbacTable()
    {
        echo shell_exec('php yii migrate/up --interactive=0 --migrationPath=@yii/rbac/migrations');
    }
}