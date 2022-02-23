<?php

    $this->title = $model->name;
?>

<script>
    var showshartnoma = function () {}
</script>

        <div class="row">
            <div class="col-sm-5 col-lg-3">
                <!-- Collapsible Inbox Navigation (using Bootstrap collapse functionality) -->
                <button class="btn btn-block btn-primary visible-xs push" data-toggle="collapse" data-target="#inbox-nav" type="button">Navigation</button>
                <div class="collapse navbar-collapse remove-padding" id="inbox-nav">
                    <!-- Inbox Menu -->
                    <div class="block">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/addtshartnoma','id'=>$model->id])?>"><i class="fa fa-plus"></i> Шартнома</a>
                                </li>
                            </ul>
                            <h3 class="block-title">Ташкилот</h3>
                        </div>
                        <div class="block-content">
                            <ul class="nav nav-pills nav-stacked push">
                                <li class="<?= $type == -1 ? 'active' : ""?>">
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$model->id])?>">
                                        <span class="badge pull-right"><?= \app\models\Shartnoma::find()->where(['tashkilot_id'=>$model->id])->count()?></span><i class="fa fa-fw fa-inbox push-5-r"></i> Шартномалар
                                    </a>
                                </li>
                                <li class="<?= $type == 0 ? 'active' : ""?>">
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$model->id,'type'=>0])?>">
                                        <span class="badge pull-right"><?= \app\models\Shartnoma::find()->where(['tashkilot_id'=>$model->id])->andWhere(['status'=>0])->count()?></span><i class="fa fa-fw fa-send push-5-r"></i> Янги
                                    </a>
                                </li>
                                <li class="<?= $type == 1 ? 'active' : ""?>">
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$model->id,'type'=>1])?>">
                                        <span class="badge pull-right"><?= \app\models\Shartnoma::find()->where(['tashkilot_id'=>$model->id])->andWhere(['status'=>1])->count()?></span><i class="fa fa-fw fa-star push-5-r"></i> Қабул қилинган пул ўтирилмаган
                                    </a>
                                </li>

                                <li class="<?= $type == 2 ? 'active' : ""?>">
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$model->id,'type'=>2])?>">
                                        <span class="badge pull-right"><?= \app\models\Shartnoma::find()->where(['tashkilot_id'=>$model->id])->andWhere(['status'=>2])->count()?></span><i class="fa fa-fw fa-bank push-5-r"></i> Қабул қилинган пул қисман ўтирилган
                                    </a>
                                </li>
                                <li class="<?= $type == 3 ? 'active' : ""?>">
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$model->id,'type'=>3])?>">
                                        <span class="badge pull-right"><?= \app\models\Shartnoma::find()->where(['tashkilot_id'=>$model->id])->andWhere(['status'=>3])->count()?></span><i class="fa fa-fw fa-bank push-5-r"></i> Қабул қилинмаган пул қисман ўтирилган
                                    </a>
                                </li>
                                <li class="<?= $type == 4 ? 'active' : ""?>">
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$model->id,'type'=>4])?>">
                                        <span class="badge pull-right"><?= \app\models\Shartnoma::find()->where(['tashkilot_id'=>$model->id])->andWhere(['status'=>4])->count()?></span><i class="fa fa-fw fa-bank push-5-r"></i> Қабул қилинмаган пул ўтирилган
                                    </a>
                                </li>
                                <li class="<?= $type == 5 ? 'active' : ""?>">
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$model->id,'type'=>5])?>">
                                        <span class="badge pull-right"><?= \app\models\Shartnoma::find()->where(['tashkilot_id'=>$model->id])->andWhere(['status'=>5])->count()?></span><i class="fa fa-fw fa-folder push-5-r"></i> Ёпилган
                                    </a>
                                </li>
                                <li class="<?= $type == 6 ? 'active' : ""?>">
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$model->id,'type'=>6])?>">
                                        <span class="badge pull-right"><?= \app\models\Shartnoma::find()->where(['tashkilot_id'=>$model->id])->andWhere(['status'=>6])->count()?></span><i class="fa fa-fw fa-trash push-5-r"></i> Бузилган
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Inbox Menu -->

                    <!-- Friends -->
                    <div class="block">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/updatetashkilot','id'=>$model->id])?>"><i class="si si-settings"></i></a>
                                </li>
                            </ul>
                            <h3 class="block-title">Tashkilot ma'lumotlari</h3>
                        </div>
                        <style>
                            .nav-users.push>li{
                                padding:5px;
                            }
                        </style>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <li>
                                    <strong>Тел.:</strong> <?= $model->phone_tashkilot?>
                                </li>
                                <li>
                                    <strong>Раҳбар:</strong> <?= $model->rahbar?>
                                </li>
                                <li>
                                    <strong>Раҳбар тел.:</strong><?= $model->phone_rahbar?>
                                </li>
                                <li>

                                    <strong>ИНН:</strong> <?= $model->inn?>

                                </li>

                                <li>

                                    <strong>Бухгалтер:</strong> <?= $model->buxgalter?>

                                </li>


                                <li>

                                    <strong>Бухгалтер тел.:</strong> <?= $model->phone_buxgalter?>

                                </li>

                                <li>

                                    <strong>Манзил:</strong> <?= $model->address?>

                                </li>



                                <li>
                                    <strong>Туман:</strong> <?= $model->district->name?>
                                </li>

                                <li>

                                    <strong>Бошқарма:</strong> <?= $model->boshqarma->name?>

                                </li>

                                <li>

                                    <strong>Комплекс:</strong> <?= $model->kompleks->name?>

                                </li>

                                <li>

                                    <strong>Ташкилот тури:</strong> <?= $model->idoratype->name?>

                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END Friends -->


                </div>
                <!-- END Collapsible Inbox Navigation -->
            </div>
            <div class="col-sm-7 col-lg-9">
                <!-- Message List -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">

                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                        </ul>
                        <div class="block-title text-normal">
                            <strong><?= $model->name?></strong>
                        </div>
                    </div>
                    <div class="block-content">


                        <!-- Messages & Checkable Table (.js-table-checkable class is initialized in App() -> uiHelperTableToolsCheckable()) -->
                        <div class="pull-r-l">
                            <table class="js-table-checkable table table-hover table-vcenter">
                                <tbody>

                                <?php foreach ($shartnomalar as $item):?>
                                <tr>
                                    <td class="text-center" style="width: 70px;">
                                        <a href="<?= Yii::$app->urlManager->createUrl(['site/updatetshartnoma','id'=>$item->id])?>" class="btn btn-default"><span class="fa fa-edit"></span></a>
                                    </td>
                                    <td class="hidden-xs font-w600" style="width: 140px;"><?= $item->shartnoma_raqami?> <br> <?= $this->render('_number',['number'=>$item->shartnoma_summasi])?> so'm</td>
                                    <td>
                                        <a class="font-w600" onclick="showshartnoma(<?= $item->id?>)" data-toggle="modal" data-target="#modal-message" href="#">
                                            <?= $item->masul_hodim?> <strong><?= $item->phone_masul_hodim?></strong>
                                        </a>
                                        <div class="text-muted push-5-t">Тўланди:<?= $this->render('_number',['number'=>$item->tolandi])?>Сўм. Қолдиқ: <?= $this->render('_number',['number'=>$item->qoldiq])?> Сўм</div>
                                    </td>
                                    <td class="visible-lg text-muted" style="width: 80px;">
                                        <i class="fa fa-paperclip"></i>
                                    </td>
                                    <td class="visible-lg text-muted" style="width: 120px;">
                                        <em><?= $item->shartnoma_berildi?></em>
                                    </td>
                                </tr>
                                <?php endforeach;?>

                                </tbody>
                            </table>
                        </div>
                        <!-- END Messages -->
                    </div>
                </div>
                <!-- END Message List -->
            </div>
        </div>



    <!-- Modal -->
    <div id="shartnomaModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Шартнома</h4>
                </div>
                <div class="modal-body" id="shartnomaBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ёпиш</button>
                </div>
            </div>

        </div>
    </div>

<?php
$url = Yii::$app->urlManager->createUrl(['site/getshartnoma']);
$this->registerJs("
    showshartnoma = function(id){
        $.get('{$url}?id='+id).done(function(data){
           $('#shartnomaBody').empty(); 
           $('#shartnomaBody').append(data);
           $('#shartnomaModal').modal();
            
        })
    }
");


?>