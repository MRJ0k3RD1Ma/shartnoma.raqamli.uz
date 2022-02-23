<?php
use yii\widgets\ActiveForm;
$this->title = "ИНН топиш";
?>

<h1 class="page-heading">
    Ташкилотлар топиш
    <small>ИНН орқали ташкилот топилади</small>
</h1>

<?php $form = ActiveForm::begin()?>

    <?= $form->field($model,'inn')?>

    <button class="btn btn-primary">Топиш</button>
    <?php if($error == 1){?>

        <h2>Бундай ИНН рақамли ташкилот топилмади</h2>

    <?php }?>
<?php ActiveForm::end()?>

<br style="padding-bottom:20px;">