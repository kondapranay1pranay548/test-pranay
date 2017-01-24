<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\ProfileUsers;
use frontend\models\Bookings;
//use frontend\models\Cat;

/**
 * ContactForm is the model behind the contact form.
 */
class BookingForm extends \yii\db\ActiveRecord
{
    public $name;
    public $email;
    public $verifyCode;
    public $phone;
    public $master_pooja_id;
    public $sub_pooja_id;
    public $user_id;
    public $date_time;
    
    
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name','email','phone','master_pooja_id','sub_pooja_id','date_time'], 'required'],
            [['phone'], 'string', 'max' => 50],
            // email has to be a valid email address
            ['email', 'email'],
            ['user_id','safe'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }
    
    public static function tableName()
    {
        return 'bookings';
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'master_pooja_id' => 'Category', 
            'sub_pooja_id'=>'puja name',
        ];
    }
    
    public function CreateBooking()
    {
        $booking = new Bookings();
        $booking->name = $this->name;
        $booking->email = $this->email;
        $booking->phone = $this->phone;
        $booking->master_pooja_id = $this->master_pooja_id;
        $booking->sub_pooja_id = $this->sub_pooja_id;
        $booking->user_id = $this->user_id;
        $booking->date_time = $this->date_time;
        return $booking->save();
    }

    
}



