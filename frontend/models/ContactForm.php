<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\ProfileUsers;
use frontend\models\Cat;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;
    public $phone;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body','phone'], 'required'],
            [['phone'], 'string', 'max' => 50],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'body' => 'Message',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom('pranay548@gmail.com')
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
    public function Users()
    {
    return $authors = Cat::find()
    ->JoinWith('subs')
    ->all();
    }
}
