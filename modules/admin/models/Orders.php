<?php


namespace app\modules\admin\models;


use app\modules\admin\traits\Status;
use Yii;

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
            Orders::STATUS_CANCELED => "{$prefix}dark",
        ];
    }

    public function sendEmail()
    {
        $mail = Yii::$app
            ->mailer
            ->compose(
                ['html' => 'order-changeStatus-html', 'text' => 'order-changeStatus-text'],
                ['order' => $this]
            )
            ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->user->email)
            ->setSubject('Изменение статусавашего заказа № ' . $this->id . ' от ' . $this->created_at . ' на сайте ' . Yii::$app->name);

        for ($i = 0, $res = false; !$res && $i < 5; $i++) {

            try {
                $res = $mail->send();
            } catch (\Swift_TransportException $e) {
                Yii::error($e->getMessage(), __CLASS__);
                $res = false;
            }

            sleep(1);
        }
        return $res;
    }

}