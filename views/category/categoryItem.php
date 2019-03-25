<?php
/* @var $model \app\models\tables\Category */

use yii\helpers\Url;

?>

<div class="col">
    <div class="category text-center">
        <a href="<?= Url::to(['view', 'id' => $model->id]) ?>">
            <img class="category-img" src="http://placehold.it/64x64/FFA500/ffffff/&amp;text=Cat" alt="#">
            <p><?= $model->title ?></p>
        </a>
    </div>
</div>
