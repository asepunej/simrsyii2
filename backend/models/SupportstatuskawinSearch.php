<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supportstatuskawin;

/**
 * SupportstatuskawinSearch represents the model behind the search form of `app\models\Supportstatuskawin`.
 */
class SupportstatuskawinSearch extends Supportstatuskawin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_status_kawin', 'status_kawin'], 'safe'],
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
        $query = Supportstatuskawin::find();

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
        $query->andFilterWhere(['ilike', 'kd_status_kawin', $this->kd_status_kawin])
            ->andFilterWhere(['ilike', 'status_kawin', $this->status_kawin]);

        return $dataProvider;
    }
}
