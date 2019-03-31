<?php
/* @var $this \yii\web\View */
/* @var $categoryDataProvider \yii\data\ActiveDataProvider */

$this->title = 'Category';

$this->params['breadcrumbs'][] = $this->title;

 echo $this->render('categoryView', ['categoryDataProvider' => $categoryDataProvider]);