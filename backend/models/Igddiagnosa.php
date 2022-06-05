<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "igd.diagnosa".
 *
 * @property int $id_diagnosa
 * @property string|null $kd_kasus
 * @property int|null $icd10
 * @property int|null $kd_icd10
 * @property string|null $keterangan
 * @property int|null $id_registrasi
 */
class Igddiagnosa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'igd.diagnosa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icd10', 'kd_icd10', 'id_registrasi'], 'default', 'value' => null],
            [['icd10', 'kd_icd10', 'id_registrasi'], 'integer'],
            [['kd_kasus'], 'string', 'max' => 1],
            [['keterangan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_diagnosa' => 'Id Diagnosa',
            'kd_kasus' => 'Kd Kasus',
            'icd10' => 'Icd 10',
            'kd_icd10' => 'Kd Icd 10',
            'keterangan' => 'Keterangan',
            'id_registrasi' => 'Id Registrasi',
        ];
    }
}
