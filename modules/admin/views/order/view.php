<?php

use app\modules\admin\models\Orders;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Orders */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php

        foreach (Orders::getStatuses() as $status) {
            $const = Orders::class . '::' . strtoupper($status);
            $options = [
                'class' => $model->getStatusesCssClass('btn')[constant($const)],
                'data' => [
                    'confirm' => 'Are you sure you want to change the status?',
                    'method' => 'post',
                ],
            ];
            if ($model->status === constant($const)) {
                Html::addCssClass($options, 'disabled');
            }
            echo Html::a($status, ['change-status', 'id' => $model->id, 'status' => constant($const)], $options);
        }

        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user.username',
            'shipment_addr',
            Orders::getStatusColumnForWidget(),
            'created_at',
            'updated_at',
        ],
    ]) ?>

    <h3>Products</h3>
    <?= \yii\grid\GridView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getProducts()]),
        'columns' => [
            'id',
            'title',
            'price',
            [
                'label' => 'Quantity',
                'value' => function ($product) use ($model) {
                    return $product->getQuantityInOrder($model->id);
                },
                'footer' => Html::tag('strong', 'Total:'),
            ],
            [
                'label' => 'Amount',
                'value' => function ($product) use ($model) {
                    return $product->getQuantityInOrder($model->id) * $product->price;
                },
                'footer' => Html::tag(
                    'strong',
                    Yii::$app->formatter->asCurrency(\app\services\OrderService::getTotalCostOrder($model))
                ),
                'format' => 'currency',
            ],
        ],
        'showFooter' => true,
        'footerRowOptions' => [
            'class' => 'table-primary'
        ],
        'summary' => false
    ]) ?>

</div>
