<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\db\ActiveRecord;
use frontend\models\ProfileUsers;
use frontend\models\Cat;
use frontend\models\CatSearch;
use frontend\models\MasterPoojalu;
/**
 * Site controller
 */
class DetailController extends Controller {
    
      /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'tech','create'],
                'rules' => [
                    [
                        'actions' => ['signup', 'tech'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout','create'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    
     public function actionIndex() {
        return $this->render('index');
    }
    
    public function actionServiceView()
    {
        echo "dfdsf";
            
    }
}