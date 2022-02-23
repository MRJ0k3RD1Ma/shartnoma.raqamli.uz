<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tashkilot;

/**
 * TashkilotSearch represents the model behind the search form about `app\models\Tashkilot`.
 */
class TashkilotSearch extends Tashkilot
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'district_id', 'idora_type_id', 'kompleks_id', 'boshqarma_id', 'inn'], 'integer'],
            [['name', 'rahbar', 'phone_tashkilot', 'phone_rahbar', 'buxgalter', 'phone_buxgalter', 'address', 'izoh'], 'safe'],
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
        $query = Tashkilot::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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
            'district_id' => $this->district_id,
            'idora_type_id' => $this->idora_type_id,
            'kompleks_id' => $this->kompleks_id,
            'boshqarma_id' => $this->boshqarma_id,
            'inn' => $this->inn,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'rahbar', $this->rahbar])
            ->andFilterWhere(['like', 'phone_tashkilot', $this->phone_tashkilot])
            ->andFilterWhere(['like', 'phone_rahbar', $this->phone_rahbar])
            ->andFilterWhere(['like', 'buxgalter', $this->buxgalter])
            ->andFilterWhere(['like', 'phone_buxgalter', $this->phone_buxgalter])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'izoh', $this->izoh]);

        return $dataProvider;
    }
}
