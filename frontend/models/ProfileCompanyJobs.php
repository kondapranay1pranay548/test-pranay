<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profile_company_jobs".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $job_id
 * @property string $distance
 * @property string $extra_amount_received
 * @property integer $status
 * @property integer $created_at
 *
 * @property ProfileClientJobs $job
 * @property ProfileUsers $user
 */
class ProfileCompanyJobs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_company_jobs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'job_id', 'created_at'], 'required'],
            [['user_id', 'job_id', 'status', 'created_at'], 'integer'],
            [['distance', 'extra_amount_received'], 'number'],
            [['job_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProfileClientJobs::className(), 'targetAttribute' => ['job_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProfileUsers::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'job_id' => 'Job ID',
            'distance' => 'Distance',
            'extra_amount_received' => 'Extra Amount Received',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJob()
    {
        return $this->hasOne(ProfileClientJobs::className(), ['id' => 'job_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(ProfileUsers::className(), ['id' => 'user_id']);
    }
}
