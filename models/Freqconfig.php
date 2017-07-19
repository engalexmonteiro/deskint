<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "freqconfig".
 *
 * @property integer $id
 * @property integer $checkin
 * @property integer $timecheckin
 * @property integer $timecheckout
 * @property integer $timecheckintoclose
 * @property integer $tolerance
 * @property integer $idclassroom
 */
class Freqconfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'freqconfig';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['checkin', 'timecheckin', 'timecheckout', 'timecheckintoclose', 'tolerance'], 'required'],
            [['checkin', 'timecheckin', 'timecheckout', 'timecheckintoclose', 'tolerance', 'idclassroom'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'checkin' => 'Checkin',
            'timecheckin' => 'Timecheckin',
            'timecheckout' => 'Timecheckout',
            'timecheckintoclose' => 'Timecheckintoclose',
            'tolerance' => 'Tolerance',
            'idclassroom' => 'Idclassroom',
        ];
    }
}
