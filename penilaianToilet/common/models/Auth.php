<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auth".
 *
 * @property int $id_auth
 * @property string $role
 * @property string $nama
 *
 * @property Userlogin[] $userlogins
 */
class Auth extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auth';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role', 'nama'], 'required'],
            [['role'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_auth' => 'Id Auth',
            'role' => 'Role',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserlogins()
    {
        return $this->hasMany(Userlogin::className(), ['id_auth' => 'id_auth']);
    }
}
