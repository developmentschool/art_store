<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'parent_id',
            // 'created_at',
            // 'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                // 'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<i class="fas fa-eye"></i>', $url);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<i class="fas fa-pencil-alt"></i>', $url);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<i class="far fa-trash-alt"></i>', $url);
                    },
                ],
            ],
        ],
        'pager' => [
            'firstPageLabel' => 'Начало',
            'lastPageLabel' => 'Конец',
            'prevPageLabel' => '«',
            'nextPageLabel' => '»',
            'linkContainerOptions' => ['class' => 'page-item'],
            'linkOptions' => ['class' => 'page-link'],
            'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
            'maxButtonCount' => 3,
        ],
    ]); ?>

</div>
