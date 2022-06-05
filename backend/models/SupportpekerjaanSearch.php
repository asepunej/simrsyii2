<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supportpekerjaan;

/**
 * SupportpekerjaanSearch represents the model behind the search form of `app\models\Supportpekerjaan`.
 */
class SupportpekerjaanSearch extends Supportpekerjaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pekerjaan', 'pekerjaan'], 'safe'],
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
        $query = Supportpekerjaan::find();

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
        $query->andFilterWhere(['ilike', 'kd_pekerjaan', $this->kd_pekerjaan])
            ->andFilterWhere(['ilike', 'pekerjaan', $this->pekerjaan]);

        return $dataProvider;
    }
}
