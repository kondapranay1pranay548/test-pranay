<?php

namespace frontend\models;
use frontend\models\ProfileUsers;

use Yii;


/**
 * This is the model class for table "profile_users".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $password_reset_token
 * @property string $account_activation_token
 * @property integer $activation_code
 * @property string $email
 * @property string $auth_key
 * @property integer $role
 * @property integer $status
 * @property integer $policy_agreed
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property ProfileClientCars[] $profileClientCars
 * @property ProfileClientJobs[] $profileClientJobs
 * @property ProfileClients[] $profileClients
 * @property ProfileCompanies[] $profileCompanies
 * @property ProfileCompanyExcludedCars[] $profileCompanyExcludedCars
 * @property ProfileCompanyJobs[] $profileCompanyJobs
 * @property ProfileCompanyReviews[] $profileCompanyReviews
 * @property ProfileCompanyReviews[] $profileCompanyReviews0
 * @property ProfileCompanyServices[] $profileCompanyServices
 * @property ProfileCompanyStats[] $profileCompanyStats
 * @property ProfileJobBids[] $profileJobBids
 * @property ProfileJobBids[] $profileJobBids0
 * @property ProfileJobSchedules[] $profileJobSchedules
 * @property ProfileJobSchedules[] $profileJobSchedules0
 * @property ProfileMessages[] $profileMessages
 * @property ProfileMessages[] $profileMessages0
 * @property ProfilePremiumCompanies[] $profilePremiumCompanies
 * @property ProfileUserCommissionDetails[] $profileUserCommissionDetails
 * @property ProfileUserContacts[] $profileUserContacts
 * @property ProfileUserSocialLinks[] $profileUserSocialLinks
 */
class ProfileUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'auth_key', 'created_at', 'updated_at'], 'required'],
            [['activation_code', 'role', 'status', 'policy_agreed', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password', 'password_reset_token', 'account_activation_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'account_activation_token' => 'Account Activation Token',
            'activation_code' => 'Activation Code',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'role' => 'Role',
            'status' => 'Status',
            'policy_agreed' => 'Policy Agreed',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileClientCars()
    {
        return $this->hasMany(ProfileClientCars::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileClientJobs()
    {
        return $this->hasMany(ProfileClientJobs::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileClients()
    {
        return $this->hasMany(ProfileClients::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileCompanies()
    {
        return $this->hasMany(ProfileCompanies::className(), ['agent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileCompanyExcludedCars()
    {
        return $this->hasMany(ProfileCompanyExcludedCars::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileCompanyJobs()
    {
        return $this->hasMany(ProfileCompanyJobs::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileCompanyReviews()
    {
        return $this->hasMany(ProfileCompanyReviews::className(), ['review_for' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileCompanyReviews0()
    {
        return $this->hasMany(ProfileCompanyReviews::className(), ['review_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileCompanyServices()
    {
        return $this->hasMany(ProfileCompanyServices::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileCompanyStats()
    {
        return $this->hasMany(ProfileCompanyStats::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileJobBids()
    {
        return $this->hasMany(ProfileJobBids::className(), ['job_created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileJobBids0()
    {
        return $this->hasMany(ProfileJobBids::className(), ['job_bid_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileJobSchedules()
    {
        return $this->hasMany(ProfileJobSchedules::className(), ['client_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileJobSchedules0()
    {
        return $this->hasMany(ProfileJobSchedules::className(), ['company_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileMessages()
    {
        return $this->hasMany(ProfileMessages::className(), ['from_user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileMessages0()
    {
        return $this->hasMany(ProfileMessages::className(), ['to_user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfilePremiumCompanies()
    {
        return $this->hasMany(ProfilePremiumCompanies::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileUserCommissionDetails()
    {
        return $this->hasMany(ProfileUserCommissionDetails::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileUserContacts()
    {
        return $this->hasMany(ProfileUserContacts::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfileUserSocialLinks()
    {
        return $this->hasMany(ProfileUserSocialLinks::className(), ['user_id' => 'id']);
    }
    
	
}
