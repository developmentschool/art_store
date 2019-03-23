<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 22.03.2019
 * Time: 20:00
 */

namespace app\components;


class MenuHelper
{

    /**
     * @param $parent
     *
     * @return array
     */
    public static function formTree($items): array
    {

        $result = [];
        foreach ($items as $item) {
            if (is_null($item['parent_id'])) {
                $item['parent_id'] = 0;
            }
            $result[$item['parent_id']][] = $item;
        }
        return $result;
    }

    public static function buildTree(array $tree, $parent_id): string
    {

        //TODO: вставить нужные блоки HTML для вывода многоуровневого dropdownMenu
        if (is_array($tree) && isset($tree[$parent_id])) {
            $html = '<ul class="dropdown-menu">';
            foreach ($tree[$parent_id] as $cat) {
                $html .= '<li><a class="dropdown-item dropdown-toggle" href="#">' . $cat['title'];
                $html .= static::buildTree($tree, $cat['id']);
                $html .= '</a></li>';
            }
            $html .= '</ul>';
        } else {
            return false;
        }
        return $html;
    }

}