<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.kecamatan".
 *
 * @property string $kdkecamatan
 * @property string $kdkabupaten
 * @property string $kecamatan
 */
class Supportkecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdkecamatan', 'kdkabupaten', 'kecamatan'], 'required'],
            [['kdkecamatan'], 'string', 'max' => 7],
            [['kdkabupaten'], 'string', 'max' => 4],
            [['kecamatan'], 'string', 'max' => 255],
            [['kdkecamatan'], 'unique'],
            [['kdkabupaten'], 'exist', 'skipOnError' => true, 'targetClass' => SupportKabupaten::className(), 'targetAttribute' => ['kdkabupaten' => 'kdkabupaten']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kdkecamatan' => 'Kdkecamatan',
            'kdkabupaten' => 'Kdkabupaten',
            'kecamatan' => 'Kecamatan',
        ];
    }
}
