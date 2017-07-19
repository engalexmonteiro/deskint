<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "frequence".
 *
 * @property integer $id
 * @property integer $iduser
 * @property string $date
 * @property string $hour
 * @property integer $delay
 * @property integer $idclass
 */
class Frequence extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'frequence';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iduser', 'delay'], 'required'],
            [['iduser', 'delay', 'idclass'], 'integer'],
            [['date', 'hour'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iduser' => 'Iduser',
            'date' => 'Date',
            'hour' => 'Hour',
            'delay' => 'Delay',
            'idclass' => 'Idclass',
        ];
    }
}
