<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.pilihan_medis".
 *
 * @property string $kd_pilihan_medis
 * @property string|null $pilihan_medis
 */
class Supportpilihanmedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.pilihan_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pilihan_medis'], 'required'],
            [['kd_pilihan_medis'], 'string', 'max' => 2],
            [['pilihan_medis'], 'string', 'max' => 50],
            [['kd_pilihan_medis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pilihan_medis' => 'Kd Pilihan Medis',
            'pilihan_medis' => 'Pilihan Medis',
        ];
    }
}
