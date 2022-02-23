<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700',

        'design/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css',
        'design/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
        'design/js/plugins/select2/select2.min.css',
        'design/js/plugins/select2/select2-bootstrap.css',
        'design/js/plugins/dropzonejs/dropzone.min.css',
        'design/js/plugins/jquery-tags-input/jquery.tagsinput.min.css',
        [
            'design/css/oneui.css',
            'id'=>'css-main'
        ],
        [
            'design/css/image_form.css',
            'id'=>'css-main'
        ],
        'design/js/plugins/datatables/jquery.dataTables.min.css'
    ];
    public $js = [
//        'design/js/core/jquery.min.js',
        'design/js/core/bootstrap.min.js',
        'design/js/core/jquery.slimscroll.min.js',
        'design/js/core/jquery.scrollLock.min.js',
        'design/js/core/jquery.appear.min.js',
        'design/js/core/jquery.countTo.min.js',
        'design/js/core/jquery.placeholder.min.js',
        'design/js/core/js.cookie.min.js',
        'design/js/app.js',

        'design/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js',
        'design/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js',
        'design/js/plugins/select2/select2.full.min.js',
        'design/js/plugins/masked-inputs/jquery.maskedinput.min.js',
        'design/js/plugins/dropzonejs/dropzone.min.js',
        'design/js/plugins/jquery-tags-input/jquery.tagsinput.min.js',
        'design/js/plugins/datatables/jquery.dataTables.min.js',
        'design/js/plugins/jquery-validation/jquery.validate.min.js',
        'design/js/pages/base_forms_validation.js',
        'design/js/pages/base_tables_datatables.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
