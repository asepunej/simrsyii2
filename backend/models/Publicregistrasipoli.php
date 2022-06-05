<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "public.registrasi_poli".
 *
 * @property int $id_registrasi_poli
 * @property int|null $id_registrasi
 * @property int|null $id_klinik
 * @property int|null $no_antrian
 * @property string|null $tgl
 * @property int|null $id_user
 */
class Publicregistrasipoli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'public.registrasi_poli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_registrasi', 'id_klinik', 'no_antrian', 'id_user'], 'default', 'value' => null],
            [['id_registrasi', 'id_klinik', 'no_antrian', 'id_user'], 'integer'],
            [['tgl'], 'safe'],
            [['id_registrasi'], 'exist', 'skipOnError' => true, 'targetClass' => PublicRegistrasi::className(), 'targetAttribute' => ['id_registrasi' => 'id_registrasi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_registrasi_poli' => 'Id Registrasi Poli',
            'id_registrasi' => 'Id Registrasi',
            'id_klinik' => 'Id Klinik',
            'no_antrian' => 'No Antrian',
            'tgl' => 'Tgl',
            'id_user' => 'Id User',
        ];
    }
}
