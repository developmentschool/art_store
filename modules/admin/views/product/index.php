<?php

use app\modules\admin\models\Product;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
$dataProvider->setSort([
    'attributes' => [
        'id',
        'title',
        'description',
        'price',
        'category.title',
        'status'
    ]
])
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php \yii\widgets\Pjax::begin() ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'price',
            [
                'attribute' => 'category.title',
                'filter' => Html::input('text', 'ProductSearch[category]', $searchModel->category, ['class' => 'form-control'])
            ],
            Product::getStatusColumnForWidget(),
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

    <?php \yii\widgets\Pjax::end() ?>

</div>
