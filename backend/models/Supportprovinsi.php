<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.provinsi".
 *
 * @property string $kdprovinsi
 * @property string $provinsi
 */
class Supportprovinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.provinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdprovinsi', 'provinsi'], 'required'],
            [['kdprovinsi'], 'string', 'max' => 2],
            [['provinsi'], 'string', 'max' => 255],
            [['kdprovinsi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kdprovinsi' => 'Kdprovinsi',
            'provinsi' => 'Provinsi',
        ];
    }
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kdprovinsi' => 'kdprovinsi']);
    }
}
