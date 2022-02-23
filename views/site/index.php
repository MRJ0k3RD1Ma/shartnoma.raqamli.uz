<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\SharntomaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = "Шартномалар рўйҳати";;
$this->params['breadcrumbs'][] = $this->title;
?>

    <script>
        //var statuschangeindex = function(){

        //}
    </script>
    <div class="shartnoma-index">
    <script>
        var fileload = function(){

        }
    </script>
    <h1 class="page-heading">
        Шартномалар рўйҳати
        <span class="pull-right"><a href="<?= Yii::$app->urlManager->createUrl(['site/findinn']) ?>"><span class="fa fa-plus"></span> Шартнома қўшиш</a></span>
    </h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions'=>function($model){
            $res = ['class'=>'bg-primary'];
            if($model->status==0){
                $res = ['class'=>'status0'];
            }
            if($model->status==1){
                $res = ['class'=>'status1'];
            }
            if($model->status==2){
                $res = ['class'=>'status2'];
            }
            if($model->status==3){
                $res = ['class'=>'status3'];
            }
            if($model->status==4){
                $res = ['class'=>'status4'];
            }
            if($model->status==5){
                $res = ['class'=>'bg-primary'];
            }
            if($model->status==6){
                $res = ['class'=>'status6'];
            }
            return $res;
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
			
            'shartnoma_raqami',
//            'tashkilot_id',
            /*[
                'attribute'=>'tashkilot_id',
                'value'=>function($d){
                    $url = Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$d->tashkilot_id]);
                    return "<a href='{$url}' >{$d->tashkilot->name}</a>";
                },
                'format'=>'raw',
                'filter'=>false,
            ],*/
            [
                'attribute'=>'tashkilotname',
                'label'=>'Ташкилот номи',
                'value'=>function($d){
                    $url = Yii::$app->urlManager->createUrl(['site/viewtashkilot','id'=>$d->tashkilot_id]);
                    return "<a href='{$url}' >{$d->tashkilot->name}</a>";
                },
                'format'=>'raw'
            ],
            'shartnoma_summasi',
            'tolandi',
             'qoldiq',
             'shartnoma_berildi',
             'masul_hodim',
             'phone_masul_hodim',
            // 'qabul_qilgan_hodim',
            // 'dalolatnoma_sana',
            // 'shartnoma_qaytarishi',
            // 'izoh',
            // 'status',
            [
                'attribute'=>'status',
                'value'=>function($d){
                    $status = [
                        0=>'Янги',
                        1=>'Қабул қилинган пул ўтирилмаган',
                        2=>'Қабул қилинган пул қисман ўтирилган',
                        3=>'Қабул қилинмаган пул қисман ўтирилган',
                        4=>'Қабул қилинмаган пул ўтирилган',
                        5=>'Ёпилган',
                        6=>'Бузилган',
                    ];
					$onchange = "onchange='statuschangeindex({$d->id},this.value)'";
                    $res = "<select class='form-control'>";
                    foreach ($status as $key=>$item){
                        if($d->status == $key){
                            $res .= "<option value='{$key}' selected>".$item."</option>";
                        }else{
                            $res .= "<option value='{$key}'>".$item."</option>";
                        }

                    }
                    $res .= "</select>";
                    return $res;
                },
                'filter'=>[
                    0=>'Янги',
                    1=>'Қабул қилинган пул ўтирилмаган',
                    2=>'Қабул қилинган пул қисман ўтирилган',
                    3=>'Қабул қилинмаган пул қисман ўтирилган',
                    4=>'Қабул қилинмаган пул ўтирилган',
                    5=>'Ёпилган',
                    6=>'Бузилган',
                ],
                'format'=>'raw'
            ],
            // 'district_id',
            // 'shartnoma_type_id',
            // 'idora_type_id',
            // 'kompleks_id',
            // 'boshqarma_id',
            // 'created',
            // 'updated',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>


<style>
    tr.status0{
        background-color: #AC718D !important;
        color:#fff;
    }
    tr.status1{
        background-color: #D6CD5E !important;
    }
    tr.status2{
        background-color: #AB1B96 !important;
        color:#fff !important;
    }
    tr.status2 a{
        color:#fff;
    }
    tr.status2 a:hover{
        color:#337ab7;
    }
    tr.status3{
        background-color: #1A78AB !important;
        color:#fff !important;
    }
    tr.status3 a{
        color:#fff;
    }
    tr.status3 a:hover{
        color:#337ab7;
    }
    tr.status4{
        background-color: #4FC3CA !important;
    }

    tr.status6{
        background-color: #aaaaaa;
    }
    tr.status0 a{
        color:#fff;
    }
    tr.status0 a:hover{
        color:#337ab7;
    }

    tr.bg-primary{
        background-color: #5c90d2!important;
        color:#fff;
    }
    tr.bg-primary a{
        color:#fff;

    }
    tr.bg-primary a:hover{
        color:rgba(255,255,255,0.4);
    }
</style>



<?php

$url = Yii::$app->urlManager->createUrl(['site/statuschangeindex']);
$this->registerJs("
    statuschangeindex = function(id,status){
        $.get('{$url}?id='+id+'&status='+status).done(function(data){
            if(data==1){
                location.reload();
            }else{
                alert('Amal bajarilmadi');
            }
        });
    }
");

?>