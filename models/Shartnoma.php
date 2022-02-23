<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shartnoma".
 *
 * @property integer $id
 * @property integer $tashkilot_id
 * @property string $shartnoma_raqami
 * @property integer $shartnoma_summasi
 * @property integer $tolandi
 * @property integer $qoldiq
 * @property string $shartnoma_berildi
 * @property string $masul_hodim
 * @property string $phone_masul_hodim
 * @property string $qabul_qilgan_hodim
 * @property string $dalolatnoma_sana
 * @property string $shartnoma_qaytarishi
 * @property string $izoh
 * @property integer $status
 * @property integer $district_id
 * @property integer $shartnoma_type_id
 * @property integer $idora_type_id
 * @property integer $kompleks_id
 * @property integer $boshqarma_id
 * @property string $created
 * @property string $updated
 */
class Shartnoma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shartnoma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tashkilot_id', 'shartnoma_raqami','shartnoma_berildi', 'masul_hodim', 'phone_masul_hodim', 'district_id', 'shartnoma_type_id', 'idora_type_id', 'kompleks_id', 'boshqarma_id'], 'required'],
            [['tashkilot_id', 'shartnoma_summasi', 'tolandi', 'qoldiq', 'status', 'district_id', 'shartnoma_type_id', 'idora_type_id', 'kompleks_id', 'boshqarma_id'], 'integer'],
            [['shartnoma_berildi', 'dalolatnoma_sana', 'shartnoma_qaytarishi', 'created', 'updated'], 'safe'],
            [['shartnoma_raqami', 'masul_hodim', 'phone_masul_hodim', 'qabul_qilgan_hodim', 'izoh'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tashkilot_id' => 'Ташкилот',
            'shartnoma_raqami' => 'Шартнома рақами',
            'shartnoma_summasi' => 'Шартнома суммаси',
            'tolandi' => 'Тўланди',
            'qoldiq' => 'Қолдиқ',
            'shartnoma_berildi' => 'Шартнома берилган сана',
            'masul_hodim' => 'Масул ҳодим',
            'phone_masul_hodim' => 'Масул ҳодим тел.',
            'qabul_qilgan_hodim' => 'Қабул қилган ҳодим тел.',
            'dalolatnoma_sana' => 'Далолатнома санаси',
            'shartnoma_qaytarishi' => 'Шартнома қайтарилиши санаси',
            'izoh' => 'Изоҳ',
            'status' => 'Статус',
            'district_id' => 'Туман',
            'shartnoma_type_id' => 'Шартнома тури',
            'idora_type_id' => 'Ташкилот тури',
            'kompleks_id' => 'Комплекс',
            'boshqarma_id' => 'Бошқарма',
            'created' => 'Яратилди',
            'updated' => 'Ўзгартирилди',
        ];
    }
    public function getShartnomatype(){
        return $this->hasOne(ShartnomaType::className(),['id'=>'shartnoma_type_id']);
    }
    public function getTashkilot(){
        return $this->hasOne(Tashkilot::className(),['id'=>'tashkilot_id']);
    }
}
