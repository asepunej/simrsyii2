<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.jenis_daftar".
 *
 * @property string $kd_jenis_daftar
 * @property string $jenis_daftar
 *
 * @property Registrasi[] $registrasis
 */
class Supportjenisdaftar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.jenis_daftar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_daftar', 'jenis_daftar'], 'required'],
            [['kd_jenis_daftar'], 'string', 'max' => 2],
            [['jenis_daftar'], 'string', 'max' => 255],
            [['kd_jenis_daftar'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_daftar' => 'Kd Jenis Daftar',
            'jenis_daftar' => 'Jenis Daftar',
        ];
    }

    /**
     * Gets query for [[Registrasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrasis()
    {
        return $this->hasMany(Registrasi::className(), ['kd_jenis_daftar' => 'kd_jenis_daftar']);
    }
}
