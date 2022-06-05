<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supportkecamatan;

/**
 * SupportkecamatanSearch represents the model behind the search form of `app\models\Supportkecamatan`.
 */
class SupportkecamatanSearch extends Supportkecamatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdkecamatan', 'kdkabupaten', 'kecamatan'], 'safe'],
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
        $query = Supportkecamatan::find();

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
        $query->andFilterWhere(['ilike', 'kdkecamatan', $this->kdkecamatan])
            ->andFilterWhere(['ilike', 'kdkabupaten', $this->kdkabupaten])
            ->andFilterWhere(['ilike', 'kecamatan', $this->kecamatan]);

        return $dataProvider;
    }
}
