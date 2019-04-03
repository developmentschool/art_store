<?php

namespace rbac;

/**
 * GUI manager for RBAC.
 *
 * Use [[\yii\base\Module::$controllerMap]] to change property of controller.
 *
 * ```php
 *  'modules' => [
 *      'rbac' => [
 *          'class' => 'rbac\Module',
 *          'controllerMap' => [
 *              'assignment' => [
 *              'class' => 'rbac\controllers\AssignmentController',
 *              'userIdentityClass' => 'app\models\User',
 *              'searchClass' => [
 *                   'class' => 'rbac\models\search\AssignmentSearch',
 *                   'pageSize' => 10,
 *              ],
 *              'idField' => 'id',
 *              'usernameField' => 'username'
 *              'gridViewColumns' => [
 *                   'id',
 *                   'username',
 *                   'email'
 *              ],
 *           ],
 *      ],
 *  ],
 * ```php
 */
class Module extends \yii\base\Module
{

    public function init()
    {
        parent::init();
        $config = require __DIR__ . '/config.php';
        \Yii::configure($this, $config);
    }

    /**
     * @var string the default route of this module. Defaults to 'default'
     */
    public $defaultRoute = 'assignment';

    /**
     * @var string the namespace that controller classes are in
     */
    public $controllerNamespace = 'rbac\controllers';
}
