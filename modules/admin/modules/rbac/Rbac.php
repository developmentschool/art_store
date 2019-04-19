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
class Rbac extends \yii\base\Module
{

    /**
     * @var string the default route of this module. Defaults to 'default'
     */
    public $defaultRoute = 'assignment';

    /**
     * @var string the namespace that controller classes are in
     */
    public $controllerNamespace = 'rbac\controllers';


    /**
     * Initializes the operation of the module.
     */
    public function init()
    {
        parent::init();
        $config = require __DIR__ . '/config.php';
        \Yii::configure($this, $config['config']);
        $this->setConfigComponentsApp($config['components']);
    }

    /**
     * Complements the application component configuration
     * from module configuration
     *
     * @param $config array
     */
    protected function setConfigComponentsApp($config)
    {
        foreach ($config as $componentName => $properties) {
            foreach ($properties as $propertyName => $value) {
                \Yii::$app->$componentName->$propertyName = array_merge_recursive(\Yii::$app->$componentName->$propertyName, $value);
            }
        }
    }
}
