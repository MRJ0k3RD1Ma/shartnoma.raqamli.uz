<?php $this->title = "Ташкилотлар рўйҳати";?>
<h1 class="page-heading">
    Ташкилотлар рўйҳати
    <span class="pull-right"><a href="<?= Yii::$app->urlManager->createUrl(['site/addtashkilot']) ?>"><span class="fa fa-plus"></span> Ташкилот қўшиш</a></span>
</h1>

<?= \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'options'=>[
        'class'=>'table table-striped table-bordered table-hover table-responsive',
    ],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'name',
//        'district_id',

        [
            'attribute'=>'district_id',
            'value'=>'district.name',
            'filter'=>\yii\helpers\ArrayHelper::map(\app\models\District::find()->all(),'id','name')
        ],
//        'idora_type_id',
        [
            'attribute'=>'idora_type_id',
            'value'=>'idoratype.name',
            'filter'=>\yii\helpers\ArrayHelper::map(\app\models\IdoraType::find()->all(),'id','name')
        ],
//        'rahbar',
        // 'phone_tashkilot',
        // 'phone_rahbar',
        // 'buxgalter',
        // 'phone_buxgalter',
        // 'kompleks_id',
        [
            'attribute'=>'kompleks_id',
            'value'=>'kompleks.name',
            'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Kompleks::find()->all(),'id','name')
        ],
        [
            'attribute'=>'boshqarma_id',
            'value'=>'boshqarma.name',
            'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Boshqarma::find()->all(),'id','name')
        ],
        // 'boshqarma_id',
        // 'address',
//         'inn',
        [
             'attribute'=>'inn',
            'value'=>function($d){
                if(strlen(strval($d->inn))==9){
                    return $d->inn;
                }else{
                    return $this->render('_innform',['model'=>$d]);
                }
            },
            'format'=>'raw',
        ],
        // 'izoh',

//        ['class' => 'yii\grid\ActionColumn'],
        [
            'value'=>function($d){
                $viewurl = Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$d->id]);
                $updateurl = Yii::$app->urlManager->createUrl(['site/updatetashkilot','id'=>$d->id]);
                return "
                <a href=\"{$viewurl}\" title=\"View\" class='btn btn-default' aria-label=\"View\" data-pjax=\"0\">
                    <span class=\"glyphicon glyphicon-eye-open\"></span>
                </a> 
                <a href=\"{$updateurl}\" title=\"Update\" class='btn btn-default' aria-label=\"Update\" data-pjax=\"0\">
                    <span class=\"glyphicon glyphicon-pencil\"></span>
                </a> 
                
                ";
            },
            'filter'=>false,
            'format'=>'raw',
        ],
    ],
]); ?>
