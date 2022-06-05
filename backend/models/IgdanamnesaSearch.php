<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Igdanamnesa;

/**
 * IgdanamnesaSearch represents the model behind the search form of `app\models\Igdanamnesa`.
 */
class IgdanamnesaSearch extends Igdanamnesa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anamnesa', 'id_registrasi'], 'integer'],
            [['anamnesa', 'kd_kesadaran', 'hasil_periksa'], 'safe'],
            [['bb', 'tt', 'index', 'td_sistole', 'td_diatole', 'heart_rate', 'respirasi_rate'], 'number'],
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
        $query = Igdanamnesa::find();

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
            'id_anamnesa' => $this->id_anamnesa,
            'bb' => $this->bb,
            'tt' => $this->tt,
            'index' => $this->index,
            'td_sistole' => $this->td_sistole,
            'td_diatole' => $this->td_diatole,
            'heart_rate' => $this->heart_rate,
            'respirasi_rate' => $this->respirasi_rate,
            'id_registrasi' => $this->id_registrasi,
        ]);

        $query->andFilterWhere(['ilike', 'anamnesa', $this->anamnesa])
            ->andFilterWhere(['ilike', 'kd_kesadaran', $this->kd_kesadaran])
            ->andFilterWhere(['ilike', 'hasil_periksa', $this->hasil_periksa]);

        return $dataProvider;
    }
}
