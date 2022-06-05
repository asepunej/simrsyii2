<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pendaftaranregistrasi;

/**
 * PendaftaranregistrasiSearch represents the model behind the search form of `app\models\Pendaftaranregistrasi`.
 */
class PendaftaranregistrasiSearch extends Pendaftaranregistrasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_registrasi', 'no_rm', 'kd_Faskes_rujukan', 'kd_rs_rujukan', 'id_medis', 'id_petugas', 'id_user'], 'integer'],
            [['kd_jenis_daftar', 'kd_rujukan', 'doker_rujukan', 'kd_jenis_pembayaran', 'kd_klinik', 'tgl', 'kd_klinik_reg'], 'safe'],
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
        $query = Pendaftaranregistrasi::find();

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
            'id_registrasi' => $this->id_registrasi,
            'no_rm' => $this->no_rm,
            'kd_Faskes_rujukan' => $this->kd_Faskes_rujukan,
            'kd_rs_rujukan' => $this->kd_rs_rujukan,
            'id_medis' => $this->id_medis,
            'id_petugas' => $this->id_petugas,
            'id_user' => $this->id_user,
            'tgl' => $this->tgl,
        ]);

        $query->andFilterWhere(['ilike', 'kd_jenis_daftar', $this->kd_jenis_daftar])
            ->andFilterWhere(['ilike', 'kd_rujukan', $this->kd_rujukan])
            ->andFilterWhere(['ilike', 'doker_rujukan', $this->doker_rujukan])
            ->andFilterWhere(['ilike', 'kd_jenis_pembayaran', $this->kd_jenis_pembayaran])
            ->andFilterWhere(['ilike', 'kd_klinik', $this->kd_klinik])
            ->andFilterWhere(['ilike', 'kd_klinik_reg', $this->kd_klinik_reg]);

        return $dataProvider;
    }
}
