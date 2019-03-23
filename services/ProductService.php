<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 23.03.2019
 * Time: 11:54
 */

namespace app\services;


use app\models\tables\Product;

class ProductService
{


   public static function getNewProducts()
    {
        $products = Product::find()
            ->orderBy(['updated_at' => SORT_DESC])
            ->limit(5)
            ->asArray()
            ->all();
        return $products;
    }

    public static function getNewsOtherProducts()
    {
        $products = Product::find()
            ->orderBy(['id' => SORT_DESC])
            ->limit(5)
            ->asArray()
            ->all();
        return $products;
    }
}