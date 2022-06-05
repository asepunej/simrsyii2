<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.status_pasien".
 *
 * @property string $kd_status_pasien
 * @property string|null $status_pasien
 */
class Supportstatuspasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.status_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_status_pasien'], 'required'],
            [['kd_status_pasien'], 'string', 'max' => 1],
            [['status_pasien'], 'string', 'max' => 20],
            [['kd_status_pasien'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_status_pasien' => 'Kd Status Pasien',
            'status_pasien' => 'Status Pasien',
        ];
    }
}
