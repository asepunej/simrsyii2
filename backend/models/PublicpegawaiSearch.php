<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Publicpegawai;

/**
 * PublicpegawaiSearch represents the model behind the search form of `app\models\Publicpegawai`.
 */
class PublicpegawaiSearch extends Publicpegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'kd_unit_kerja'], 'integer'],
            [['nip', 'nama', 'kd_jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'kd_agama', 'alamat_rumah', 'kota', 'no_hp', 'no_telepon', 'kd_jabatan', 'kd_status_aktif'], 'safe'],
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
        $query = Publicpegawai::find();

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
            'id_pegawai' => $this->id_pegawai,
            'tgl_lahir' => $this->tgl_lahir,
            'kd_unit_kerja' => $this->kd_unit_kerja,
        ]);

        $query->andFilterWhere(['ilike', 'nip', $this->nip])
            ->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'kd_jenis_kelamin', $this->kd_jenis_kelamin])
            ->andFilterWhere(['ilike', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['ilike', 'kd_agama', $this->kd_agama])
            ->andFilterWhere(['ilike', 'alamat_rumah', $this->alamat_rumah])
            ->andFilterWhere(['ilike', 'kota', $this->kota])
            ->andFilterWhere(['ilike', 'no_hp', $this->no_hp])
            ->andFilterWhere(['ilike', 'no_telepon', $this->no_telepon])
            ->andFilterWhere(['ilike', 'kd_jabatan', $this->kd_jabatan])
            ->andFilterWhere(['ilike', 'kd_status_aktif', $this->kd_status_aktif]);

        return $dataProvider;
    }
}
