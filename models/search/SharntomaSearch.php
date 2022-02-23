<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shartnoma;

/**
 * SharntomaSearch represents the model behind the search form about `app\models\Shartnoma`.
 */
class SharntomaSearch extends Shartnoma
{
    public $tashkilotname;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tashkilot_id', 'shartnoma_summasi', 'tolandi', 'qoldiq', 'status', 'district_id', 'shartnoma_type_id', 'idora_type_id', 'kompleks_id', 'boshqarma_id'], 'integer'],
            [['shartnoma_raqami','tashkilotname', 'shartnoma_berildi', 'masul_hodim', 'phone_masul_hodim', 'qabul_qilgan_hodim', 'dalolatnoma_sana', 'shartnoma_qaytarishi', 'izoh', 'created', 'updated'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Shartnoma::find()->innerJoin('tashkilot','tashkilot.id = shartnoma.tashkilot_id')->orderBy(['id'=>SORT_DESC]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination' => [ 'pageSize' => 50 ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,

            'shartnoma_summasi' => $this->shartnoma_summasi,
            'tolandi' => $this->tolandi,
            'qoldiq' => $this->qoldiq,
            'shartnoma_berildi' => $this->shartnoma_berildi,
            'dalolatnoma_sana' => $this->dalolatnoma_sana,
            'shartnoma_qaytarishi' => $this->shartnoma_qaytarishi,
            'status' => $this->status,
            'district_id' => $this->district_id,
            'shartnoma_type_id' => $this->shartnoma_type_id,
            'idora_type_id' => $this->idora_type_id,
            'kompleks_id' => $this->kompleks_id,
            'boshqarma_id' => $this->boshqarma_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'shartnoma_raqami', $this->shartnoma_raqami])
            ->andFilterWhere(['like', 'masul_hodim', $this->masul_hodim])
            ->andFilterWhere(['like', 'phone_masul_hodim', $this->phone_masul_hodim])
            ->andFilterWhere(['like', 'tashkilot.name', $this->tashkilotname])
            ->andFilterWhere(['like', 'qabul_qilgan_hodim', $this->qabul_qilgan_hodim])
            ->andFilterWhere(['like', 'izoh', $this->izoh]);

        return $dataProvider;
    }
}
