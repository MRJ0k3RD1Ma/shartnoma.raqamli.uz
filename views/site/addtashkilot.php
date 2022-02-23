<?php
/**
 * Created by PhpStorm.
 * User: Dilmurod
 * Date: 28.10.2019
 * Time: 16:05
 */


/**
 * This is the model class for table "district".
 *
 * @property \app\models\Tashkilot $model
 */

$this->title = "Ташкилот қўшиш";
?>


    <?php if($model->isNewRecord){?>
    <h1 class="page-heading">
        Ташкилот қўшиш
    </h1>
    <?php }else{?>
        <h1 class="page-heading">
            Ўзгартириш <small><?= $model->name?></small>
        </h1>
    <?php }?>
    <hr>

<?php
echo $this->render('_tashkilot',['model'=>$model]);