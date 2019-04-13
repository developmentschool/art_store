<?php
/* @var $this yii\web\View */

use yii\widgets\Pjax;
use yii\helpers\Url;

?>


<?php Pjax::begin([
    'linkSelector' => '.cart-next',
]) ?>
<?php
echo $this->render('head', ['mark' => $mark]);
?>

    <div class="container-fluid my-5">
        <table class="table table-bordered order-table">
            <tr>
                <th>#</th>
                <th colspan="2">Продукт</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
                <th>X</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr data-id="<?= $product['product']->id ?>">
                    <td><?= $product['num'] ?></td>
                    <td><img src="<?= $product['product']->mainPictureUrl ?>" alt="#"></td>
                    <td><?= $product['product']->title ?></td>
                    <td><span class="prod-price"><?= $product['product']->price ?></span> РУБ</td>
                    <td>
                        <div class="input-quantity _js_quantity">
                            <button class="btn btn-outline-secondary _js_minus btn-cart-minus" type="button">-</button>
                            <input type="text" class="form-control _js_input"
                                   value="<?= $product['quantity'] ?>">
                            <button class="btn btn-outline-secondary _js_plus btn-cart-plus" type="button">+</button>
                        </div>
                    </td>
                    <td><span class="product-sum"><?= $product['product']->price * $product['quantity'] ?></span> РУБ
                    </td>
                    <td><span class="delete-order"><a href="
                    <?= \yii\helpers\Url::toRoute(['cart/delete-item', 'id' => $product['product']->id]) ?>
">X</a></span></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="row mt-5">
            <div class="col-md-6">
                <form action="#">
                    <h2 class="h3 pb-3">Купон</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите купон">
                    </div>
                    <button type="submit" class="btn btn-primary">Ввести купон</button>
                </form>
            </div>
            <div class="col-md-6">
                <form action="#">
                    <h2 class="h3 pb-3">Сумма корзины</h2>
                    <table class="table table-bordered total-table">
                        <tr>
                            <td class="font-weight-bold">Сумма покупки</td>
                            <td class="text-center" id="subTotalSum"><?= $totalSum ?> РУБ</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Доставка</td>
                            <td class="text-center">0 РУБ</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Всего к оплате</td>
                            <td class="text-center" id="totalSum"><?= $totalSum ?> РУБ</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary" href="<?= Url::toRoute('/product') ?>" role="button">Продолжить
                        покупки</a>
                    <a class="btn btn-primary basket-next" href="<?= Url::toRoute('/cart/checkout') ?>" role="button">Оформить
                        заказ</a>
                    <a class="btn btn-primary" href="<?= Url::toRoute('/cart/delete') ?>" role="button">Удалить
                        корзину</a>
                </form>
            </div>
        </div>
    </div>
<?php Pjax::end() ?>