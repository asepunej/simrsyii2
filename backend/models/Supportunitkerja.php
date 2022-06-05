<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support.unitkerja".
 *
 * @property string $kdunitkerja
 * @property string|null $unitkerja
 * @property string|null $pelayanan
 * @property string|null $pemeriksaanawal
 */
class Supportunitkerja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support.unitkerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdunitkerja'], 'required'],
            [['unitkerja'], 'string'],
            [['kdunitkerja'], 'string', 'max' => 2],
            [['pelayanan', 'pemeriksaanawal'], 'string', 'max' => 1],
            [['kdunitkerja'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kdunitkerja' => 'Kdunitkerja',
            'unitkerja' => 'Unitkerja',
            'pelayanan' => 'Pelayanan',
            'pemeriksaanawal' => 'Pemeriksaanawal',
        ];
    }
}
