<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\assets\FontAwesomeAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;

$session = Yii::$app->session;
$session->open();
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
                            <input type="text" placeholder="Поиск">
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
                                <a href=" <?=Url::toRoute('/cart')?>" class="count-item">
                                    <i class="fas fa-shopping-cart"></i>
                                    <div class="count-item__count">0</div>
                                </a>
                            </li>
                            <li>
                                <div class="header-account">
                                    <?php
                                    if (Yii::$app->user->isGuest) {
                                        echo Html::a('Вход или Регистрация', ['site/login'], ['class' => 'link']);
                                    } else {
                                        echo Html::a(
                                            'Выйти',
                                            ['site/logout'],
                                            [
                                                'class' => 'link',
                                                'data' => [
                                                    'method' => 'post',
                                                    'confirm' => 'Вы действительно хотите выйти?',
                                                ],
                                            ]
                                        );
                                    }
                                    ?>
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
                        <a href="/" class="logo"><img src="<?= Yii::$app->cloudinary->getImageURL('logo.png') ?>"
                                                      alt="Art-Store-Studio">
                        </a>
                    </div>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item d-flex flex-column justify-content-center">
                            <span>Art-Store Studio<br>С нами проявится ваш талант</span>
                        </li>
                        <li class="list-group-item d-flex flex-column justify-content-center">
                            <span>Тел: +7777-777-77-77</span>
                        </li>
                        <li class="list-group-item d-flex flex-column justify-content-center">
                            <span>Email: mail@mail.com</span>
                        </li>
                    </ul>
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
                                <?= \yii\widgets\Menu::widget([
                                    'items' => \app\services\MenuService::getItems([
                                        'class' => \app\models\tables\Category::class,
                                    ]),
                                    'options' => [
                                        'class' => 'dropdown-menu header-dropdown-menu',
                                    ],
                                ]) ?>
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

        <div class="container-fluid ">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'navOptions' => [
                    //'class' => 'container-fluid'
                ],
            ]) ?>
        </div>

        <div class="container-fluid py-5">
            <?= \app\widgets\Alert::widget() ?>
            <?= $content ?>
        </div>

        <?php
        \yii\bootstrap4\Modal::begin([
            'headerOptions' => ['id' => 'modalHeader'],
            'id' => 'modal',
            'size' => 'modal-sm',
            'footer' =>  '<a class="btn btn-primary btn-block" href="/cart" role="button">Перейти в корзину</a>',
        ]);
        echo '<h4 class="center-block">Товар в корзине!!!</h4>';
        \yii\bootstrap4\Modal::end();
        ?>

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
                                <li><a href="#">Загрузки</a></li>
                                <li><a href="#">Доставка</a></li>
                                <li><a href="#">Политика конфидециальности</a></li>
                                <li><a href="#">Порядок и условия</a></li>
                                <li><a href="#">О нас</a></li>
                                <li><a href="#">Заказы и возврат</a></li>
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
                                    <button class="btn btn-outline-secondary" type="button">Подписаться</button>
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