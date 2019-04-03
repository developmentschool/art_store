<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ArrayDataProvider */
/* @var $searchModel rbac\models\search\BizRuleSearch */

$this->title = Yii::t('yii2mod.rbac', 'Rules');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-index">

    <h1><?php echo Html::encode($this->title); ?></h1>

    <p>
        <?php echo Html::a(Yii::t('yii2mod.rbac', 'Create Rule'), ['create'], ['class' => 'btn btn-success']); ?>
    </p>

    <?php Pjax::begin(['timeout' => 5000]); ?>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'label' => Yii::t('yii2mod.rbac', 'Name'),
            ],
            [
                'header' => Yii::t('yii2mod.rbac', 'Action'),
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view' => function ($url) {
                        return Html::tag('a', '<i class="far fa-eye"></i>', ['href' => $url, 'class' => 'mr-2']);
                    },
                    'update' => function ($url) {
                        return Html::tag('a', '<i class="far fa-edit"></i>', ['href' => $url, 'class' => 'mr-2']);
                    },
                    'delete' => function ($url) {
                        return Html::tag(
                            'a',
                            '<i class="fas fa-trash-alt"></i>',
                            [
                                'href' => $url,
                                'class' => 'mr-2',
                                'data-confirm' => Yii::t('yii2mod.rbac', 'Are you sure to delete this item?'),
                                'data-method' => 'post',
                            ]
                        );
                    },
                ]
            ],
        ],
    ]);
    ?>

    <?php Pjax::end(); ?>
</div>
