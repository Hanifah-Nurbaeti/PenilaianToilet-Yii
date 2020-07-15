<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\kantor;

/**
 * KantorSearch represents the model behind the search form of `common\models\kantor`.
 */
class KantorSearch extends kantor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kantor', 'id_daop'], 'integer'],
            [['kantor_city', 'kantor_code', 'kantor_name', 'gedung','id_daop'], 'safe'],
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
        $query = kantor::find();

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
            'id_kantor' => $this->id_kantor,
            'id_daop' => $this->id_daop,
        ]);

        $query->andFilterWhere(['like', 'kantor_city', $this->kantor_city])
            ->andFilterWhere(['like', 'kantor_code', $this->kantor_code])
            ->andFilterWhere(['like', 'kantor_name', $this->kantor_name])
            ->andFilterWhere(['like', 'gedung', $this->gedung])
             ->andFilterWhere(['like', 'id_daop', $this->id_daop]);

        return $dataProvider;
    }
}
