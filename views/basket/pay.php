<?php
/* @var $this yii\web\View */

use yii\web\View;

?>
<?php
echo $this->render('head',['mark'=>$mark]);
?>

<div class="container-fluid my-5">
    <form action="#" style="display: inline-block;">
        <div class="form-group">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Order number: <strong>83778</strong></li>
                <li class="list-group-item">Date: <strong>3 April, 2019</strong></li>
                <li class="list-group-item">Total: <strong class="price">6000 РУБ</strong></li>
                <li class="list-group-item">Payment method: <strong>Credit Card</strong></li>
            </ul>
        </div>
        <div class="form-group">
            Thanks for your order, please push the button to pay it with credit card.
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Pay with credit card</button>
            <button class="btn btn-primary">Cancel order</button>
        </div>
    </form>
</div>
