<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.user".
 *
 * @property int $id_user
 * @property string|null $username
 * @property string|null $pasword
 * @property int|null $id_pegawai
 * @property string|null $kd_klinik
 * @property string|null $kd_jabatan
 */
class Supportuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai'], 'default', 'value' => null],
            [['id_pegawai'], 'integer'],
            [['username', 'pasword'], 'string', 'max' => 50],
            [['kd_klinik', 'kd_jabatan'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'pasword' => 'Pasword',
            'id_pegawai' => 'Id Pegawai',
            'kd_klinik' => 'Kd Klinik',
            'kd_jabatan' => 'Kd Jabatan',
        ];
    }
}
