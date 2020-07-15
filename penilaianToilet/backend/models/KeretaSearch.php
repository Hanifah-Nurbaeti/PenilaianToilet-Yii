<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\kereta;

/**
 * KeretaSearch represents the model behind the search form of `common\models\kereta`.
 */
class KeretaSearch extends kereta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kereta', 'id_station'], 'integer'],
            [['kereta_code', 'kereta_name', 'gerbong'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = kereta::find();

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
            'id_kereta' => $this->id_kereta,
            'id_station' => $this->id_station,
        ]);

        $query->andFilterWhere(['like', 'kereta_code', $this->kereta_code])
            ->andFilterWhere(['like', 'kereta_name', $this->kereta_name])
            ->andFilterWhere(['like', 'gerbong', $this->gerbong]);

        return $dataProvider;
    }
}
