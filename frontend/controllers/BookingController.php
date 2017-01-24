<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Bookings;

class BookingController extends \yii\web\Controller {
    
    
      public function actionIndex() {
          //echo "pranaydfdff"; 
          $user_bookings = new Bookings();
          $user_booking_history = Bookings::find()->where([ 'user_id' => Yii::$app->user->id ])->with()->all();
          //print_r($user_booking_history); exit;
          //$user_bookings->
          return $this->render('index',['user_list'=>$user_booking_history]);
          //return $this->render('login', ['model' => $model,            ]);
    
    }

}