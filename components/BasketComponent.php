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
        if (!isset($session['basket'])) {
            $session->set('basket', []);
        }
        $arr = $session->get('basket');
        if (!isset($arr[$id])) {
            $arr[$id] = $count;
        } else {
            $arr[$id] += $count;
        }
        $session->set('basket', $arr);
    }

    public function delFromBasket($id, $count = null)
    {
        $session = Yii::$app->session;
        $session->open();
        $basket = $session['basket'];
        if (is_null($basket) || !isset($basket[$id])) {
            return;
        }
        if ($basket[$id] <= $count || is_null($count)) {
            unset($basket[$id]);
        } else {
            $basket[$id] -= $count;
        }
        $session->set('basket', $basket);
    }

    public function clearBasket(): void
    {
        $session = Yii::$app->session;
        $session->open();
        unset($session['basket']);
    }

    public function getBasket()
    {
        $session = Yii::$app->session;
        $session->open();
        return isset($session['basket']) ? $session['basket'] : null;
    }

    public function getProductNum()
    {
        $session = Yii::$app->session;
        $session->open();
        $basket = $session->get('basket', 0);
        return $basket===0 ? 0 : count($basket);
    }

}