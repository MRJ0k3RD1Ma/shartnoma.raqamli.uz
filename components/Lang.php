<?php
/**
 * Created by PhpStorm.
 * User: Dilmurod
 * Date: 09.04.2019
 * Time: 11:31
 */
namespace app\components;
use Yii;

class Lang extends \yii\base\Component {
    public static function l(){
        $l = Yii::$app->language;
        $ll = \app\models\Language::findOne(['code'=>$l]);
        return $ll ? $ll->id : null;
    }
}