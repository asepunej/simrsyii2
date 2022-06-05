<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.pekerjaan".
 *
 * @property string $kd_pekerjaan
 * @property string $pekerjaan
 *
 * @property Pasien[] $pasiens
 */
class Supportpekerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pekerjaan', 'pekerjaan'], 'required'],
            [['kd_pekerjaan'], 'string', 'max' => 2],
            [['pekerjaan'], 'string', 'max' => 255],
            [['kd_pekerjaan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pekerjaan' => 'Kd Pekerjaan',
            'pekerjaan' => 'Pekerjaan',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kd_pekerjaan' => 'kd_pekerjaan']);
    }
}
