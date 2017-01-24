<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "monthinfo".
 *
 * @property integer $id
 * @property string $month
 * @property string $mtitle
 * @property string $mkeywords
 * @property string $mdesc
 * @property string $month_data
 */
class Monthinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'monthinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['month', 'mtitle', 'mkeywords', 'mdesc', 'month_data'], 'required'],
            [['mkeywords', 'mdesc', 'month_data'], 'string'],
            [['month', 'mtitle'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'month' => 'Month',
            'mtitle' => 'Meta title',
            'mkeywords' => 'Meta keywords',
            'mdesc' => 'Meta desc',
            'month_data' => 'Panchamgam Data',
        ];
    }
}
