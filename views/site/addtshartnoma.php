<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shartnoma */
/* @var $form ActiveForm */
$this->title = "Шартнома қўшиш";
?>
<div class="site-_tashkilot">

	<h1 class="page-heading">
		Шартнома қўшиш
		<span class="pull-right">ИНН: <?= $tashkilot->inn?></span>
	</h1>

	
    <?php $form = ActiveForm::begin(); ?>

         <div class="row">

             <div class="col-md-12">
                 <div class="row">
                     <div class="col-md-4">
                         <?= $form->field($model,'shartnoma_type_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\ShartnomaType::find()->all(),'id','name'))?>
                     </div>
                     <div class="col-md-4">
                         <?= $form->field($model,'idora_type_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\IdoraType::find()->all(),'id','name'),['disabled'=>true])?>
                     </div>
                     <div class="col-md-4">
                         <?= $form->field($model,'district_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\District::find()->all(),'id','name'),['disabled'=>true])?>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-4">
                         <?= $form->field($model,'kompleks_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Kompleks::find()->all(),'id','name'),['disabled'=>true])?>
                     </div>
                     <div class="col-md-4">
                         <?= $form->field($model,'boshqarma_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Boshqarma::find()->all(),'id','name'),['disabled'=>true])?>
                     </div>
                     <div class="col-md-4">
                         <div class="form-group" >
							<label class="control-label" for="shartnoma-masul_hodim">Ташкилот</label>
							<input type="text" class="form-control" aria-required="true" aria-invalid="true" disabled value="<?= $tashkilot->name?>">

						</div>
                     </div>
                 </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'shartnoma_raqami')?>

                        <?= $form->field($model, 'shartnoma_summasi')->textInput(['type'=>'number'])?>

                        <?= $form->field($model, 'tolandi')->textInput(['type'=>'number'])?>

                        <?= $form->field($model, 'qoldiq')->textInput(['type'=>'number'])?>

<?php 
$this->registerJs("
$('#shartnoma-shartnoma_summasi').keyup(function(){
	if($('#shartnoma-tolandi').length){
		$('#shartnoma-qoldiq').val($('#shartnoma-shartnoma_summasi').val()-$('#shartnoma-tolandi').val());
	}
})
$('#shartnoma-tolandi').keyup(function(){
	if($('#shartnoma-shartnoma_summasi').length){
		$('#shartnoma-qoldiq').val($('#shartnoma-shartnoma_summasi').val()-$('#shartnoma-tolandi').val());
	}
})
$('#shartnoma-dalolatnoma_sana1').change(function(){
	if($('#shartnoma-shartnoma_berildi').val() == null || $('#shartnoma-shartnoma_berildi').val() == ''){
		var now = new Date($('#shartnoma-dalolatnoma_sana').val());

		var day = (\"0\" + now.getDate()).slice(-2);
		var month = (\"0\" + (now.getMonth() + 1)).slice(-2);

		var today = now.getFullYear()+\"-\"+(month)+\"-\"+(day) ;

		$('#shartnoma-shartnoma_berildi').val(today);
	}
})
");

?>

                        <?= $form->field($model, 'dalolatnoma_sana')->textInput(['type'=>'date'])?>

                        <?= $form->field($model, 'status')->dropDownList([
                            0=>'Янги',
                            1=>'Қабул қилинган пул ўтирилмаган',
                            2=>'Қабул қилинган пул қисман ўтирилган',
                            3=>'Қабул қилинмаган пул қисман ўтирилган',
                            4=>'Қабул қилинмаган пул ўтирилган',
                            5=>'Ёпилган',
                            6=>'Бузилган',
                        ])?>


                    </div>

                    <div class="col-md-6">
                        <?= $form->field($model, 'masul_hodim')?>

                        <?= $form->field($model, 'phone_masul_hodim')?>

                        <?= $form->field($model, 'qabul_qilgan_hodim')?>

                        <?= $form->field($model, 'shartnoma_berildi')->textInput(['type'=>'date'])?>

                        <?= $form->field($model, 'shartnoma_qaytarishi')->textInput(['type'=>'date'])?>

                        <?= $form->field($model, 'izoh')?>

                    </div>
                </div>


             </div>



         </div>

    <div class="form-group">
        <?= Html::submitButton('Сақлаш', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-_tashkilot -->
