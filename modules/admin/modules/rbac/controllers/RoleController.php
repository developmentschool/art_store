<?php

namespace rbac\controllers;

use yii\rbac\Item;
use rbac\base\ItemController;

/**
 * Class RoleController
 *
 * @package rbac\controllers
 */
class RoleController extends ItemController
{
    /**
     * @var int
     */
    protected $type = Item::TYPE_ROLE;

    /**
     * @var array
     */
    protected $labels = [
        'Item' => 'Role',
        'Items' => 'Roles',
    ];
}
