<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Publicpasien;

/**
 * PublicpasienSearch represents the model behind the search form of `app\models\Publicpasien`.
 */
class PublicpasienSearch extends Publicpasien
{
    public $jenis_pasien;
    public $jenis_kelamin;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rm'], 'integer'],
            [['kd_jenis_pasien', 'nik', 'nama', 'kd_jenis_kelamin', 'kd_kota_lahir', 'tgl_lahir', 'alamat', 'kd_agama', 'kd_status_kawin', 'kd_pendidikan', 'kd_pekerjaan', 'kd_suku', 'kd_bahasa', 'notelp', 'nama_pj', 'kd_provinsi', 'kd_kota_alamat', 'kd_kecamatan', 'kd_desa', 'rt', 'rw','jenis_pasien','jenis_kelamin'], 'safe'],
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
        $query = Publicpasien::find();
        // $subQuery = Publicpasien::find()->select('publicpasien.kd_jenis_pasien, COUNT(publicpasien.kd_jenis_pasien) as topic_count')->groupBy('supportjenispasien.kd_jenis_pasien');
        // $query->leftjoin('supportjenispasien','publicpasien.kd_jenis_pasien = supportjenispasien.kd_jenis_pasien');
        // $query->join('Supportjeniskelamin','Publicpasien.kd_jenis_kelamin = Supportjeniskelamin.kd_jenis_kelamin');
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
            'no_rm' => $this->no_rm,
            'tgl_lahir' => $this->tgl_lahir,
        ]);

        $query->andFilterWhere(['ilike', 'kd_jenis_pasien', $this->kd_jenis_pasien])
            ->andFilterWhere(['ilike', 'nik', $this->nik])
            ->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'kd_jenis_kelamin', $this->kd_jenis_kelamin])
            ->andFilterWhere(['ilike', 'kd_kota_lahir', $this->kd_kota_lahir])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'kd_agama', $this->kd_agama])
            ->andFilterWhere(['ilike', 'kd_status_kawin', $this->kd_status_kawin])
            ->andFilterWhere(['ilike', 'kd_pendidikan', $this->kd_pendidikan])
            ->andFilterWhere(['ilike', 'kd_pekerjaan', $this->kd_pekerjaan])
            ->andFilterWhere(['ilike', 'kd_suku', $this->kd_suku])
            ->andFilterWhere(['ilike', 'kd_bahasa', $this->kd_bahasa])
            ->andFilterWhere(['ilike', 'notelp', $this->notelp])
            ->andFilterWhere(['ilike', 'nama_pj', $this->nama_pj])
            ->andFilterWhere(['ilike', 'kd_provinsi', $this->kd_provinsi])
            ->andFilterWhere(['ilike', 'kd_kota_alamat', $this->kd_kota_alamat])
            ->andFilterWhere(['ilike', 'kd_kecamatan', $this->kd_kecamatan])
            ->andFilterWhere(['ilike', 'kd_desa', $this->kd_desa])
            ->andFilterWhere(['ilike', 'rt', $this->rt])
            ->andFilterWhere(['ilike', 'rw', $this->rw])
            ->andFilterWhere(['ilike', 'supportjenispasien.kd_jenis_pasien', $this->jenis_pasien])
            ->andFilterWhere(['ilike', 'supportjeniskelamin.jenis_kelamin', $this->jenis_kelamin]);

        return $dataProvider;
    }
}
