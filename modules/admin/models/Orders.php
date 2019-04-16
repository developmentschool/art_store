<?php


namespace app\modules\admin\models;


use app\modules\admin\traits\Status;

/**
 * Class Orders
 * @package app\modules\admin\models
 *
 * @method  getDefaultStatus()
 * @method  statusRender()
 */
class Orders extends \app\models\tables\Orders
{
    /**
     * Implements methods
     * self::getStatuses()
     * self::getDefaultStatus()
     * self::statusRender()
     * self::getStatusColumnForWidget()
     */
    use Status;

    public function getStatusesCssClass($type = 'badge'): array
    {
        $prefix = "{$type} {$type}-";
        return [
            Orders::STATUS_ACTIVE => "{$prefix}info",
            Orders::STATUS_DONE => "{$prefix}success",
            Orders::STATUS_CANCELED => "{$prefix}dark"
        ];
    }


}