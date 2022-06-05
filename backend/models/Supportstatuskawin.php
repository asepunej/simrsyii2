<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.status_kawin".
 *
 * @property string $kd_status_kawin
 * @property string $status_kawin
 *
 * @property Pasien[] $pasiens
 */
class Supportstatuskawin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.status_kawin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_status_kawin', 'status_kawin'], 'required'],
            [['kd_status_kawin'], 'string', 'max' => 2],
            [['status_kawin'], 'string', 'max' => 255],
            [['kd_status_kawin'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_status_kawin' => 'Kd Status Kawin',
            'status_kawin' => 'Status Kawin',
        ];
    }

    /**
     * Gets query for [[Pasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kd_status_kawin' => 'kd_status_kawin']);
    }
}
