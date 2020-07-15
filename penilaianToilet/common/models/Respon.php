<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "respon".
 *
 * @property int $id_respon
 * @property string $nama_respon
 * @property string $gambar
 *
 * @property Ketidakpuasan[] $ketidakpuasans
 * @property Rekap[] $rekaps
 */
class Respon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'respon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_respon'], 'required'],
            [['gambar'], 'file','extensions'=>'jpg, jpeg, png', 'maxSize'=>1024 * 1024 * 1 ],
            [['nama_respon'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_respon' => 'Id Respon',
            'nama_respon' => 'Nama Respon',
            'gambar' => 'Gambar'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKetidakpuasans()
    {
        return $this->hasMany(Ketidakpuasan::className(), ['id_respon' => 'id_respon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRekaps()
    {
        return $this->hasMany(Rekap::className(), ['id_respon' => 'id_respon']);
    }
}
