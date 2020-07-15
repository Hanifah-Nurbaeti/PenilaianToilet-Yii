<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kereta".
 *
 * @property int $id_kereta
 * @property string $kereta_code
 * @property string $kereta_name
 * @property string $gerbong
 * @property int $id_station
 *
 * @property Jadwal[] $jadwals
 * @property Station $station
 * @property Rekap[] $rekaps
 * @property Toilet[] $toilets
 */
class Kereta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kereta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kereta_code', 'kereta_name', 'gerbong', 'id_station'], 'required'],
            [['id_station'], 'integer'],
            [['kereta_code', 'kereta_name', 'gerbong'], 'string', 'max' => 50],
            [['id_station'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['id_station' => 'id_station']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kereta' => 'Id Kereta',
            'kereta_code' => 'Kereta Code',
            'kereta_name' => 'Kereta Name',
            'gerbong' => 'Gerbong',
            'id_station' => 'Id Station',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::className(), ['id_kereta' => 'id_kereta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStation()
    {
        return $this->hasOne(Station::className(), ['id_station' => 'id_station']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekaps()
    {
        return $this->hasMany(Rekap::className(), ['id_kereta' => 'id_kereta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToilets()
    {
        return $this->hasMany(Toilet::className(), ['id_kereta' => 'id_kereta']);
    }
}
