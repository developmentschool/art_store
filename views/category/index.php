<?php
/* @var $this \yii\web\View */
/* @var $categoryDataProvider \yii\data\ActiveDataProvider */

<<<<<<< HEAD
$this->title = 'Категории';
=======
$this->title = 'Category';
>>>>>>> master

$this->params['breadcrumbs'][] = $this->title;

 echo $this->render('categoryView', ['categoryDataProvider' => $categoryDataProvider]);