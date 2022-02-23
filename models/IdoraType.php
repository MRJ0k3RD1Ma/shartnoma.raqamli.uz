<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "idora_type".
 *
 * @property integer $id
 * @property string $name
 */
class IdoraType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'idora_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
            'name' => 'Ташкилот тури',
        ];
    }
}
