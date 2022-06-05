<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.jenis_kelamin".
 *
 * @property string $kd_jenis_kelamin
 * @property string $jenis_kelamin
 *
 * @property Pasien[] $pasiens
 */
class Supportjeniskelamin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.jenis_kelamin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_kelamin', 'jenis_kelamin'], 'required'],
            [['kd_jenis_kelamin'], 'string', 'max' => 1],
            [['jenis_kelamin'], 'string', 'max' => 20],
            [['kd_jenis_kelamin'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_jenis_kelamin' => 'Kd Jenis Kelamin',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kd_jenis_kelamin' => 'kd_jenis_kelamin']);
    }
}
