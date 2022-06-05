<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supportjenispasien;

/**
 * SupportjenispasienSearch represents the model behind the search form of `app\models\Supportjenispasien`.
 */
class SupportjenispasienSearch extends Supportjenispasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_pasien', 'jenis_pasien'], 'safe'],
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
        $query = Supportjenispasien::find();

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
        $query->andFilterWhere(['ilike', 'kd_jenis_pasien', $this->kd_jenis_pasien])
            ->andFilterWhere(['ilike', 'jenis_pasien', $this->jenis_pasien]);

        return $dataProvider;
    }
}
