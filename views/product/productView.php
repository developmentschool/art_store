<?php
echo \yii\widgets\ListView::widget([
    'dataProvider' => $productDataProvider,
    'options' => [
        'class' => 'row',
    ],
    'itemOptions' => [
        'class' => 'col-sm-6 col-md-4 col-lg-3',
    ],
    'summary' => false,
    'emptyText' => false,
    'itemView' => function ($model, $key, $index, $widget) {
        /* @var $model \app\models\tables\Product */
        /* @var $widget \yii\widgets\ListView */
        return $widget->getView()->render('productItem', ['model' => $model]);
    },
    'pager' => [
        'pageCssClass' => 'page-link',
        'prevPageCssClass' => 'page-link',
        'nextPageCssClass' => 'page-link',
        'options' => [
            'class' => 'pagination col-lg-12',
        ],
    ],
]);
