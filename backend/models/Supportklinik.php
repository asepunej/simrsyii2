<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.klinik".
 *
 * @property string $kd_klinik
 * @property string|null $klinik
 * @property bool|null $integrasi
 * @property bool|null $penunjang
 *
 * @property Registrasi[] $registrasis
 */
class Supportklinik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.klinik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_klinik'], 'required'],
            [['klinik'], 'string'],
            [['integrasi', 'penunjang'], 'boolean'],
            [['kd_klinik'], 'string', 'max' => 2],
            [['kd_klinik'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_klinik' => 'Kd Klinik',
            'klinik' => 'Klinik',
            'integrasi' => 'Integrasi',
            'penunjang' => 'Penunjang',
        ];
    }

    /**
     * Gets query for [[Registrasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrasis()
    {
        return $this->hasMany(Registrasi::className(), ['kd_klinik_tujuan' => 'kd_klinik']);
    }
}
