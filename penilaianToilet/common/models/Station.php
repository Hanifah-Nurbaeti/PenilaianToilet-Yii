<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "station".
 *
 * @property int $id_station
 * @property string $station_code
 * @property string $station_name
 * @property string $station_city
 * @property int $id_daop
 *
 * @property Jadwal[] $jadwals
 * @property Rekap[] $rekaps
 * @property Daop $daop
 * @property Toilet[] $toilets
 */
class Station extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'station';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_code', 'station_name', 'station_city', 'id_daop'], 'required'],
            [['id_daop'], 'integer'],
            [['station_code', 'station_name', 'station_city'], 'string', 'max' => 50],
            [['id_daop'], 'exist', 'skipOnError' => true, 'targetClass' => Daop::className(), 'targetAttribute' => ['id_daop' => 'id_daop']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_station' => 'Id Station',
            'station_code' => 'Station Code',
            'station_name' => 'Station Name',
            'station_city' => 'Station City',
            'id_daop' => 'Id Daop',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::className(), ['id_station' => 'id_station']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekaps()
    {
        return $this->hasMany(Rekap::className(), ['id_station' => 'id_station']);
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
    public function getToilets()
    {
        return $this->hasMany(Toilet::className(), ['id_station' => 'id_station']);
    }
}
