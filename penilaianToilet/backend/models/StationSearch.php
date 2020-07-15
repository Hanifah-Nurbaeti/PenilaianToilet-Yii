<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\station;

/**
 * StationSearch represents the model behind the search form of `common\models\station`.
 */
class StationSearch extends station
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_station', 'id_daop'], 'integer'],
            [['station_code', 'station_name', 'station_city'], 'safe'],
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
        $query = station::find();

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
            'id_station' => $this->id_station,
            'id_daop' => $this->id_daop,
        ]);

        $query->andFilterWhere(['like', 'station_code', $this->station_code])
            ->andFilterWhere(['like', 'station_name', $this->station_name])
            ->andFilterWhere(['like', 'station_city', $this->station_city]);

        return $dataProvider;
    }
}
