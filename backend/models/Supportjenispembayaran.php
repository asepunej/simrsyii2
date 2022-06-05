<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.jenis_pembayaran".
 *
 * @property string $kd_jenis_pembayaran
 * @property string $jenis_pembayaran
 *
 * @property Registrasi[] $registrasis
 */
class Supportjenispembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.jenis_pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_pembayaran', 'jenis_pembayaran'], 'required'],
            [['kd_jenis_pembayaran'], 'string', 'max' => 2],
            [['jenis_pembayaran'], 'string', 'max' => 255],
            [['kd_jenis_pembayaran'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_pembayaran' => 'Kd Jenis Pembayaran',
            'jenis_pembayaran' => 'Jenis Pembayaran',
        ];
    }

    /**
     * Gets query for [[Registrasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrasis()
    {
        return $this->hasMany(Registrasi::className(), ['kd_jenis_pembayaran' => 'kd_jenis_pembayaran']);
    }
}
