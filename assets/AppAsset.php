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
       // '@bower-asset/jquery-ui/themes/base/autocomplete.css',
        'css/style.css',
        'css/sidebar.css',
        'css/product.css',
        'css/account.css',
        'css/order.css',
    ];
    public $js = [
       // '@bower-asset/jquery-ui/ui/widgets/autocomplete.js',
        'vendor/maskedinput/jquery.maskedinput.js',
        'js/script.js',
        'js/basket.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
