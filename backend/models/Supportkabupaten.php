<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.kabupaten".
 *
 * @property string $kdkabupaten
 * @property string $kdprovinsi
 * @property string $kabupaten
 */
class Supportkabupaten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.kabupaten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdkabupaten', 'kdprovinsi', 'kabupaten'], 'required'],
            [['kdkabupaten'], 'string', 'max' => 4],
            [['kdprovinsi'], 'string', 'max' => 2],
            [['kabupaten'], 'string', 'max' => 255],
            [['kdkabupaten'], 'unique'],
            [['kdprovinsi'], 'exist', 'skipOnError' => true, 'targetClass' => SupportProvinsi::className(), 'targetAttribute' => ['kdprovinsi' => 'kdprovinsi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kdkabupaten' => 'Kdkabupaten',
            'kdprovinsi' => 'Kdprovinsi',
            'kabupaten' => 'Kabupaten',
        ];
    }
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['kdkabupaten' => 'kdkabupaten']);
    }
}
