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

<<<<<<< HEAD
$parents[] = ['label' => 'Категории', 'url' => ['index']];
=======
$parents[] = ['label' => 'Category', 'url' => ['index']];
>>>>>>> master

$parents = array_reverse($parents);

$this->params['breadcrumbs'] = $parents;
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('categoryView', ['categoryDataProvider' => $categoryDataProvider]);

echo \yii\widgets\ListView::widget([
    'dataProvider' => $productDataProvider,
<<<<<<< HEAD
    'layout' => "{summary}\n<div class=row>{items}</div>\n{pager}",
=======
    'options' => [
        'class' => 'row'
    ],
>>>>>>> master
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
<<<<<<< HEAD
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
=======
        'pageCssClass' => 'page-link',
        'prevPageCssClass' => 'page-link',
        'nextPageCssClass' => 'page-link',
        'options' => [
            'class' => 'pagination col-lg-12'
        ]
    ]
>>>>>>> master
]);


