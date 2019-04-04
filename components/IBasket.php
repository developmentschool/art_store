<?php


namespace app\components;


interface IBasket
{
    public function addToBasket($id,$count);

    public function delFromBasket($id,$count);

    public function clearBasket();

    public function getBasket();
}