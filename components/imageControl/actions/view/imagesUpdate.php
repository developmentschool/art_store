<?php

/* @var $dataProvider \yii\data\ActiveDataProvider */
/* @var $imageModel \app\models\tables\Picture */

\yii\widgets\Pjax::begin([
    'enablePushState' => false
]);

echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'imageButton',
    'summary' => false,
    'emptyText' => 'No images for this product.',
    'itemOptions' => function ($model) {
        return [
            'class' => 'd-inline-block mr-2 position-relative',
        ];
    }

]);

$form = \yii\bootstrap4\ActiveForm::begin([
    'action' => \yii\helpers\Url::to(['image-add']),
    'options' => [
        'data-pjax' => '',
    ]
]);

echo $form->field($imageModel, 'file', ['options' => ['style' => 'width: 450px']])->label(false)->widget(\kartik\file\FileInput::class, [
    'options' => ['accept' => 'image/*'],
    'pluginOptions' => [
        'allowedFileExtensions' => $imageModel->getActiveValidators('file')[0]->extensions
    ]
]);

\yii\bootstrap4\ActiveForm::end();

\yii\widgets\Pjax::end();

