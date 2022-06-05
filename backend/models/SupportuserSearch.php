<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supportuser;

/**
 * SupportuserSearch represents the model behind the search form of `app\models\Supportuser`.
 */
class SupportuserSearch extends Supportuser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_pegawai'], 'integer'],
            [['username', 'pasword', 'kd_klinik', 'kd_jabatan'], 'safe'],
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
        $query = Supportuser::find();

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
            'id_user' => $this->id_user,
            'id_pegawai' => $this->id_pegawai,
        ]);

        $query->andFilterWhere(['ilike', 'username', $this->username])
            ->andFilterWhere(['ilike', 'pasword', $this->pasword])
            ->andFilterWhere(['ilike', 'kd_klinik', $this->kd_klinik])
            ->andFilterWhere(['ilike', 'kd_jabatan', $this->kd_jabatan]);

        return $dataProvider;
    }
}
