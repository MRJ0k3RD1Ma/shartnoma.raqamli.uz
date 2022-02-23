<?php
use yii\widgets\ActiveForm;
/* @var \app\models\Tashkilot $model*/

?>

<?php $form=ActiveForm::begin(['action'=>Yii::$app->urlManager->createUrl(['site/changeinn','id'=>$model->id])])?>

<div class="input-group mb-3">
    <?= $form->field($model,'inn')->textInput(['placeholder'=>'ИНН'])->label(false)?>
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit">Сақлаш</button>
    </div>
</div>
<?php ActiveForm::end();?>
