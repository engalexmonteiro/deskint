<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "controls".
 *
 * @property integer $id
 * @property integer $iddevice
 * @property string $command
 * @property string $ircode
 */
class Controls extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'controls';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iddevice', 'command', 'ircode'], 'required'],
            [['iddevice'], 'integer'],
            [['command'], 'string', 'max' => 100],
            [['ircode'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iddevice' => 'Iddevice',
            'command' => 'Command',
            'ircode' => 'Ircode',
        ];
    }
}
