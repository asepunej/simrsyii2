<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.jabatan".
 *
 * @property string $kd_jabatan
 * @property string|null $jabatan
 * @property string|null $kd_medis
 */
class Supportjabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jabatan'], 'required'],
            [['kd_jabatan', 'kd_medis'], 'string', 'max' => 2],
            [['jabatan'], 'string', 'max' => 50],
            [['kd_jabatan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jabatan' => 'Kd Jabatan',
            'jabatan' => 'Jabatan',
            'kd_medis' => 'Kd Medis',
        ];
    }
}
