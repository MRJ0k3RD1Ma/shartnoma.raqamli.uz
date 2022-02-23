<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->registerJsFile('/design/js/pages/base_pages_login.js');
$this->title = 'Кириш';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Login Content -->
<div class="content overflow-hidden">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
            <!-- Login Block -->
            <div class="block block-themed animated fadeIn">
                <div class="block-header bg-info text-center" style="padding: 0;">
                    <h3 class="block-title"><img src="/aktlogo.png" alt="" style="height:80px;"></h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'options'=>[
                                'class'=>'js-validation-login form-horizontal push-30-t push-50'
                        ],
                    ]); ?>


                    <?= $form->field($model, 'username',[
                        'template'=>"<div class=\"col-xs-12\">
                                <div class=\"form-material form-material-primary floating\">
                                    {input}
                                    {label}
                                </div>
                            </div>"
                    ])->textInput(['autofocus' => true,]) ?>





                    <?= $form->field($model, 'password',[
                        'template'=>"<div class=\"col-xs-12\">
                                <div class=\"form-material form-material-primary floating\">
                                    {input}
                                    {label}
                                </div>
                            </div>"
                    ])->passwordInput(['autofocus' => true,]) ?>


                        <div class="form-group" style="margin-top:20px;">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <?= Html::submitButton('<i class="si si-login pull-right"></i> Kirish', ['class' => 'btn btn-block btn-primary', 'name' => 'login-button']) ?>
                            </div>
                        </div>

                        <?php ActiveForm::end(); ?>

                        <!-- END Login Form -->
                </div>
            </div>
            <!-- END Login Block -->
        </div>
    </div>
</div>
<!-- END Login Content -->

<!-- Login Footer -->
<div class="push-10-t text-center animated fadeInUp">
    <small class="text-muted font-w600">Created by <a class="font-w600" href="#" target="_blank"><i class="fa fa-code "></i> Dilmurod Allabergenov</a></small>
</div>
<!-- END Login Footer -->