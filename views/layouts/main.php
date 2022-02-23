<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <style>
        @media print {
            a[href]:after {
                content: " (" attr(href) ")";
                display: none;
            }
            th,tr,td,p,h1,h2,h3,h4,h5,h6,span,i:after{
                content: '';
                font-size:12px !important;
                font-family: "Times New Roman",Sans-Serif !important;
                line-height: 1.1 !important;
                padding:4px !important;
                text-align: center;
            }
            th, td:after{
                content: '';
                padding:0 !important;
            }
            tr>th:first-child:after{
                content: '';
                width:400px !important;
            }
            tr>td:first-child:after{
                content: '';
                width:400px !important;
            }
            .block-content{
                margin-top:0;
                padding-top:0;
            }
            #page-footer{
                content: '';
                display: none;
            }
        }
        .nav-stacked > li + li{
            font-size:13px;
        }
        .page-heading{
            background: #eaeaea;
            padding: 15px;
        }
    </style>
</head>
<body style="overflow-x: hidden;">
<?php $this->beginBody() ?>


<header id="header-navbar" class="content-mini content-mini-full">
    <ul class="nav-header pull-right">
        <li>
            <a tabindex="-1" <?php  if(Yii::$app->controller->action->id == 'addcontract' and Yii::$app->controller->id=='site'){ echo "class='a-active bg-primary'";}?> href="<?= Yii::$app->urlManager->createUrl(['site/addcontract'])?>">
                <i class="si si-plus"></i> Шартнома
            </a>
        </li>
        <li>
            <a tabindex="-1" <?php  if(Yii::$app->controller->action->id == 'addtashkilot' and Yii::$app->controller->id=='site'){ echo "class='a-active bg-primary'";}?> href="<?= Yii::$app->urlManager->createUrl(['site/addtashkilot'])?>">
                <i class="si si-plus"></i> Ташкилот
            </a>
        </li>

        <li>
            <a tabindex="-1" <?php  if(Yii::$app->controller->action->id == 'addidoratype' and Yii::$app->controller->id=='site'){ echo "class='a-active bg-primary'";}?> href="<?= Yii::$app->urlManager->createUrl(['site/addidoratype'])?>">
                <i class="si si-plus"></i> Ташкилот тури
            </a>
        </li>


        <li>
            <div class="btn-group">
                <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                    <img src="/design/img/avatars/avatar10.jpg" alt="Avatar">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">

                    <li class="dropdown-header">Profile</li>

                    <li>
                        <a tabindex="-1" href="<?= Yii::$app->urlManager->createUrl(['user/index'])?>">
                            <i class="si si-user pull-right"></i>
                            Users
                        </a>
                    </li>

                    <li>
                        <a tabindex="-1" href="<?= Yii::$app->urlManager->createUrl(['user/admin'])?>">
                            <i class="si si-user pull-right"></i>
                            Administrators
                        </a>
                    </li>

                    <li>
                        <a tabindex="-1" href="<?= Yii::$app->urlManager->createUrl(['user/update'])?>">
                            <i class="si si-user pull-right"></i>
                            Profile
                        </a>
                    </li>

                    <li class="divider"></li>
                    <li class="dropdown-header">Actions</li>
                    <li>
                        <a tabindex="-1" href="#">
                            <i class="si si-lock pull-right"></i>Lock Account
                        </a>
                    </li>
                    <li>
                        <?php $form = \yii\widgets\ActiveForm::begin(['action'=>'/site/logout'])?>
                        <button tabindex="-1" type="submit" class="btn-logout-header btn btn-link" style="text-decoration: none;">
                             Log out <i class="si si-logout pull-right"></i>
                        </button>
                        <?php \yii\widgets\ActiveForm::end()?>
                    </li>
                </ul>
            </div>
        </li>




    </ul>
    <style>
        .btn-logout-header{
            display: block;
            /*padding: 3px 20px;*/
            width:100%;
            clear: both;
            font-weight: normal;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
            text-align: left;
        }
        .a-active{
            color:#fff;
        }
        .a-active:hover{
            background-color: rgba(255,255,255,0.6) !important;
        }
    </style>
    <?php if(Yii::$app->user->identity->role == 1){?>

        <ul class="nav-header pull-left">
        <li>
            <a tabindex="-1" <?php  if(Yii::$app->controller->action->id == 'index' and Yii::$app->controller->id=='site'){ echo "class='a-active bg-primary'";}?> href="<?= Yii::$app->urlManager->createUrl(['site/index'])?>">
                <i class="si si-list"></i> Шартномалар
            </a>
        </li>
            <li>
                <a tabindex="-1" <?php  if(Yii::$app->controller->action->id == 'listtashkilot' and Yii::$app->controller->id=='site'){ echo "class='a-active bg-primary'";}?> href="<?= Yii::$app->urlManager->createUrl(['site/listtashkilot'])?>">
                    <i class="si si-list"></i> Ташкилотлар
                </a>
            </li>

    </ul>
    <?php }?>
</header>



<main id="main-container">


    <script>
        var editprofile = function () {

        }

        var editinfo = function () {

        }

    </script>



    <!-- Page Content -->
    <div class="content content-boxed" style="<?php
    if((Yii::$app->controller->id=='site'
        and (Yii::$app->controller->action->id == 'index'))
        or (Yii::$app->controller->id=='user' and (Yii::$app->controller->action->id != 'create' and Yii::$app->controller->action->id != 'update'))
    )
    {echo "width:100%; max-width:100%;";};
    ?>">


        <!-- Invoice -->
        <div class="block">
            <?php if(Yii::$app->controller->id=='site'
                and Yii::$app->controller->action->id == 'view'):?>

            <div class="block-header">
                <ul class="block-options">
                    <li>
                        <button type="button" onclick="editinfo()"><i class="fa fa-edit"></i> Edit info</button>
                    </li>
                    <li>
                        <button type="button" onclick="editprofile()"><i class="fa fa-edit"></i> Edit profile</button>
                    </li>
                    <li>
                        <button type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-history"></i> History</button>
                    </li>
                    <li>
                        <!-- Print Page functionality is initialized in App() -> uiHelperPrint() -->
                        <button type="button" onclick="App.initHelper('print-page');"><i class="si si-printer"></i> Print Invoice</button>
                    </li>



                </ul>
            </div>

            <?php endif;?>

            <div class="block-content">
                <!-- Invoice Info -->
                <!-- END Invoice Info -->



                <?= $content ?>



            </div>

        </div>


    </div>

</main>

<footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
    <div class="pull-right">
        Created by <a class="font-w600" href="#" target="_blank"><i class="fa fa-code "></i> Dilmurod Allabergenov</a>
    </div>
</footer>


<?php
$this->registerJs("
 $(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'colorpicker', 'select2', 'masked-inputs', 'tags-inputs']);
            });

            $('#val-submit').bind(\"click\",function() 
                { 
             
               
                    var imgVal = $('#val-passfile').val(); 
                    if(imgVal=='') 
                    { 
                        document.getElementById(\"fileValidate\").classList.remove(\"hidden\");
                    } 
                   else
                     {
                       alert('file fill in');
                     }
               

                }); 
");
?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
