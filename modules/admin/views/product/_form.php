<?php

use app\services\CategoryService;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
/* @var $images string */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(CategoryService::getAllCategoryDrop()) ?>

    <?= $form->field($model, 'status')->dropDownList($model->getStatuses(), [
        'options' => [
            $model->status ?? $model->getDefaultStatus() => [
                'selected' => true
            ]
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php if ($images): ?>
        <h3>Pictures</h3>

        <?= $images ?>

    <?php endif; ?>
</div>
