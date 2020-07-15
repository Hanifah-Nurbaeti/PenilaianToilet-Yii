<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $id_jadwal
 * @property string $hari
 * @property string $waktu_awal
 * @property string $waktu_akhir
 * @property int $id_toilet
 * @property int $id_kantor
 * @property int $id_station
 * @property int $id_kereta
 * @property int $id_daop
 *
 * @property Daop $daop
 * @property Kantor $kantor
 * @property Station $station
 * @property Kereta $kereta
 * @property Toilet $toilet
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','hari', 'waktu_awal', 'waktu_akhir', 'id_toilet','id_daop'], 'required'],
            [['waktu_awal', 'waktu_akhir'], 'safe'],
            [['id_toilet', 'id_kantor', 'id_station', 'id_kereta', 'id_daop','id'], 'integer'],
            [['hari'], 'string', 'max' => 10],
            [['id_daop'], 'exist', 'skipOnError' => true, 'targetClass' => Daop::className(), 'targetAttribute' => ['id_daop' => 'id_daop']],
            [['id_kantor'], 'exist', 'skipOnError' => true, 'targetClass' => Kantor::className(), 'targetAttribute' => ['id_kantor' => 'id_kantor']],
            [['id_station'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['id_station' => 'id_station']],
            [['id_kereta'], 'exist', 'skipOnError' => true, 'targetClass' => Kereta::className(), 'targetAttribute' => ['id_kereta' => 'id_kereta']],
            [['id_toilet'], 'exist', 'skipOnError' => true, 'targetClass' => Toilet::className(), 'targetAttribute' => ['id_toilet' => 'id_toilet']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal' => 'Id Jadwal',
            'id' => 'Nama',
            'hari' => 'Hari',
            'waktu_awal' => 'Waktu Awal',
            'waktu_akhir' => 'Waktu Akhir',
            'id_toilet' => 'Id Toilet',
            'id_kantor' => 'Id Kantor',
            'id_station' => 'Id Station',
            'id_kereta' => 'Id Kereta',
            'id_daop' => 'Id Daop',
        ];
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
    public function getKantor()
    {
        return $this->hasOne(Kantor::className(), ['id_kantor' => 'id_kantor']);
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
    public function getKereta()
    {
        return $this->hasOne(Kereta::className(), ['id_kereta' => 'id_kereta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToilet()
    {
        return $this->hasOne(Toilet::className(), ['id_toilet' => 'id_toilet']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
