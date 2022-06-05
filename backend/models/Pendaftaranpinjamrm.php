<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran.pinjam_rm".
 *
 * @property int $id_pinjam
 * @property string|null $kd_peminjam
 * @property int|null $id_peminjam
 * @property string|null $nama_peminjam
 * @property int|null $no_rm
 * @property string|null $kd_keperluan
 * @property string|null $kd_klinik
 * @property string|null $nama_DPJP
 * @property string|null $tgl_pinjam
 * @property string|null $tgl_kembali
 * @property int|null $id_petugas
 */
class Pendaftaranpinjamrm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran.pinjam_rm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_peminjam', 'no_rm', 'id_petugas'], 'default', 'value' => null],
            [['id_peminjam', 'no_rm', 'id_petugas'], 'integer'],
            [['tgl_pinjam', 'tgl_kembali'], 'safe'],
            [['kd_peminjam', 'kd_keperluan'], 'string', 'max' => 1],
            [['nama_peminjam', 'nama_DPJP'], 'string', 'max' => 100],
            [['kd_klinik'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pinjam' => 'Id Pinjam',
            'kd_peminjam' => 'Kd Peminjam',
            'id_peminjam' => 'Id Peminjam',
            'nama_peminjam' => 'Nama Peminjam',
            'no_rm' => 'No Rm',
            'kd_keperluan' => 'Kd Keperluan',
            'kd_klinik' => 'Kd Klinik',
            'nama_DPJP' => 'Nama Dpjp',
            'tgl_pinjam' => 'Tgl Pinjam',
            'tgl_kembali' => 'Tgl Kembali',
            'id_petugas' => 'Id Petugas',
        ];
    }
}
