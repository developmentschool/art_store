<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 23.03.2019
 * Time: 21:58
 */


use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;
use yii\widgets\Menu;

?>
<?php
NavBar::begin([

    'brandLabel' => 'Доступные категории',
    'brandUrl' => \yii\helpers\Url::to(['category/index']),
    'options' => [
        'class' => 'navbar',
    ],
]);
//var_dump($menuItems);exit;
echo Menu::widget([
    'items' => $menuItems,
    'options' => [

    ],
]);
NavBar::end();

?>


