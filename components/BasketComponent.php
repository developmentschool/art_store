<?php


namespace app\components;

use Yii;
use yii\base\Component;

class BasketComponent extends Component implements IBasket
{

    public function addToBasket($id, $count = 1)
    {
        $session = Yii::$app->session;
        $session->open();
        if (!isset($session['cart'])) {
            $session->set('cart', []);
        }
        $arr = $session->get('cart');
        if (!isset($arr[$id])) {
            $arr[$id] = $count;
        } else {
            $arr[$id] += $count;
        }
        $session->set('cart', $arr);
    }

    public function delFromBasket($id, $count = null)
    {
        $session = Yii::$app->session;
        $session->open();
        $basket = $session['cart'];
        if (is_null($basket) || !isset($basket[$id])) {
            return;
        }
        if ($basket[$id] <= $count || is_null($count)) {
            unset($basket[$id]);
        } else {
            $basket[$id] -= $count;
        }
        $session->set('cart', $basket);
    }

    public function clearBasket()
    {
        $session = Yii::$app->session;
        $session->open();
        unset($session['cart']);
    }

    public function getBasket()
    {
        $session = Yii::$app->session;
        $session->open();
        return isset($session['cart']) ? $session['cart'] : null;
    }


}