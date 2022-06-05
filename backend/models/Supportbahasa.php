<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.bahasa".
 *
 * @property string $kd_bahasa
 * @property string $bahasa
 *
 * @property Pasien[] $pasiens
 */
class Supportbahasa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.bahasa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_bahasa', 'bahasa'], 'required'],
            [['kd_bahasa'], 'string', 'max' => 2],
            [['bahasa'], 'string', 'max' => 255],
            [['kd_bahasa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_bahasa' => 'Kd Bahasa',
            'bahasa' => 'Bahasa',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kd_bahasa' => 'kd_bahasa']);
    }
}
