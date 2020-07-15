<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\jadwal;

/**
 * JadwalSearch represents the model behind the search form of `common\models\jadwal`.
 */
class JadwalSearch extends jadwal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jadwal', 'id_toilet', 'id_kantor', 'id_station', 'id_kereta', 'id_daop', 'id'], 'integer'],
            [['hari', 'waktu_awal', 'waktu_akhir'], 'safe'],
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
        $query = jadwal::find();

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
            'id_jadwal' => $this->id_jadwal,
            'waktu_awal' => $this->waktu_awal,
            'waktu_akhir' => $this->waktu_akhir,
            'id_toilet' => $this->id_toilet,
            'id_kantor' => $this->id_kantor,
            'id_station' => $this->id_station,
            'id_kereta' => $this->id_kereta,
            'id_daop' => $this->id_daop,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'hari', $this->hari]);

        return $dataProvider;
    }
}
