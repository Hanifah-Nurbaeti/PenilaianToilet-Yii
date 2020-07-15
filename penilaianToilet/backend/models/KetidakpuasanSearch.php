<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ketidakpuasan;

/**
 * KetidakpuasanSearch represents the model behind the search form of `common\models\ketidakpuasan`.
 */
class KetidakpuasanSearch extends ketidakpuasan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ketidakpuasan', 'id_respon'], 'integer'],
            [['nama_ketidakpuasan', 'gambar'], 'safe'],
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
        $query = ketidakpuasan::find();

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
            'id_ketidakpuasan' => $this->id_ketidakpuasan,
            'id_respon' => $this->id_respon,
        ]);

        $query->andFilterWhere(['like', 'nama_ketidakpuasan', $this->nama_ketidakpuasan])
            ->andFilterWhere(['like', 'gambar', $this->gambar]);

        return $dataProvider;
    }
}
