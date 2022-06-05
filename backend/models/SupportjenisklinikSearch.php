<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supportjenisklinik;

/**
 * SupportjenisklinikSearch represents the model behind the search form of `app\models\Supportjenisklinik`.
 */
class SupportjenisklinikSearch extends Supportjenisklinik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_klinik', 'jenis_klinik'], 'safe'],
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
        $query = Supportjenisklinik::find();

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
        $query->andFilterWhere(['ilike', 'kd_jenis_klinik', $this->kd_jenis_klinik])
            ->andFilterWhere(['ilike', 'jenis_klinik', $this->jenis_klinik]);

        return $dataProvider;
    }
}
