<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 23.03.2019
 * Time: 13:54
 */
?>
<?php foreach ($cats as $cat): ?>
    <div class="col">
        <div class="category text-center">
            <a href="#">
                <img class="category-img" src="http://placehold.it/64x64/FFA500/ffffff/&text=Cat"
                     alt="#">
                <p><?= $cat['title'] ?></p>
            </a>
        </div>
    </div>
<?php endforeach ?>
