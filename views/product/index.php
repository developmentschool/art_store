<?php

$this->title = 'Каталог';


$this->params['breadcrumbs'][] = $this->title;

echo $this->render('productView', ['productDataProvider' => $productDataProvider]);