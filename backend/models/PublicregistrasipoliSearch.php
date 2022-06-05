<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Publicregistrasipoli;

/**
 * PublicregistrasipoliSearch represents the model behind the search form of `app\models\Publicregistrasipoli`.
 */
class PublicregistrasipoliSearch extends Publicregistrasipoli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_registrasi_poli', 'id_registrasi', 'id_klinik', 'no_antrian', 'id_user'], 'integer'],
            [['tgl'], 'safe'],
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
        $query = Publicregistrasipoli::find();

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
            'id_registrasi_poli' => $this->id_registrasi_poli,
            'id_registrasi' => $this->id_registrasi,
            'id_klinik' => $this->id_klinik,
            'no_antrian' => $this->no_antrian,
            'tgl' => $this->tgl,
            'id_user' => $this->id_user,
        ]);

        return $dataProvider;
    }
}
