<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rekap".
 *
 * @property int $id_rekap
 * @property string $created_at
 * @property string $created_by
 * @property string $bulan
 * @property string $tahun
 * @property int $id_daop
 * @property int $id_kantor
 * @property int $id_station
 * @property int $id_kereta
 * @property int $id_toilet
 * @property int $id_respon
 * @property int $id_ketidakpuasan
 *
 * @property Daop $daop
 * @property Kantor $kantor
 * @property Kereta $kereta
 * @property Station $station
 * @property Toilet $toilet
 * @property Respon $respon
 * @property Ketidakpuasan $ketidakpuasan
 */
class Rekap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'created_by', 'id_daop', 'id_kantor', 'id_station', 'id_kereta', 'id_toilet', 'id_respon', 'id_ketidakpuasan'], 'required'],
            [['created_at'], 'safe'],
            [['id_daop', 'id_kantor', 'id_station', 'id_kereta', 'id_toilet', 'id_respon', 'id_ketidakpuasan'], 'integer'],
            [['created_by'], 'string', 'max' => 50],
            [['bulan'], 'string', 'max' => 15],
            [['tahun'], 'string', 'max' => 11],
            [['tanggal'], 'string', 'max' => 11],
            [['id_daop'], 'exist', 'skipOnError' => true, 'targetClass' => Daop::className(), 'targetAttribute' => ['id_daop' => 'id_daop']],
            [['id_kantor'], 'exist', 'skipOnError' => true, 'targetClass' => Kantor::className(), 'targetAttribute' => ['id_kantor' => 'id_kantor']],
            [['id_kereta'], 'exist', 'skipOnError' => true, 'targetClass' => Kereta::className(), 'targetAttribute' => ['id_kereta' => 'id_kereta']],
            [['id_station'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['id_station' => 'id_station']],
            [['id_toilet'], 'exist', 'skipOnError' => true, 'targetClass' => Toilet::className(), 'targetAttribute' => ['id_toilet' => 'id_toilet']],
            [['id_respon'], 'exist', 'skipOnError' => true, 'targetClass' => Respon::className(), 'targetAttribute' => ['id_respon' => 'id_respon']],
            [['id_ketidakpuasan'], 'exist', 'skipOnError' => true, 'targetClass' => Ketidakpuasan::className(), 'targetAttribute' => ['id_ketidakpuasan' => 'id_ketidakpuasan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rekap' => 'Id Rekap',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'tanggal' => 'Tanggal',
            'id_daop' => 'Id Daop',
            'id_kantor' => 'Id Kantor',
            'id_station' => 'Id Station',
            'id_kereta' => 'Id Kereta',
            'id_toilet' => 'Id Toilet',
            'id_respon' => 'Id Respon',
            'id_ketidakpuasan' => 'Id Ketidakpuasan',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToilet()
    {
        return $this->hasOne(Toilet::className(), ['id_toilet' => 'id_toilet']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRespon()
    {
        return $this->hasOne(Respon::className(), ['id_respon' => 'id_respon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKetidakpuasan()
    {
        return $this->hasOne(Ketidakpuasan::className(), ['id_ketidakpuasan' => 'id_ketidakpuasan']);
    }
}
