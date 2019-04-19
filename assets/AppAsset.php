<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
<<<<<<< HEAD
        'css/style.css',
        'css/sidebar.css',
        'css/product.css',
        'css/account.css',
        'css/order.css',
    ];
    public $js = [
        'vendor/maskedinput/jquery.maskedinput.js',
        'js/script.js',
        'js/cart.js',
=======
        // 'css/site.css',
        // 'vendor/fontawesome-free-5.7.2-web/css/all.css',
        'css/style.css',
        'css/sidebar.css',
        'css/product.css',
    ];
    public $js = [
        // 'https://code.jquery.com/jquery-3.3.1.slim.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        'js/script.js',
>>>>>>> master
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
