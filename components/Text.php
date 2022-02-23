<?php

namespace app\components;
/**
 * Created by PhpStorm.
 * User: Shomurod
 * Date: 06.01.2019
 * Time: 22:14
 */

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;

use app\models\StaticText;
use app\components\Lang;
class Text{

    private $_texts = [];

    public function init()
    {
        parent::init();

        $this->_texts = Data::cache(StaticText::CACHE_KEY, 3600, function(){
            return StaticText::find()->asArray()->all();
        });
    }


    public function t($code)
    {
        $page = Yii::$app->controller->id.'/'.Yii::$app->controller->action->id;
        $a = StaticText::find()->where(['code'=>$code])->andWhere(['lang_id'=>Lang::l()])->andWhere(['page'=>$page])->one();
        if(count($a)>0){
            return $a->name;
        }else{
            $m = new StaticText();
            $m->lang_id = Lang::l();
            $m->code = $code;
            $m->name = $code;
            $m->page = $page;
            $m->save();
            return $m->name;
        }

    }

    private function findText($code)
    {
        foreach ($this->_texts as $item) {
            if($item['slug'] == $code){
                return $item;
            }
        }
        return null;
    }

    private function notFound($code)
    {
        $text = '';

        $model = new StaticText();
        $model->code = $code;
        $lang = Yii::$app->language;
        if($lang == 'uz'){
            $model->text = $code;
        }else{
//            $model->text =
        }

        return $text;
    }
}