<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 23.03.2019
 * Time: 12:43
 */

namespace app\services;


use app\models\tables\Category;
use yii\helpers\ArrayHelper;

class CategoryService
{
    public static function getRandomCategory($sum): array
    {
        $array = static::randIntArray($sum);
        $cats = Category::find()->where(['id' => $array])->asArray()->all();
        return $cats;

    }

    private static function randIntArray($sum): array
    {
        $quantityOfCategory = Category::find()->count();
        $data = Category::find()->select('id')->asArray(true)->all();
        $ids = ArrayHelper::getColumn($data, 'id');
        $array = [];
        $iterator = 1;

        while ($iterator <= $sum) {
            $int = random_int(1, $quantityOfCategory);
            if (in_array($int, $array) || !in_array($int, $ids)) {
                continue;
            } else {
                $array[] = $int;
                $iterator++;
            }
        }
        return $array;

    }
}