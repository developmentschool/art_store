<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 23.03.2019
 * Time: 13:54
 */

use yii\helpers\Url;

?>
<?php foreach ($cats as $cat): ?>
    <div class="col">
        <div class="category text-center">
            <a href="<?= Url::to(['category/view', 'id' => $cat->id]) ?>">
                <img src="<?= $cat->mainImage->url ?>"
                     alt="#">
                <p><?= $cat->title ?></p>
            </a>
        </div>
    </div>
<?php endforeach ?>
