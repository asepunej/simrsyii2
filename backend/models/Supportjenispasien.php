<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.jenis_pasien".
 *
 * @property string $kd_jenis_pasien
 * @property string $jenis_pasien
 *
 * @property Pasien[] $pasiens
 */
class Supportjenispasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.jenis_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_pasien', 'jenis_pasien'], 'required'],
            [['kd_jenis_pasien'], 'string', 'max' => 2],
            [['jenis_pasien'], 'string', 'max' => 255],
            [['kd_jenis_pasien'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_pasien' => 'Kd Jenis Pasien',
            'jenis_pasien' => 'Jenis Pasien',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kd_jenis_pasien' => 'kd_jenis_pasien'])->count(10);
    }
}
