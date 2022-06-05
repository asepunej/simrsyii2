<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.desa".
 *
 * @property string $kddesa
 * @property string $kdkecamatan
 * @property string $desa
 */
class Supportdesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kddesa', 'kdkecamatan', 'desa'], 'required'],
            [['kddesa'], 'string', 'max' => 10],
            [['kdkecamatan'], 'string', 'max' => 7],
            [['desa'], 'string', 'max' => 255],
            [['kddesa'], 'unique'],
            [['kdkecamatan'], 'exist', 'skipOnError' => true, 'targetClass' => SupportKecamatan::className(), 'targetAttribute' => ['kdkecamatan' => 'kdkecamatan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kddesa' => 'Kddesa',
            'kdkecamatan' => 'Kdkecamatan',
            'desa' => 'Desa',
        ];
    }
}
