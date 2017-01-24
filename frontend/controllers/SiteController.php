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
use frontend\models\SubPoojalu;
use frontend\models\BookingForm;
use frontend\models\Bookings;
use yii\web\NotFoundHttpException;
use darkunz\yii2sms\Twilio; 

/**
 * Site controller
 */
class SiteController extends Controller {

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

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $parent_services = MasterPoojalu::find()->with('subPoojalus','subPoojalus.remedialPujas')->all();
        return $this->render('index',['parent_services'=>$parent_services]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

    
    public function actionCreate()
    {
        $model = new Cat();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionPanditServicesInHyderabad()
    {   
        $model = new MasterPoojalu();
        $master = MasterPoojalu::find()->with('subPoojalus','subPoojalus.remedialPujas')->all();
        //print_r($master);
        return $this->render('show', [
                'model' => $master,'main_end' => MasterPoojalu::findAll(['id' => 1])
            ]);
    }
    
    public function actionSubServices($service)
    {
        //echo "sdfsdf".$service; exit;
        $model = new MasterPoojalu();
        if($master = MasterPoojalu::find()->where(['puja_name' => $service])->with('subPoojalus','subPoojalus.remedialPujas')->all())
        {
        return $this->render('sub_services', [
                'model' => $master
            ]); 
        //echo "df"; exit;
        }else
        {
           throw new \yii\web\HttpException(404, 'Not Found');
        }
            
    }
    
    public function actionServiceView($final_service,$slug)
    {
        $pooja_name = $final_service . '-' . $slug;
        $model = new SubPoojalu();
        $details = SubPoojalu::find()->where(['puja_name' => $pooja_name])->all();
        return $this->render('detail_view', [
                'model' => $details
            ]);
            
    }
    
    public function actionBookNow($booking_pooja="",$slug="")
    {
        
        $booking_pooja = $booking_pooja . '-' . $slug;
        if($booking_pooja == 'custome-booking' || SubPoojalu::find()->where(['puja_name' => $booking_pooja ])->one()) 
        {
        $model = new BookingForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {   
            if ($model->CreateBooking()) {
                Yii::$app->session->setFlash('success', 'Thank you for Boooking . We will respond to you as soon as possible.');
                Yii::$app->sms->send('+919030493148','Sucessfully placed your pandith booking','');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error please contact admin.');
            }

            return $this->refresh();
        } else {
            return $this->render('booking', [
                        'model' => $model,'booking_pooja_name' => $booking_pooja
            ]);
        }
            
       }else
       {
           throw new NotFoundHttpException;
       }
    }
    public function actionSm()
    {
    if (!Yii::$app->request->isAjax) {
            $msg = 'Error occured. You are accessing this function illegally.';
            throw new BadRequestHttpException($msg);
        }
    $model = new SubPoojalu();    
    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    $postData = Yii::$app->request->post();
    if (isset($postData['depdrop_parents'])) {
                    $id = end($postData['depdrop_parents']);
    }
    
    $list = $model->find()->select(['id','puja_name'])->where(['master_id' =>$id])->asArray()->all();   
    $selected="";
    foreach ($list as $i => $account) {
                    $temp[] = ['id' => $account['id'], 'name' => $account['puja_name']];
                }
                $out = ['output' => $temp, 'selected' => $selected];
                return $out;
        }
    public function actionServicesAjax()
    {
        
    $model = new MasterPoojalu();    
    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    
    $list = $model->find()->select(['id','puja_name'])->asArray()->all();   
    $selected="";
    foreach ($list as $i => $account) {
                    $temp[] = ['id' => $account['id'], 'name' => $account['puja_name']];
                }
                $out = ['output' => $temp, 'selected' => $selected];
                return $out;
    }
    
    public function actionAstrologyServices()
    {
    
        
     echo "pranay";  
     // return Yii::$app->sms->send('+919030493148','Hi what r u doing','');




    }

}
