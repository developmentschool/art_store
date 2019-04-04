<?php
/* @var $this yii\web\View */

use yii\widgets\Pjax;

?>


<?php Pjax::begin([
    'linkSelector' => '.order-steps-item',
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
            <tr>
                <td>1</td>
                <td><img src="http://placehold.it/100x100/33bee5/ffffff/&text=Slide 1" alt="#"></td>
                <td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>
                <td>1000 РУБ</td>
                <td>
                    <div class="input-quantity _js_quantity">
                        <button class="btn btn-outline-secondary _js_minus" type="button">-</button>
                        <input type="text" class="form-control _js_input" value="1">
                        <button class="btn btn-outline-secondary _js_plus" type="button">+</button>
                    </div>
                </td>
                <td>1000 РУБ</td>
                <td><span class="delete-order">X</span></td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="http://placehold.it/100x100/33bee5/ffffff/&text=Slide 1" alt="#"></td>
                <td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>
                <td>1000 РУБ</td>
                <td>
                    <div class="input-quantity _js_quantity">
                        <button class="btn btn-outline-secondary _js_minus" type="button">-</button>
                        <input type="text" class="form-control _js_input" value="1">
                        <button class="btn btn-outline-secondary _js_plus" type="button">+</button>
                    </div>
                </td>
                <td>1000 РУБ</td>
                <td><span class="delete-order">X</span></td>
            </tr>
            <tr>
                <td>3</td>
                <td><img src="http://placehold.it/100x100/33bee5/ffffff/&text=Slide 1" alt="#"></td>
                <td>1/48 MESSERSCHMITT Me 410B-2/U2/R4 HEAVY FIGHTER</td>
                <td>1000 РУБ</td>
                <td>
                    <div class="input-quantity _js_quantity">
                        <button class="btn btn-outline-secondary _js_minus" type="button">-</button>
                        <input type="text" class="form-control _js_input" value="1">
                        <button class="btn btn-outline-secondary _js_plus" type="button">+</button>
                    </div>
                </td>
                <td>1000 РУБ</td>
                <td><span class="delete-order">X</span></td>
            </tr>
        </table>

        <div class="row mt-5">
            <div class="col-md-6">
                <form action="#">
                    <h2 class="h3 pb-3">Coupon</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter coupon">
                    </div>
                    <button type="submit" class="btn btn-primary">Apply coupon</button>
                </form>
            </div>
            <div class="col-md-6">
                <form action="#">
                    <h2 class="h3 pb-3">Cart total</h2>
                    <table class="table table-bordered total-table">
                        <tr>
                            <td class="font-weight-bold">Subtotal</td>
                            <td class="text-center">3000 РУБ</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Shipping</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Total</td>
                            <td class="text-center">3000 РУБ</td>
                        </tr>
                    </table>
                    <button class="btn btn-primary">Update cart</button>
                    <button class="btn btn-primary">Proceed to checkout</button>
                </form>
            </div>
        </div>
    </div>
<?php Pjax::end() ?>