<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "igd.tindakan".
 *
 * @property int $id_tindakan
 * @property int|null $id_registrasi
 * @property int|null $icd9
 * @property int|null $kd_icd9
 * @property int|null $kd_tindakan
 * @property string|null $keterangan
 */
class Igdtindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'igd.tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_registrasi', 'icd9', 'kd_icd9', 'kd_tindakan'], 'default', 'value' => null],
            [['id_registrasi', 'icd9', 'kd_icd9', 'kd_tindakan'], 'integer'],
            [['keterangan'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'id_registrasi' => 'Id Registrasi',
            'icd9' => 'Icd 9',
            'kd_icd9' => 'Kd Icd 9',
            'kd_tindakan' => 'Kd Tindakan',
            'keterangan' => 'Keterangan',
        ];
    }
}
