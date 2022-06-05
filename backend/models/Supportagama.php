<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.agama".
 *
 * @property string $kd_agama
 * @property string $agama
 *
 * @property Pasien[] $pasiens
 */
class Supportagama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.agama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_agama', 'agama'], 'required'],
            [['kd_agama'], 'string', 'max' => 2],
            [['agama'], 'string', 'max' => 255],
            [['kd_agama'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_agama' => 'Kd Agama',
            'agama' => 'Agama',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kd_agama' => 'kd_agama']);
    }
}
