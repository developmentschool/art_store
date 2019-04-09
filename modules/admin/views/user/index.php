<?php

use app\modules\admin\models\Users;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\search\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php \yii\widgets\Pjax::begin() ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'verification_token',
            'email:email',
            Users::getStatusColumnForWidget(),
            //'created_at',
            //'updated_at',
            [
                'class' => \app\widgets\ActionColumn::class,
                'buttonOptions' => [
                    'delete' => [
                        'data-confirm' => Yii::t('yii', 'Are you sure you want to mark this user as deleted?'),
                    ]
                ],
                'visibleButtons' => [
                    'delete' => function ($model) {
                        return (bool)$model->status;
                    }
                ]
            ],
        ]
    ]); ?>

    <?php \yii\widgets\Pjax::end() ?>
</div>
