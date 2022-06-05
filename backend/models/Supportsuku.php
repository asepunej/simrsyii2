<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.suku".
 *
 * @property string $kd_suku
 * @property string $suku
 *
 * @property Pasien[] $pasiens
 */
class Supportsuku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.suku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_suku', 'suku'], 'required'],
            [['kd_suku'], 'string', 'max' => 2],
            [['suku'], 'string', 'max' => 255],
            [['kd_suku'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_suku' => 'Kd Suku',
            'suku' => 'Suku',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kd_suku' => 'kd_suku']);
    }
}
