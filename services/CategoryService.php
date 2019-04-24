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
        $ids = Category::find()->where(['parent_id' => null])->select('id')->column();

        shuffle($ids);

        return array_slice($ids, 0, $sum);
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