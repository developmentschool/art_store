<?php
$this->title = 'Product';

$this->params['breadcrumbs'][] = $this->title;

echo $this->render('productView', ['productDataProvider' => $productDataProvider]);