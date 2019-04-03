<?php

namespace rbac\controllers;

use yii\rbac\Item;
use rbac\base\ItemController;

/**
 * Class PermissionController
 *
 * @package rbac\controllers
 */
class PermissionController extends ItemController
{
    /**
     * @var int
     */
    protected $type = Item::TYPE_PERMISSION;

    /**
     * @var array
     */
    protected $labels = [
        'Item' => 'Permission',
        'Items' => 'Permissions',
    ];
}
