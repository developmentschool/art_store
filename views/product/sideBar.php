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
<!--<div class="col-auto">-->
<!--    <div class="sidebar">-->
<!--        <div class="sidenav-title">AVAILABLE CATEGORIES</div>-->
<!--        <ul class="nav sidenav">-->
<!--            <li><a href="#">Товары 1</a></li>-->
<!--            <li><a href="#">Товары 2</a></li>-->
<!--            <li><a href="#">Товары 3</a></li>-->
<!--            <li><a href="#">Товары 4</a></li>-->
<!--            <li><a href="#">Товары 5</a></li>-->
<!--            <li><a href="#">Товары 6</a></li>-->
<!--            <li><a href="#">Какое-то очень-очень длинное название</a></li>-->
<!--            <li><a href="#">Товары 8</a></li>-->
<!--            <li><a href="#">Товары 9</a></li>-->
<!--            <li><a href="#">Товары 10</a></li>-->
<!--            <li><a href="#">Товары 11</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->

