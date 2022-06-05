<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supportjabatan;

/**
 * SupportjabatanSearch represents the model behind the search form of `app\models\Supportjabatan`.
 */
class SupportjabatanSearch extends Supportjabatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jabatan', 'jabatan', 'kd_medis'], 'safe'],
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
        $query = Supportjabatan::find();

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
        $query->andFilterWhere(['ilike', 'kd_jabatan', $this->kd_jabatan])
            ->andFilterWhere(['ilike', 'jabatan', $this->jabatan])
            ->andFilterWhere(['ilike', 'kd_medis', $this->kd_medis]);

        return $dataProvider;
    }
}
