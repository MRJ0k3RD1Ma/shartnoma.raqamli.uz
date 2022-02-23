<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IdoraType */
/* @var $form ActiveForm */
/* @var $model1 app\models\IdoraType*/

$this->title = "Ташкилот турлари";
?>
<div class="site-_tashkilot">

    <h1 class="page-heading">
        Ташкилот тури қўшиш
    </h1>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>


    <div class="form-group">
        <?= Html::submitButton('Сақлаш', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

    <?php if($model->isNewRecord){?>

    <h1 class="page-heading">
        Ташкилот турлари рўйҳати
    </h1>
    <br>
    <table class="table table-bordered table-striped js-dataTable-full">

        <thead>
        <tr>
            <th style="width: 50px;">№</th>
            <th>Ташкилот тури</th>
            <th style="width:0;"></th>
            <th style="width:0"></th>
            <th style="width:80px;">Амаллар</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($model1 as $item):?>

            <tr>
                <td><?=$item->id?></td>
                <td><?= $item->name?></td>
                <td></td>
                <td></td>
                <td>
                    <a href="<?= Yii::$app->urlManager->createUrl(['site/updateidoratype','id'=>$item->id])?>" class="btn btn-default"><span class="fa fa-edit"></span></a>
                </td>

            </tr>

        <?php endforeach;?>

        </tbody>
    </table>
    <?php }?>
</div><!-- site-_tashkilot -->
