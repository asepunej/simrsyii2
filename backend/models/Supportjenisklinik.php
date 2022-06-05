<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.jenis_klinik".
 *
 * @property string $kd_jenis_klinik
 * @property string|null $jenis_klinik
 *
 * @property Registrasi[] $registrasis
 */
class Supportjenisklinik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.jenis_klinik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_klinik'], 'required'],
            [['kd_jenis_klinik'], 'string', 'max' => 2],
            [['jenis_klinik'], 'string', 'max' => 50],
            [['kd_jenis_klinik'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_klinik' => 'Kd Jenis Klinik',
            'jenis_klinik' => 'Jenis Klinik',
        ];
    }

    /**
     * Gets query for [[Registrasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrasis()
    {
        return $this->hasMany(Registrasi::className(), ['kd_klinik_tujuan' => 'kd_jenis_klinik']);
    }
}
