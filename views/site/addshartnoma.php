<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shartnoma */
/* @var $form ActiveForm */
$this->title = "Шартнома қўшиш";
?>
<div class="site-_tashkilot">

    <?php $form = ActiveForm::begin(); ?>

         <div class="row">

             <div class="col-md-12">
                 <div class="row">
                     <div class="col-md-3">
                         <?= $form->field($model,'district_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\District::find()->all(),'id','name'))?>
                     </div>
                     <div class="col-md-3">

                     </div>
                     <div class="col-md-3">

                     </div>
                     <div class="col-md-3">

                     </div>
                 </div>
             </div>



         </div>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-_tashkilot -->
