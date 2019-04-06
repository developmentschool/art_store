<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Pjax;

?>
<?php Pjax::begin([
    'linkSelector' => '.basket-next',
]) ?>
<?php
echo $this->render('head', ['mark' => $mark]);
?>

    <div class="container-fluid my-5">
        <form action="<?= Url::toRoute('/basket/order')?>" name="order" method="post">
            <div class="row">
                <div class="col-md-6 pt-3" style="border: 5px solid transparent;">
                    <h2 class="h3 pb-3">Детали заказа</h2>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="label" for="exampleInputFirstName1">Имя <span
                                            class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputFirstName1">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="label" for="exampleInputLastName1">Фамилия <span
                                            class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputLastName1">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label" for="exampleInputAddress1">Адрес доставки <span
                                    class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputAddress1"
                               placeholder="Улица и номер дома">
                    </div>
                    <div class="form-group">
                        <label class="label" for="exampleInputCity1">Город <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Город">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="label" for="exampleInputPhone1">Номер телефона <span
                                            class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="exampleInputPhone1" placeholder="(978)987-65-43">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="label" for="exampleInputEmail1">Email </label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="name@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label" for="exampleInputText1">Комментарий заказа</label>
                        <textarea class="form-control" id="exampleInputText1"
                                  placeholder="Уточнения для доставки"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3" style="border: 5px solid #eeeeee;">
                        <h2 class="h3 pb-3">Ваш заказ</h2>
                        <table class="table table-bordered checkout-table">
                            <tr>
                                <th>Товар</th>
                                <th>Количество</th>
                                <th>Сумма</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?= $product['product']->title ?></td>
                                    <td><?= $product['quantity'] ?></td>
                                    <td class="price"><?= $product['product']->price * $product['quantity'] ?> РУБ</td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td>Общая сумма</td>
                                <td>&nbsp;</td>
                                <td class="price"><?= $totalSum ?> РУБ</td>
                            </tr>
                        </table>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                   value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Наличными курьеру
                            </label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                   value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Самовывоз
                            </label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" required class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Я прочитал и согласен с условиями
                                покупки <span class="text-danger">*</span></label>
                        </div>

                    </div>
                    <a class="btn btn-primary basket-next" href="<?= Url::toRoute('/basket') ?>" role="button">Назад</a>
                    <button type="submit" class="btn btn-primary">Оформить</button>

                </div>

            </div>
        </form>
    </div>
<?php Pjax::end() ?>