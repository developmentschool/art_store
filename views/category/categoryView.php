<?php
/* @var $this \yii\web\View */
/* @var $categoryDataProvider \yii\data\ActiveDataProvider */


echo \yii\widgets\ListView::widget([
    'dataProvider' => $categoryDataProvider,
    'options' => [
        'class' => 'row'
    ],
    'itemOptions' => [
        //'class' => 'col'
    ],
    'summary' => false,
    'emptyText' => false,
    'itemView' => function ($model, $key, $index, $widget) {
        /* @var $modet \app\models\tables\Category */
        /* @var $widget \yii\widgets\ListView */
        return $widget->getView()->render('categoryItem', ['model' => $model]);
    }
]);
