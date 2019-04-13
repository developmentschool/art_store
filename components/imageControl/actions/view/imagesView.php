<?php
/* @var $dataProvider \yii\data\ActiveDataProvider */


echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'imageItem',
    'summary' => false,
    'emptyText' => 'No images for this product.',
    'itemOptions' => function ($model) {
        return [
            'class' => 'd-inline-block mr-2 position-relative',
        ];
    }
]);
