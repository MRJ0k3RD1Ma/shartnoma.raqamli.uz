<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tashkilot */
/* @var $form ActiveForm */
?>
<div class="site-_tashkilot">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'inn') ?>

        <?= $form->field($model, 'district_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\District::find()->all(),'id','name'),['class'=>"js-select2 form-control", ]) ?>

        <?= $form->field($model, 'idora_type_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\IdoraType::find()->all(),'id','name'),['class'=>"js-select2 form-control", ]) ?>

        <?= $form->field($model, 'boshqarma_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Boshqarma::find()->all(),'id','name'),['class'=>"js-select2 form-control", ]) ?>

        <?= $form->field($model, 'kompleks_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Kompleks::find()->all(),'id','name'),['class'=>"js-select2 form-control", ]) ?>

        <?= $form->field($model, 'rahbar') ?>

        <?= $form->field($model, 'phone_tashkilot') ?>

        <?= $form->field($model, 'phone_rahbar') ?>

        <?= $form->field($model, 'buxgalter') ?>

        <?= $form->field($model, 'phone_buxgalter') ?>

        <?= $form->field($model, 'izoh') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Сақлаш', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-_tashkilot -->
