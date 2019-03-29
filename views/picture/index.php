<?php
/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
?>
<h1>picture/index</h1>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

<button>Submit</button>

<?php ActiveForm::end() ?>

