<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "daop".
 *
 * @property int $id_daop
 * @property string $nama
 * @property string $singkatan
 *
 * @property Jadwal[] $jadwals
 * @property Kantor[] $kantors
 * @property Rekap[] $rekaps
 * @property Station[] $stations
 */
class Daop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'daop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'singkatan'], 'required'],
            [['nama', 'singkatan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_daop' => 'Id Daop',
            'nama' => 'Nama',
            'singkatan' => 'Singkatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::className(), ['id_daop' => 'id_daop']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKantors()
    {
        return $this->hasMany(Kantor::className(), ['id_daop' => 'id_daop']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekaps()
    {
        return $this->hasMany(Rekap::className(), ['id_daop' => 'id_daop']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStations()
    {
        return $this->hasMany(Station::className(), ['id_daop' => 'id_daop']);
    }
}
