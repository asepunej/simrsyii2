<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Igdkonsul;

/**
 * IgdkonsulSearch represents the model behind the search form of `app\models\Igdkonsul`.
 */
class IgdkonsulSearch extends Igdkonsul
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_konsul', 'id_register'], 'integer'],
            [['kd_klinik', 'keterangan'], 'safe'],
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
        $query = Igdkonsul::find();

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
            'id_konsul' => $this->id_konsul,
            'id_register' => $this->id_register,
        ]);

        $query->andFilterWhere(['ilike', 'kd_klinik', $this->kd_klinik])
            ->andFilterWhere(['ilike', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
