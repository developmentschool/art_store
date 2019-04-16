<?php

use app\modules\admin\models\Orders;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\search\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'attribute' => 'user.username',
                'filter' => Html::input('text', 'OrdersSearch[username]', $searchModel->username, ['class' => 'form-control'])

            ],
            'shipment_addr',
            Orders::getStatusColumnForWidget(),
            [
                'class' => \app\widgets\ActionColumn::class,
                'template' => '{view}'
            ],
        ],
    ]); ?>


</div>
