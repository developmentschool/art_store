<?php
echo \yii\widgets\ListView::widget([
    'dataProvider' => $productDataProvider,
    'layout' => "{summary}\n<div class=row>{items}</div>\n{pager}",
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
        'firstPageLabel' => 'Начало',
        'lastPageLabel' => 'Конец',
        'prevPageLabel' => '«',
        'nextPageLabel' => '»',
        'linkContainerOptions' => ['class' => 'page-item'],
        'linkOptions' => ['class' => 'page-link'],
        'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
        'maxButtonCount' => 3,
        'options' => [
            'class' => 'pagination justify-content-center'
        ]
    ],
]);
