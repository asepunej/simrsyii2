<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "igd.konsul".
 *
 * @property int $id_konsul
 * @property int|null $id_register
 * @property string|null $kd_klinik
 * @property string|null $keterangan
 */
class Igdkonsul extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'igd.konsul';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_register'], 'default', 'value' => null],
            [['id_register'], 'integer'],
            [['kd_klinik'], 'string', 'max' => 2],
            [['keterangan'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_konsul' => 'Id Konsul',
            'id_register' => 'Id Register',
            'kd_klinik' => 'Kd Klinik',
            'keterangan' => 'Keterangan',
        ];
    }
}
