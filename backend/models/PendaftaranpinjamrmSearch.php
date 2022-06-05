<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pendaftaranpinjamrm;

/**
 * PendaftaranpinjamrmSearch represents the model behind the search form of `app\models\Pendaftaranpinjamrm`.
 */
class PendaftaranpinjamrmSearch extends Pendaftaranpinjamrm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pinjam', 'id_peminjam', 'no_rm', 'id_petugas'], 'integer'],
            [['kd_peminjam', 'nama_peminjam', 'kd_keperluan', 'kd_klinik', 'nama_DPJP', 'tgl_pinjam', 'tgl_kembali'], 'safe'],
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
        $query = Pendaftaranpinjamrm::find();

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
            'id_pinjam' => $this->id_pinjam,
            'id_peminjam' => $this->id_peminjam,
            'no_rm' => $this->no_rm,
            'tgl_pinjam' => $this->tgl_pinjam,
            'tgl_kembali' => $this->tgl_kembali,
            'id_petugas' => $this->id_petugas,
        ]);

        $query->andFilterWhere(['ilike', 'kd_peminjam', $this->kd_peminjam])
            ->andFilterWhere(['ilike', 'nama_peminjam', $this->nama_peminjam])
            ->andFilterWhere(['ilike', 'kd_keperluan', $this->kd_keperluan])
            ->andFilterWhere(['ilike', 'kd_klinik', $this->kd_klinik])
            ->andFilterWhere(['ilike', 'nama_DPJP', $this->nama_DPJP]);

        return $dataProvider;
    }
}
