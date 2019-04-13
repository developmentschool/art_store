<?php
/* @var $this yii\web\View */
/* @var $category \app\models\tables\Category */
/* @var $categoryDataProvider \yii\data\ActiveDataProvider */
/* @var $productDataProvider \yii\data\ActiveDataProvider */

$this->title = $category->title;

$parents = [];
$cat = $category;
while ($parent = $cat->parent) {
    $parents[] = [
        'label' => $parent->title,
        'url' => ['view', 'id' => $parent->id]
    ];

    $cat = $parent;
}

$parents[] = ['label' => 'Категории', 'url' => ['index']];

$parents = array_reverse($parents);

$this->params['breadcrumbs'] = $parents;
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('categoryView', ['categoryDataProvider' => $categoryDataProvider]);

echo \yii\widgets\ListView::widget([
    'dataProvider' => $productDataProvider,
    'options' => [
        'class' => 'row'
    ],
    'itemOptions' => [
        'class' => 'col-sm-6 col-lg-3'
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
            'class' => 'pagination col-lg-12'
        ]
    ]
]);


