<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supportagama;

/**
 * SupportagamaSearch represents the model behind the search form of `app\models\Supportagama`.
 */
class SupportagamaSearch extends Supportagama
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_agama', 'agama'], 'safe'],
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
        $query = Supportagama::find();

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
        $query->andFilterWhere(['ilike', 'kd_agama', $this->kd_agama])
            ->andFilterWhere(['ilike', 'agama', $this->agama]);

        return $dataProvider;
    }
}
