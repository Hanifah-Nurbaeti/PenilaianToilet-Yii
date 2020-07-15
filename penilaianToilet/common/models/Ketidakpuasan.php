<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ketidakpuasan".
 *
 * @property int $id_ketidakpuasan
 * @property string $nama_ketidakpuasan
 * @property string $gambar
 * @property int $id_respon
 *
 * @property Respon $respon
 * @property Rekap[] $rekaps
 */
class Ketidakpuasan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ketidakpuasan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_ketidakpuasan', 'gambar', 'id_respon'], 'required'],
            [['gambar'], 'file','extensions'=>'jpg, jpeg, png', 'maxSize'=>1024 * 1024 * 1 ],
            [['id_respon'], 'integer'],
            [['nama_ketidakpuasan'], 'string', 'max' => 100],
            [['id_respon'], 'exist', 'skipOnError' => true, 'targetClass' => Respon::className(), 'targetAttribute' => ['id_respon' => 'id_respon']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ketidakpuasan' => 'Id Ketidakpuasan',
            'nama_ketidakpuasan' => 'Nama Ketidakpuasan',
            'gambar' => 'Gambar',
            'id_respon' => 'Id Respon',
        ];
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
    public function getRekaps()
    {
        return $this->hasMany(Rekap::className(), ['id_ketidakpuasan' => 'id_ketidakpuasan']);
    }
}
