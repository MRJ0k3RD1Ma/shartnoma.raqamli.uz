<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\components\Text;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
$uu = new \app\models\User();
$uu = $uu->attributeLabels();
?>
<div class="user-index" style="padding:20px;">

    <h1 style="margin-bottom:20px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    if(Yii::$app->controller->action->id != 'index'){
        ?>
    <p>
        <?= Html::a('Add Administrator', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    }

    ?>



    <table class="table table-bordered table-striped js-dataTable-full">
        <thead>
        <tr>
            <th style="width: 50px;">ID</th>
            <th><?=  $uu['name'] ?></th>
            <th><?=  $uu['email'] ?></th>
            <th><?=  $uu['username'] ?></th>
            <th><?=  $uu['password'] ?></th>
            <th>Амаллар</th>
        </tr>
        </thead>
        <tbody>


            <?php foreach ($model as $item):?>

            <tr>
                <td class="text-center"><?= $item->id ?></td>
                <td class="font-w600"><?= $item->name?></td>
               <td ><?= $item->email?></td>
                <td ><?= $item->username?></td>
                <td ><?= $item->password?></td>


                <td class="text-center">
                    <div class="btn-group">
                        <a class="btn btn-xs btn-default" href="<?= Yii::$app->urlManager->createUrl(['user/view','id'=>$item->id])?>" type="button" data-toggle="tooltip" title="Ko'rish"><i class="fa fa-folder"></i></a>
                        <a class="btn btn-xs btn-default" href="<?= Yii::$app->urlManager->createUrl(['user/update','id'=>$item->id])?>" type="button" data-toggle="tooltip" title="O'zgartirish"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-xs btn-default" data-method="post" href="<?= Yii::$app->urlManager->createUrl(['user/delete','id'=>$item->id])?>" type="button" data-toggle="tooltip" title="O'chirish"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>

            <?php endforeach;?>

        </tbody>
    </table>
</div>
