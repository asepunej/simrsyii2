<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.tenaga_medis".
 *
 * @property string $kode
 * @property string|null $nama
 */
class Supporttenagamedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.tenaga_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['nama'], 'string'],
            [['kode'], 'string', 'max' => 1],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
        ];
    }
}
