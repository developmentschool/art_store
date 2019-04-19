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
    public static function getRandomCategory(int $sum): array
    {
        if ($sum < 1 || is_null($sum)) {
            return [];
        }
        $array = static::randIntArray($sum);
        $cats = Category::find()->where(['id' => $array])->all();

        return $cats;

    }

    private static function randIntArray(int $sum): array
    {
        $quantityOfCategory = Category::find()->count();

        $data = Category::find()->select('id')->asArray(true)->all();
        $ids = ArrayHelper::getColumn($data, 'id');
        if ($quantityOfCategory <= $sum) {
            return $ids;
        }
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

    /**
     * @param array $exception
     * @return array
     */
    public static function getAllCategoryDrop($exception = [])
    {
        $query = Category::find();
        if ($column = array_key_first($exception)) {
            $query->where(['not in', $column, $exception[$column]]);
        }
        return ArrayHelper::map($query->asArray()->all(), 'id', 'title');

    }
}