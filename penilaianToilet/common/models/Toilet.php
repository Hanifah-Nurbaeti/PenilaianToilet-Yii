<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "toilet".
 *
 * @property int $id_toilet
 * @property string $nama
 * @property int $id_kantor
 * @property int $id_station
 * @property int $id_kereta
 *
 * @property Jadwal[] $jadwals
 * @property Rekap[] $rekaps
 * @property Kantor $kantor
 * @property Kereta $kereta
 * @property Station $station
 */
class Toilet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toilet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_toilet'], 'required'],
            [['id_kantor', 'id_station', 'id_kereta'], 'integer'],
            [['nama_toilet'], 'string', 'max' => 50],
            [['id_kantor'], 'exist', 'skipOnError' => true, 'targetClass' => Kantor::className(), 'targetAttribute' => ['id_kantor' => 'id_kantor']],
            [['id_kereta'], 'exist', 'skipOnError' => true, 'targetClass' => Kereta::className(), 'targetAttribute' => ['id_kereta' => 'id_kereta']],
            [['id_station'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['id_station' => 'id_station']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_toilet' => 'Id Toilet',
            'nama_toilet' => 'Nama Toilet',
            'id_kantor' => 'Id Kantor',
            'id_station' => 'Id Station',
            'id_kereta' => 'Id Kereta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::className(), ['id_toilet' => 'id_toilet']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekaps()
    {
        return $this->hasMany(Rekap::className(), ['id_toilet' => 'id_toilet']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKantor()
    {
        return $this->hasOne(Kantor::className(), ['id_kantor' => 'id_kantor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKereta()
    {
        return $this->hasOne(Kereta::className(), ['id_kereta' => 'id_kereta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStation()
    {
        return $this->hasOne(Station::className(), ['id_station' => 'id_station']);
    }
}
