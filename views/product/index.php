<?php
<<<<<<< HEAD
$this->title = 'Каталог';
=======
$this->title = 'Product';
>>>>>>> master

$this->params['breadcrumbs'][] = $this->title;

echo $this->render('productView', ['productDataProvider' => $productDataProvider]);