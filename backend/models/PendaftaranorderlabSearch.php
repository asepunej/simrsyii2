<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pendaftaranorderlab;

/**
 * PendaftaranorderlabSearch represents the model behind the search form of `app\models\Pendaftaranorderlab`.
 */
class PendaftaranorderlabSearch extends Pendaftaranorderlab
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_order', 'no_order', 'id_pekerjaan1', 'id_pekerjaan2', 'id_pekerjaan3', 'id_petugas'], 'integer'],
            [['kd_pengirim', 'nama_pengirim'], 'safe'],
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
        $query = Pendaftaranorderlab::find();

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
            'id_order' => $this->id_order,
            'no_order' => $this->no_order,
            'id_pekerjaan1' => $this->id_pekerjaan1,
            'id_pekerjaan2' => $this->id_pekerjaan2,
            'id_pekerjaan3' => $this->id_pekerjaan3,
            'id_petugas' => $this->id_petugas,
        ]);

        $query->andFilterWhere(['ilike', 'kd_pengirim', $this->kd_pengirim])
            ->andFilterWhere(['ilike', 'nama_pengirim', $this->nama_pengirim]);

        return $dataProvider;
    }
}
