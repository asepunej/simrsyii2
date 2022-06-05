<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.pendidikan".
 *
 * @property string $kd_pendidikan
 * @property string $pendidikan
 *
 * @property Pasien[] $pasiens
 */
class Supportpendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pendidikan', 'pendidikan'], 'required'],
            [['kd_pendidikan'], 'string', 'max' => 2],
            [['pendidikan'], 'string', 'max' => 255],
            [['kd_pendidikan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pendidikan' => 'Kd Pendidikan',
            'pendidikan' => 'Pendidikan',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kd_pendidikan' => 'kd_pendidikan']);
    }
}
