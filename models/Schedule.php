<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property integer $idclassroom
 * @property string $start
 * @property string $end
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idclassroom'], 'required'],
            [['idclassroom'], 'integer'],
            [['start', 'end'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idclassroom' => 'Idclassroom',
            'start' => 'Start',
            'end' => 'End',
        ];
    }
}
