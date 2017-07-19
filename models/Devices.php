<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "devices".
 *
 * @property integer $id
 * @property integer $iddesk
 * @property string $name
 * @property string $mark
 * @property string $model
 */
class Devices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'devices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iddesk'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['mark', 'model'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iddesk' => 'Iddesk',
            'name' => 'Name',
            'mark' => 'Mark',
            'model' => 'Model',
        ];
    }
}
