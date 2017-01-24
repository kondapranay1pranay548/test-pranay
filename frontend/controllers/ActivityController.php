<?php

namespace frontend\controllers;
use frontend\models\Livedarshan;

use Yii;
use frontend\models\Bookings;

class ActivityController extends \yii\web\Controller {
    
    
      public function actionIndex() {
          //echo "pranaydfdff"; 
          $user_bookings = new Bookings();
          $user_booking_history = Bookings::find()->where([ 'user_id' => Yii::$app->user->id ])->with()->all();
          //print_r($user_booking_history); exit;
          //$user_bookings->
          return $this->render('index',['user_list'=>$user_booking_history]);
          //return $this->render('login', ['model' => $model,            ]);
    
    }
    
    public function actionAstrologyServices()
    {   
     return $this->render('astrology',[]);  
    }
    
    public function actionMuhurtamFixing()
    {   
     return $this->render('muhurtam',[]);  
    }
    public function actionCateringServices()
    {   
     return $this->render('catering',[]);  
    }
    public function actionEpujaService()
    {   
     return $this->render('epuja',[]);  
    }
    
    public function actionLiveDarshan()
    {   
     $livedarshan = new Livedarshan();   
     $details = Livedarshan::find()->all();
     return $this->render('live_darshan',['model'=>$details]);  
    }
    
    public function actionOurPandits()
    {   
     return $this->render('our_pandits',[]);  
    }
    
    public function actionAstothara()
    {   
     return $this->render('astothara',[]);  
    }
    
    public function actionPanditRegistration()
    {   
     return $this->render('pandit_register',[]);  
    }
    
    
    
    
    

}