<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran.order_lab".
 *
 * @property int $id_order
 * @property int|null $no_order
 * @property string|null $kd_pengirim
 * @property string|null $nama_pengirim
 * @property int|null $id_pekerjaan1
 * @property int|null $id_pekerjaan2
 * @property int|null $id_pekerjaan3
 * @property int|null $id_petugas
 */
class Pendaftaranorderlab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran.order_lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_order', 'id_pekerjaan1', 'id_pekerjaan2', 'id_pekerjaan3', 'id_petugas'], 'default', 'value' => null],
            [['no_order', 'id_pekerjaan1', 'id_pekerjaan2', 'id_pekerjaan3', 'id_petugas'], 'integer'],
            [['kd_pengirim'], 'string', 'max' => 1],
            [['nama_pengirim'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Order',
            'no_order' => 'No Order',
            'kd_pengirim' => 'Kd Pengirim',
            'nama_pengirim' => 'Nama Pengirim',
            'id_pekerjaan1' => 'Id Pekerjaan 1',
            'id_pekerjaan2' => 'Id Pekerjaan 2',
            'id_pekerjaan3' => 'Id Pekerjaan 3',
            'id_petugas' => 'Id Petugas',
        ];
    }
}
