<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "public.pasien".
 *
 * @property int $no_rm
 * @property string|null $kd_jenis_pasien
 * @property string|null $nik
 * @property string|null $nama
 * @property string|null $kd_jenis_kelamin
 * @property string|null $kd_kota_lahir
 * @property string|null $tgl_lahir
 * @property string|null $alamat
 * @property string|null $kd_agama
 * @property string|null $kd_status_kawin
 * @property string|null $kd_pendidikan
 * @property string|null $kd_pekerjaan
 * @property string|null $kd_suku
 * @property string|null $kd_bahasa
 * @property string|null $notelp
 * @property string|null $nama_pj
 * @property string|null $kd_provinsi
 * @property string|null $kd_kota_alamat
 * @property string|null $kd_kecamatan
 * @property string|null $kd_desa
 * @property string|null $rt
 * @property string|null $rw
 */
class Publicpasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'public.pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_lahir'], 'safe'],
            [['kd_jenis_pasien', 'kd_agama', 'kd_status_kawin', 'kd_pendidikan', 'kd_pekerjaan', 'kd_suku', 'kd_bahasa', 'kd_provinsi'], 'string', 'max' => 2],
            [['nik', 'notelp', 'nama_pj'], 'string', 'max' => 20],
            [['nama', 'alamat'], 'string', 'max' => 100],
            [['kd_jenis_kelamin'], 'string', 'max' => 1],
            [['kd_kota_lahir'], 'string', 'max' => 400],
            [['kd_kota_alamat', 'rt', 'rw'], 'string', 'max' => 5],
            [['kd_kecamatan'], 'string', 'max' => 7],
            [['kd_desa'], 'string', 'max' => 10],
            [['kd_agama'], 'exist', 'skipOnError' => true, 'targetClass' => SupportAgama::className(), 'targetAttribute' => ['kd_agama' => 'kd_agama']],
            [['kd_bahasa'], 'exist', 'skipOnError' => true, 'targetClass' => SupportBahasa::className(), 'targetAttribute' => ['kd_bahasa' => 'kd_bahasa']],
            [['kd_jenis_kelamin'], 'exist', 'skipOnError' => true, 'targetClass' => SupportJenisKelamin::className(), 'targetAttribute' => ['kd_jenis_kelamin' => 'kd_jenis_kelamin']],
            [['kd_jenis_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => SupportJenisPasien::className(), 'targetAttribute' => ['kd_jenis_pasien' => 'kd_jenis_pasien']],
            [['kd_pekerjaan'], 'exist', 'skipOnError' => true, 'targetClass' => SupportPekerjaan::className(), 'targetAttribute' => ['kd_pekerjaan' => 'kd_pekerjaan']],
            [['kd_pendidikan'], 'exist', 'skipOnError' => true, 'targetClass' => SupportPendidikan::className(), 'targetAttribute' => ['kd_pendidikan' => 'kd_pendidikan']],
            [['kd_status_kawin'], 'exist', 'skipOnError' => true, 'targetClass' => SupportStatusKawin::className(), 'targetAttribute' => ['kd_status_kawin' => 'kd_status_kawin']],
            [['kd_suku'], 'exist', 'skipOnError' => true, 'targetClass' => SupportSuku::className(), 'targetAttribute' => ['kd_suku' => 'kd_suku']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rm' => 'No Rm',
            'kd_jenis_pasien' => 'Jenis Pasien',
            'nik' => 'Nik',
            'nama' => 'Nama',
            'kd_jenis_kelamin' => 'Jenis Kelamin',
            'kd_kota_lahir' => 'Kota Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'kd_agama' => 'Agama',
            'kd_status_kawin' => 'Status Kawin',
            'kd_pendidikan' => 'Pendidikan',
            'kd_pekerjaan' => 'Pekerjaan',
            'kd_suku' => 'Suku',
            'kd_bahasa' => 'Bahasa',
            'notelp' => 'Notelp',
            'nama_pj' => 'Nama Penanggung jawab',
            'kd_provinsi' => 'Provinsi',
            'kd_kota_alamat' => 'Kota Alamat',
            'kd_kecamatan' => 'Kecamatan',
            'kd_desa' => 'Desa',
            'rt' => 'Rt',
            'rw' => 'Rw',
        ];
    }
    public function getsupportjenispasien()
    {
        return $this->hasOne(supportjenispasien::className(), ['kd_jenis_pasien' => 'kd_jenis_pasien']);
    }
    public function getsupportjeniskelamin()
    {
        return $this->hasone(supportjeniskelamin::className(), ['kd_jenis_kelamin' => 'kd_jenis_kelamin']);
    }
    public function getsupportagama()
    {
        return $this->hasone(supportagama::className(), ['kd_agama' => 'kd_agama']);
    }
    public function getsupportstatuskawin()
    {
        return $this->hasone(supportstatuskawin::className(), ['kd_status_kawin' => 'kd_status_kawin']);
    }
    public function getsupportpendidikan()
    {
        return $this->hasone(supportpendidikan::className(), ['kd_pendidikan' => 'kd_pendidikan']);
    }
    public function getsupportpekerjaan()
    {
        return $this->hasone(supportpekerjaan::className(), ['kd_pekerjaan' => 'kd_pekerjaan']);
    }
    public function getsupportsuku()
    {
        return $this->hasone(supportsuku::className(), ['kd_suku' => 'kd_suku']);
    }
    public function getsupportbahasa()
    {
        return $this->hasone(supportbahasa::className(), ['kd_bahasa' => 'kd_bahasa']);
    }
    public function getsupportprovinsi()
    {
        return $this->hasone(supportprovinsi::className(), ['kdprovinsi' => 'kdprovinsi']);
    }
    public function getsupportkabupaten()
    {
        return $this->hasone(supportkabupaten::className(), ['kdkabupaten' => 'kdkabupaten']);
    }
}
