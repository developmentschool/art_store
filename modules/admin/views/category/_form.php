<?php

use app\services\CategoryService;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $form yii\widgets\ActiveForm */
/* @var $images string */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::merge(
        ['' => '---'],
        CategoryService::getAllCategoryDrop($model->isNewRecord ? [] : ['id' => [$model->id]])
    )) ?>

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
