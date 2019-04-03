<?php

namespace rbac;

/**
 * Class ConsoleModule
 *
 *      'modules' => [
 *          'rbac' => [
 *              'class' => 'rbac\ConsoleModule'
 *          ]
 *      ],
 */
class ConsoleModule extends Module
{
    /**
     * @var string the namespace that controller classes are in
     */
    public $controllerNamespace = 'rbac\commands';
}
