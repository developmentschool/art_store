<?php

use app\modules\admin\models\Category;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\search\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
$dataProvider->setSort([
    'attributes' => [
        'id',
        'title',
//        'parent.title',
        'status'
    ]
])
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<!--    --><?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'id',
                'filter' => false
            ],
            'title',
            [
                'attribute' => 'parent.title',
                'value' => function ($model) {
                    return $model->parent ? $model->parent->title : '---';
                },
                //'filter' => Html::input('text', 'CategorySearch[parent]', '', ['class' => 'form-control'])
            ],
            Category::getStatusColumnForWidget(),
            [
                'class' => \app\widgets\ActionColumn::class,
                'buttonOptions' => [
                    'delete' => [
                        'data-confirm' => Yii::t('yii', 'Are you sure you want to mark this product as deleted?'),
                    ]
                ],
                'visibleButtons' => [
                    'delete' => function ($model) {
                        return (bool)$model->status;
                    }
                ]

            ],
        ],
        'pager' => [
            'pageCssClass' => 'page-link',
            'prevPageCssClass' => 'page-link',
            'nextPageCssClass' => 'page-link',
            'options' => [
                'class' => 'pagination col-lg-12'
            ]
        ]
    ]); ?>


</div>
