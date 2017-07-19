<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property integer $idcard
 * @property string $login
 * @property string $name
 * @property string $password
 * @property string $email
 * @property string $profile
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcard'], 'required'],
            [['idcard'], 'integer'],
            [['profile'], 'string'],
            [['login', 'name', 'email'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idcard' => 'Idcard',
            'login' => 'Login',
            'name' => 'Name',
            'password' => 'Password',
            'email' => 'Email',
            'profile' => 'Profile',
        ];
    }
}
