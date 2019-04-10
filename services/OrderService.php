<?php


namespace app\services;


use app\models\OrderForm;
use app\models\tables\Users;
use Yii;
use yii\swiftmailer\Mailer;

class OrderService
{
    public static function prepareOrderInfo($id, OrderForm $model): array
    {
        $orderArr = [];
        $totalSum = BasketService::getTotalSum();
        $orderArr['orderId'] = $id;
        $orderArr['address'] = $model->address;
        $orderArr['city'] = $model->city;
        $orderArr['phone'] = $model->phoneNum;
        $orderArr['payment'] = $model->payment;
        $orderArr['email'] = $model->email;
        $orderArr['username'] = $model->firstName . ' ' . $model->lastName;
        $orderArr['totalSum'] = $totalSum;
        return $orderArr;
    }

    public static function sendOrderMail(Mailer $mailer, array $orderInfo)
    {
        $user_id = Yii::$app->user->getId();
        $mail = $mailer
            ->compose(
                ['html' => 'order-html', 'text' => 'order-text',],
                ['order' => $orderInfo]
            )
            ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->name . ' order'])
            ->setTo($orderInfo['email'])
            ->setCc(Yii::$app->params['logisticManagerEmail'])
            ->setSubject('Информация о заказе №' . $orderInfo['orderId']);

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