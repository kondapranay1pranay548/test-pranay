<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bookings".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $master_pooja_id
 * @property integer $sub_pooja`_id
 * @property string $date_time
 */
class Bookings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bookings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'master_pooja_id', 'sub_pooja_id','name','email','phone'], 'required'],
            [['user_id', 'master_pooja_id', 'sub_pooja_id'], 'integer'],
            [['date_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'master_pooja_id' => 'Master Pooja ID',
            'sub_pooja`_id' => 'Sub Pooja` ID',
            'date_time' => 'Date Time',
        ];
    }
}
