<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\assets\FontAwesomeAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Html;

AppAsset::register($this);
FontAwesomeAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="page">

        <div class="top-bar">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <form action="#" class="header-search">
                            <input type="text" placeholder="Search">
                        </form>
                    </div>
                    <div class="col-auto d-flex">
                        <ul class="header-icons">
                            <li>&nbsp;</li>
                            <li>
                                <a href="#" class="count-item">
                                    <i class="fas fa-tag"></i>
                                    <div class="count-item__count">0</div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="count-item">
                                    <i class="fas fa-shopping-cart"></i>
                                    <div class="count-item__count">12</div>
                                </a>
                            </li>
                            <li>
                                <div class="header-account">
                                    <a href="#" class="link">Login or Register</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <header>
            <div class="container-fluid py-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <a href="#" class="logo"><img src="<?= \yii\helpers\Url::to(['@web/img/logo.png']) ?>" alt="Логотип"></a>
                    </div>
                </div>
            </div>
            <div class="wide-nav">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-vertical-menu d-flex align-items-center _js_dropdown-menu">
                                <div class="navbar-dark">
                                    <span class="navbar-toggler-icon"></span>
                                </div>
                                <ul class="dropdown-menu header-dropdown-menu">-->
                                    <!--                                    --><?php
                                    //                                    $models=\app\models\tables\Category::find()->all();
                                    //                                    $tree=\app\components\MenuHelper::formTree($models);
                                    //                                    $string=\app\components\MenuHelper::buildTree($tree, 0);
                                    //                                   // var_dump($string);exit;
                                    //                                    echo $string;
                                    //                                    ?>

                                    <li><a class="dropdown-item" href="#">Home</a></li>
                                    <li><a class="dropdown-item dropdown-toggle" href="#">Catalog</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Home</a></li>
                                            <li><a class="dropdown-item" href="#">Catalog</a></li>
                                            <li><a class="dropdown-item dropdown-toggle" href="#">About</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Home</a></li>
                                                    <li><a class="dropdown-item" href="#">Catalog</a></li>
                                                    <li><a class="dropdown-item" href="#">About</a></li>
                                                    <li><a class="dropdown-item" href="#">Contacts</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Contacts</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">About</a></li>
                                    <li><a class="dropdown-item" href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="social-item ml-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-item ml-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-item ml-3"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="social-item ml-3"><i class="fas fa-envelope"></i></a>
                            <a href="#" class="social-item ml-3"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
        ]) ?>

        <div class="container-fluid py-5">
            <?= $content ?>
        </div>

        <footer class="mt-auto">
            <div class="footer-top-bar">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <i class="far fa-envelope"></i>
                            <a href="">support@art_store.com</a>
                        </div>
                        <div class="col-auto">
                            <ul class="nav footer-nav">
                                <li>&nbsp;</li>
                                <li><a href="#">Downloads</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Order & Return</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-center-bar">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <a href="#" class="social-item-round mr-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-item-round mr-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-item-round mr-3"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="social-item-round mr-3"><i class="fas fa-envelope"></i></a>
                            <a href="#" class="social-item-round mr-3"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-bar text-center">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit,
                            doloribus.
                        </div>
                        <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit,
                            doloribus.
                        </div>
                        <div class="col">8 333 333 55 77<br> 8 333 333 55 77</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>