<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \app\modules\admin\models\Product;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Users */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= $model->status ? Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) : null ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'auth_key',
            //'password_hash',
            'password_reset_token',
            'verification_token',
            'email:email',
            Product::getStatusColumnForWidget(),
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
