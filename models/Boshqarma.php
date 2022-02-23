<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "boshqarma".
 *
 * @property integer $id
 * @property integer $kompleks_id
 * @property string $name
 */
class Boshqarma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'boshqarma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kompleks_id', 'name'], 'required'],
            [['kompleks_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kompleks_id' => 'Комплекс',
            'name' => 'Номи',
        ];
    }
}
