<?php

use yii\grid\DataColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this \yii\web\View */
/* @var $gridViewColumns array */
/* @var $dataProvider \yii\data\ArrayDataProvider */
/* @var $searchModel rbac\models\search\AssignmentSearch */

$this->title = Yii::t('yii2mod.rbac', 'Assignments');
$this->params['breadcrumbs'][] = $this->title;
$this->render('/layouts/_sidebar');
?>
<div class="assignment-index">

    <h1><?php echo Html::encode($this->title); ?></h1>

    <?php Pjax::begin(['timeout' => 5000]); ?>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => ArrayHelper::merge($gridViewColumns, [
            [
                'header' => Yii::t('yii2mod.rbac', 'Role'),
                'class' => DataColumn::class,
                'attribute' => 'roleName',
                'value' => function ($model) {
                    return implode(', ', ArrayHelper::map(Yii::$app->getAuthManager()->getRolesByUser($model->id), 'name', 'name'));
                },
                'filter' => ArrayHelper::map(Yii::$app->getAuthManager()->getRoles(), 'name', 'name')
            ],
            [
                'header' => Yii::t('yii2mod.rbac', 'Action'),
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => [
                    'view' => function ($url) {
                        return Html::tag('a', '<i class="far fa-eye"></i>', ['href' => $url]);
                    },
                ]
            ],
        ]),
        'pager' => [
            'pageCssClass' => 'page-link',
            'prevPageCssClass' => 'page-link',
            'nextPageCssClass' => 'page-link',
            'options' => [
                'class' => 'pagination col-lg-12'
            ]
        ]
    ]); ?>

    <?php Pjax::end(); ?>
</div>
