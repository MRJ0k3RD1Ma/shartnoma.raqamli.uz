<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tashkilot".
 *
 * @property integer $id
 * @property string $name
 * @property integer $district_id
 * @property integer $idora_type_id
 * @property string $rahbar
 * @property string $phone_tashkilot
 * @property string $phone_rahbar
 * @property string $buxgalter
 * @property string $phone_buxgalter
 * @property integer $kompleks_id
 * @property integer $boshqarma_id
 * @property string $address
 * @property integer $inn
 * @property string $izoh
 */
class Tashkilot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tashkilot';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'district_id', 'idora_type_id', 'kompleks_id', 'boshqarma_id',], 'required'],
            [['district_id', 'idora_type_id', 'kompleks_id', 'boshqarma_id', 'inn'], 'integer'],
            [['name', 'rahbar', 'phone_tashkilot', 'phone_rahbar', 'buxgalter', 'phone_buxgalter', 'address'], 'string', 'max' => 255],
            [['izoh'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ташкилот номи',
            'district_id' => 'Туман',
            'idora_type_id' => 'Ташкилот тури',
            'rahbar' => 'Раҳбар',
            'phone_tashkilot' => 'Ташкилот тел.',
            'phone_rahbar' => 'Раҳбар тел.',
            'buxgalter' => 'Бухгалтер',
            'phone_buxgalter' => 'Бухгалтер тел',
            'kompleks_id' => 'Комплекс',
            'boshqarma_id' => 'Бошқарма',
            'address' => 'Манзил',
            'inn' => 'ИНН',
            'izoh' => 'Изоҳ',
        ];
    }


    public function getDistrict(){
        return $this->hasOne(District::className(),['id'=>'district_id']);
    }

    public function getIdoratype(){
        return $this->hasOne(IdoraType::className(),['id'=>'idora_type_id']);
    }

    public function getKompleks(){
        return $this->hasOne(Kompleks::className(),['id'=>'kompleks_id']);
    }
    public function getBoshqarma(){
        return $this->hasOne(Boshqarma::className(),['id'=>'boshqarma_id']);
    }
    public function getShartnomalar(){
        return $this->hasMany(Shartnoma::className(),['tashkilot_id'=>'id']);
    }
}
