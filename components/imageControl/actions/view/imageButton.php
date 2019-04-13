<?php

/* @var $this \yii\web\View */

?>

<a href="<?= \yii\helpers\Url::to(['image-delete', 'id' => $model->id]) ?>" data-confirm="Are you sure to delete this item?" data-method="post" data-pjax="">
    <button type="button" class="close position-absolute" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</a>

<?= $this->render('imageItem', ['model' => $model]) ?>
