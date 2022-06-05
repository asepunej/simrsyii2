<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supportstatuspasien;

/**
 * SupportstatuspasienSearch represents the model behind the search form of `app\models\Supportstatuspasien`.
 */
class SupportstatuspasienSearch extends Supportstatuspasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_status_pasien', 'status_pasien'], 'safe'],
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
        $query = Supportstatuspasien::find();

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
        $query->andFilterWhere(['ilike', 'kd_status_pasien', $this->kd_status_pasien])
            ->andFilterWhere(['ilike', 'status_pasien', $this->status_pasien]);

        return $dataProvider;
    }
}
