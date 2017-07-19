<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property integer $id
 * @property string $name
 * @property string $setor
 * @property integer $floor
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['floor'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['setor'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'setor' => 'Setor',
            'floor' => 'Floor',
        ];
    }
}
