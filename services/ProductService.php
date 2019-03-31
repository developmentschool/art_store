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


    public static function getNewProducts($int)
    {
        $products = Product::find()
            ->orderBy(['updated_at' => SORT_DESC])
            ->limit($int)
            ->all();
        return $products;
    }

    public static function getNewsOtherProducts($int)
    {
        $products = Product::find()
            ->orderBy(['id' => SORT_DESC])
            ->limit($int)
            ->all();
        return $products;
    }

    public static function getProductsByCategory($int, $limit)
    {
        $products = Product::find()
            ->where(['category_id' => $int])
            ->limit($limit)
            ->all();
        return $products;
    }
}