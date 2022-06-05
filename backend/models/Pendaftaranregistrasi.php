<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran.registrasi".
 *
 * @property int $id_registrasi
 * @property int|null $no_rm
 * @property string|null $kd_jenis_daftar
 * @property string|null $kd_rujukan
 * @property string|null $doker_rujukan
 * @property int|null $kd_Faskes_rujukan
 * @property int|null $kd_rs_rujukan
 * @property string|null $kd_jenis_pembayaran
 * @property string|null $kd_klinik
 * @property int|null $id_medis
 * @property int|null $id_petugas
 * @property int|null $id_user
 * @property string|null $tgl
 * @property string|null $kd_klinik_reg
 */
class Pendaftaranregistrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran.registrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rm', 'kd_Faskes_rujukan', 'kd_rs_rujukan', 'id_medis', 'id_petugas', 'id_user'], 'default', 'value' => null],
            [['no_rm', 'kd_Faskes_rujukan', 'kd_rs_rujukan', 'id_medis', 'id_petugas', 'id_user'], 'integer'],
            [['tgl'], 'safe'],
            [['kd_jenis_daftar', 'kd_rujukan', 'kd_jenis_pembayaran', 'kd_klinik', 'kd_klinik_reg'], 'string', 'max' => 2],
            [['doker_rujukan'], 'string', 'max' => 100],
            [['no_rm'], 'exist', 'skipOnError' => true, 'targetClass' => PublicPasien::className(), 'targetAttribute' => ['no_rm' => 'no_rm']],
            [['kd_jenis_daftar'], 'exist', 'skipOnError' => true, 'targetClass' => SupportJenisDaftar::className(), 'targetAttribute' => ['kd_jenis_daftar' => 'kd_jenis_daftar']],
            [['kd_klinik'], 'exist', 'skipOnError' => true, 'targetClass' => SupportJenisKlinik::className(), 'targetAttribute' => ['kd_klinik' => 'kd_jenis_klinik']],
            [['kd_jenis_pembayaran'], 'exist', 'skipOnError' => true, 'targetClass' => SupportJenisPembayaran::className(), 'targetAttribute' => ['kd_jenis_pembayaran' => 'kd_jenis_pembayaran']],
            [['kd_klinik'], 'exist', 'skipOnError' => true, 'targetClass' => SupportKlinik::className(), 'targetAttribute' => ['kd_klinik' => 'kd_klinik']],
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
            'kd_jenis_daftar' => 'Jenis pasien',
            'kd_rujukan' => 'Rujukan',
            'doker_rujukan' => 'Doker Rujukan',
            'kd_Faskes_rujukan' => 'Faskes Rujukan',
            'kd_rs_rujukan' => 'Rs Rujukan',
            'kd_jenis_pembayaran' => 'Jenis Pembayaran',
            'kd_klinik' => 'Klinik',
            'id_medis' => 'Id Medis',
            'id_petugas' => 'Id Petugas',
            'id_user' => 'Id User',
            'tgl' => 'Tanggal',
            'kd_klinik_reg' => 'Klinik Reg',
        ];
    }
}
