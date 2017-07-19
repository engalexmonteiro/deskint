<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "desks".
 *
 * @property integer $id
 * @property integer $idroom
 * @property string $ip_address
 * @property integer $ip_addressv6
 */
class Desks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'desks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idroom', 'ip_addressv6'], 'integer'],
            [['ip_address'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idroom' => 'Room',
            'ip_address' => 'IP Address',
            'ip_addressv6' => 'IP Address v6',
        ];
    }
}
