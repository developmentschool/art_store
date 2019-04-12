<?php


namespace app\services;


use app\models\tables\OrdersProducts;
use app\models\tables\Product;
use Yii;

class BasketService
{
    public static function getTotalSum(): int
    {
        $basket = Yii::$app->basket->getBasket();
        $totalSum = 0;
        if (!is_null($basket)) {
            foreach ($basket as $id => $quantity) {
                $price = (Product::findOne(['id' => $id]))->price;
                $totalSum += ($price * $quantity);
            }
        }
        return $totalSum;
    }

    public static function getProductsInBasket(): array
    {
        $basket = Yii::$app->basket->getBasket();
        $products = [];
        $iterator = 1;
        if (!is_null($basket)) {
            foreach ($basket as $id => $quantity) {
                $model = Product::find()->where(['id' => $id])->one();
                $products[] = [
                    'product' => $model,
                    'quantity' => $quantity,
                    'num' => $iterator,
                ];
                $iterator++;
            }
        }
        return $products;
    }

    public static function getProductNum()
    {
        $basket = Yii::$app->basket->getBasket();

        return is_null($basket) ? 0 : count($basket);
    }

    public static function saveProductsInOrder($order_id)
    {
        $basket = Yii::$app->basket->getBasket();
        foreach ($basket as $id => $quantity) {
            (new OrdersProducts([
                'order_id' => $order_id,
                'product_id' => $id,
                'quantity' => $quantity,
            ]))->save();
        }
    }

}