<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "public.pegawai".
 *
 * @property int $id_pegawai
 * @property string|null $nip
 * @property string|null $nama
 * @property string|null $kd_jenis_kelamin
 * @property string|null $tempat_lahir
 * @property string|null $tgl_lahir
 * @property string|null $kd_agama
 * @property string|null $alamat_rumah
 * @property string|null $kota
 * @property string|null $no_hp
 * @property string|null $no_telepon
 * @property string|null $kd_jabatan
 * @property int|null $kd_unit_kerja
 * @property string $kd_status_aktif
 */
class Publicpegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'public.pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'tempat_lahir', 'alamat_rumah', 'kota'], 'string'],
            [['tgl_lahir'], 'safe'],
            [['kd_unit_kerja'], 'default', 'value' => null],
            [['kd_unit_kerja'], 'integer'],
            [['kd_status_aktif'], 'required'],
            [['kd_jenis_kelamin', 'kd_agama', 'kd_jabatan', 'kd_status_aktif'], 'string', 'max' => 1],
            [['no_hp', 'no_telepon'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nip' => 'Nip',
            'nama' => 'Nama',
            'kd_jenis_kelamin' => 'Kd Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'kd_agama' => 'Kd Agama',
            'alamat_rumah' => 'Alamat Rumah',
            'kota' => 'Kota',
            'no_hp' => 'No Hp',
            'no_telepon' => 'No Telepon',
            'kd_jabatan' => 'Kd Jabatan',
            'kd_unit_kerja' => 'Kd Unit Kerja',
            'kd_status_aktif' => 'Kd Status Aktif',
        ];
    }
}
