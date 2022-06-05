<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "igd.anamnesa".
 *
 * @property int $id_anamnesa
 * @property string|null $anamnesa
 * @property float|null $bb
 * @property float|null $tt
 * @property float|null $index
 * @property string|null $kd_kesadaran
 * @property float|null $td_sistole
 * @property float|null $td_diatole
 * @property float|null $heart_rate
 * @property float|null $respirasi_rate
 * @property string|null $hasil_periksa
 * @property int|null $id_registrasi
 */
class Igdanamnesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'igd.anamnesa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bb', 'tt', 'index', 'td_sistole', 'td_diatole', 'heart_rate', 'respirasi_rate'], 'number'],
            [['id_registrasi'], 'default', 'value' => null],
            [['id_registrasi'], 'integer'],
            [['anamnesa', 'hasil_periksa'], 'string', 'max' => 1000],
            [['kd_kesadaran'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anamnesa' => 'Id Anamnesa',
            'anamnesa' => 'Anamnesa',
            'bb' => 'Bb',
            'tt' => 'Tt',
            'index' => 'Index',
            'kd_kesadaran' => 'Kd Kesadaran',
            'td_sistole' => 'Td Sistole',
            'td_diatole' => 'Td Diatole',
            'heart_rate' => 'Heart Rate',
            'respirasi_rate' => 'Respirasi Rate',
            'hasil_periksa' => 'Hasil Periksa',
            'id_registrasi' => 'Id Registrasi',
        ];
    }
}
