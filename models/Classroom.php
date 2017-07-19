<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classroom".
 *
 * @property integer $id
 * @property string $name
 * @property string $days
 * @property integer $idroom
 */
class Classroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['days'], 'string'],
            [['idroom'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'days' => 'Days',
            'idroom' => 'Sala',
        ];
    }
}
