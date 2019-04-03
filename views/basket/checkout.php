<?php
/* @var $this yii\web\View */

use yii\web\View;

?>
<?php \yii\widgets\Pjax::begin([
    'linkSelector' => '.order-steps-item',
])?>
<?php

echo $this->render('head',['mark'=>$mark]);
?>

<div class="container-fluid my-5">
    <form action="#">
        <div class="row">
            <div class="col-md-6 pt-3" style="border: 5px solid transparent;">
                <h2 class="h3 pb-3">Billing Details</h2>
                <div class="form-group">
                    <label class="label" for="inputGroupSelect01">Country <span class="text-danger">*</span></label>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label class="label" for="exampleInputFirstName1">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="exampleInputFirstName1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label class="label" for="exampleInputLastName1">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="exampleInputLastName1">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputCompany1">Company Name</label>
                    <input type="text" class="form-control" id="exampleInputCompany1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputAddress1">Street address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="exampleInputAddress1" placeholder="House number and street name">
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputCity1">City <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="City">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label class="label" for="exampleInputPhone1">Phone Numer <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="exampleInputPhone1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label class="label" for="exampleInputEmail1">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label" for="exampleInputText1">Order notes (optional)</label>
                    <textarea class="form-control" id="exampleInputText1" placeholder="Special notes for delivery"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3" style="border: 5px solid #eeeeee;">
                    <h2 class="h3 pb-3">Your Order</h2>
                    <table class="table table-bordered checkout-table">
                        <tr>
                            <th>Товар</th>
                            <th>Количество</th>
                            <th>Сумма</th>
                        </tr>
                        <tr>
                            <td>BELFORD MKII 150mm</td>
                            <td>2</td>
                            <td class="price">2000 РУБ</td>
                        </tr>
                        <tr>
                            <td>BELFORD MKII 150mm</td>
                            <td>3</td>
                            <td class="price">3000 РУБ</td>
                        </tr>
                        <tr>
                            <td>ZELDA M113 IN IDF SERVICE - PART3 APC & TOGA</td>
                            <td>1</td>
                            <td class="price">1000 РУБ</td>
                        </tr>
                        <tr>
                            <td>Общая сумма</td>
                            <td>&nbsp;</td>
                            <td class="price">6000 РУБ</td>
                        </tr>
                    </table>
                    <div class="form-group form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Credit Card
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            PayPal
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">I have read and agree to the website terms and conditions <span class="text-danger">*</span></label>
                    </div>
                    <button type="submit" class="btn btn-primary">Place Order</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php \yii\widgets\Pjax::end()?>