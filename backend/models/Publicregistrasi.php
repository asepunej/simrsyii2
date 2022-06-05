<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "public.registrasi".
 *
 * @property int $id_registrasi
 * @property int|null $no_rm
 * @property string|null $kd_jenis_daftar
 * @property string|null $kd_rujukan
 * @property string|null $doker_rujukan
 * @property int|null $kd_Faskes_rujukan
 * @property int|null $kd_rs_rujukan
 * @property string|null $kd_jenis_pembayaran
 * @property string|null $kd_klinik_tujuan
 * @property int|null $id_pilmedis
 * @property int|null $id_petugas
 * @property int|null $id_user
 * @property string|null $tgl
 * @property int|null $kd_asuransi
 */
class Publicregistrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'public.registrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rm', 'kd_Faskes_rujukan', 'kd_rs_rujukan', 'id_pilmedis', 'id_petugas', 'id_user', 'kd_asuransi'], 'default', 'value' => null],
            [['no_rm', 'kd_Faskes_rujukan', 'kd_rs_rujukan', 'id_pilmedis', 'id_petugas', 'id_user', 'kd_asuransi'], 'integer'],
            [['tgl'], 'safe'],
            [['kd_jenis_daftar', 'kd_rujukan', 'kd_jenis_pembayaran', 'kd_klinik_tujuan'], 'string', 'max' => 2],
            [['doker_rujukan'], 'string', 'max' => 100],
            [['no_rm'], 'exist', 'skipOnError' => true, 'targetClass' => PublicPasien::className(), 'targetAttribute' => ['no_rm' => 'no_rm']],
            [['id_pilmedis'], 'exist', 'skipOnError' => true, 'targetClass' => PublicPegawai::className(), 'targetAttribute' => ['id_pilmedis' => 'id_pegawai']],
            [['id_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => PublicPegawai::className(), 'targetAttribute' => ['id_petugas' => 'id_pegawai']],
            [['kd_jenis_daftar'], 'exist', 'skipOnError' => true, 'targetClass' => SupportJenisDaftar::className(), 'targetAttribute' => ['kd_jenis_daftar' => 'kd_jenis_daftar']],
            [['kd_klinik_tujuan'], 'exist', 'skipOnError' => true, 'targetClass' => SupportJenisKlinik::className(), 'targetAttribute' => ['kd_klinik_tujuan' => 'kd_jenis_klinik']],
            [['kd_jenis_pembayaran'], 'exist', 'skipOnError' => true, 'targetClass' => SupportJenisPembayaran::className(), 'targetAttribute' => ['kd_jenis_pembayaran' => 'kd_jenis_pembayaran']],
            [['kd_klinik_tujuan'], 'exist', 'skipOnError' => true, 'targetClass' => SupportKlinik::className(), 'targetAttribute' => ['kd_klinik_tujuan' => 'kd_klinik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_registrasi' => 'Id Registrasi',
            'no_rm' => 'No Rm',
            'kd_jenis_daftar' => 'Kd Jenis Daftar',
            'kd_rujukan' => 'Kd Rujukan',
            'doker_rujukan' => 'Doker Rujukan',
            'kd_Faskes_rujukan' => 'Kd Faskes Rujukan',
            'kd_rs_rujukan' => 'Kd Rs Rujukan',
            'kd_jenis_pembayaran' => 'Kd Jenis Pembayaran',
            'kd_klinik_tujuan' => 'Kd Klinik Tujuan',
            'id_pilmedis' => 'Id Pilmedis',
            'id_petugas' => 'Id Petugas',
            'id_user' => 'Id User',
            'tgl' => 'Tgl',
            'kd_asuransi' => 'Kd Asuransi',
        ];
    }
}
