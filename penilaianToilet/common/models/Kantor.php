<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kantor".
 *
 * @property int $id_kantor
 * @property string $kantor_city
 * @property string $kantor_code
 * @property string $kantor_name
 * @property string $gedung
 * @property int $id_daop
 *
 * @property Jadwal[] $jadwals
 * @property Daop $daop
 * @property Rekap[] $rekaps
 * @property Toilet[] $toilets
 */
class Kantor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kantor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kantor_city', 'kantor_code', 'kantor_name', 'gedung', 'id_daop'], 'required'],
            [['id_daop'], 'integer'],
            [['kantor_city', 'kantor_code', 'kantor_name', 'gedung'], 'string', 'max' => 50],
            [['id_daop'], 'exist', 'skipOnError' => true, 'targetClass' => Daop::className(), 'targetAttribute' => ['id_daop' => 'id_daop']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kantor' => 'Id Kantor',
            'kantor_city' => 'Kantor City',
            'kantor_code' => 'Kantor Code',
            'kantor_name' => 'Kantor Name',
            'gedung' => 'Gedung',
            'Daop' => 'Daop',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::className(), ['id_kantor' => 'id_kantor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDaop()
    {
        return $this->hasOne(Daop::className(), ['id_daop' => 'id_daop']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekaps()
    {
        return $this->hasMany(Rekap::className(), ['id_kantor' => 'id_kantor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToilets()
    {
        return $this->hasMany(Toilet::className(), ['id_kantor' => 'id_kantor']);
    }
}
