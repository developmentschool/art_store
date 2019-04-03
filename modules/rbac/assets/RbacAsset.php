<?php

namespace rbac\assets;

use yii\web\AssetBundle;

/**
 * Class RbacAsset
 *
 * @package rbac\assets
 */
class RbacAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@rbac/assets/resource';

    /**
     * @var array
     */
    public $js = [
        'js/rbac.js',
    ];

    public $css = [
        'css/rbac.css',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
