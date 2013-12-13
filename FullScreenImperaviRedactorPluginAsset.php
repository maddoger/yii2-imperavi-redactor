<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\imperavi-redactor;
use yii\web\AssetBundle;

/**
 * @author Alexander Yaremchuk <alwex10@gmail.com>
 * @since 1.0
 */
class FullScreenImperaviRedactorPluginAsset extends AssetBundle
{
    public $sourcePath = '@yii/imperavi-redactor/assets/plugins/fullscreen';
    public $js = [
        'fullscreen.js'
    ];
    public $css = [

    ];
    public $depends = [
        'yii\imperavi-redactor\ImperaviRedactorAsset'
    ];
}