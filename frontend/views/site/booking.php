<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use kartik\datetime\DateTimePicker;
use frontend\models\MasterPoojalu;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use yii\web\JsExpression;
use dosamigos\ckeditor\CKEditor;
use dosamigos\tinymce\TinyMce;
use kartik\markdown\MarkdownEditor;

$this->title = 'Booking';
$this->params['breadcrumbs'][] = $this->title;

    if (!Yii::$app->user->isGuest) {
        $name_array = ['autofocus' => true,'readonly' => true];
        $email_array =['placeholder' => 'Email' , 'readonly' => true]; 
        $phone_array = ['placeholder' => 'Mobile number (10 digits)', 'maxlength' => 10,'readonly' => true];
    }else {
            $name_array = ['autofocus' => true];
            $email_array =['placeholder' => 'Email']; 
            $phone_array = ['placeholder' => 'Mobile number (10 digits)', 'maxlength' => 10];
         }
         
       
?>
<div class="site-contact" style="margin-left:100px;">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?php if (!Yii::$app->user->isGuest) { $model->name = Yii::$app->user->identity->username; } ?>
                
            <?php
//                $form->field($model, 'name')->widget(TinyMce::className(), [
//                'options' => ['rows' => 6,'coloumns' => 50],               
//                'clientOptions' => [
//        //                     'plugins' => [
//        //            "advlist autolink lists link charmap print preview anchor",
//        //            "searchreplace visualblocks code fullscreen",
//        //            "insertdatetime media table contextmenu paste"
//        //        ],
//                    'menubar' => false,
//                    'content_css' => ['mycontent.css', 'mycontent2.css'],
//                    'toolbar' => "undo redo | styleselect | bold italic quicklink h2 h3 blockquote| alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
//                ]
//            ]);
            ?>
                <?= $form->field($model, 'name')->textInput(['calss' => 'form-control']) ?>
                <?php //$form->field($model, 'name')->textInput($name_array);  ?>
                
                <?php if (!Yii::$app->user->isGuest) { $model->email = Yii::$app->user->identity->email; } ?>
                <?= $form->field($model, 'email')->textInput($email_array);  ?>
                
                <?php if (!Yii::$app->user->isGuest) { $model->phone = Yii::$app->user->identity->phone; }   ?>
                <?php echo $form->field($model, 'phone')->textInput($phone_array);   ?>
                
                <?php if (!Yii::$app->user->isGuest) { $model->user_id = Yii::$app->user->id;  ?> 
                <?php echo   $form->field($model, 'user_id')->hiddenInput()->label(false); } else { echo $form->field($model, 'user_id')->hiddenInput(['value' => 2])->label(false); }  ?> 
                
            <?php
                
                //print_r($sevice_init);
                if($booking_pooja_name == "custome-booking")
                {
                    $listData = MasterPoojalu::find()->select(['id',"puja_name"])->asArray()->all();
                    $data = ArrayHelper::map($listData, 'id', 'puja_name');

                    echo $form->field($model, 'master_pooja_id')->widget(Select2::classname(), [
                        //'initValueText' => $sevice_init,
                        'data' => $data, 
                        'options' => ['placeholder' => 'Select a service'],

                    ]);
                    
                    echo $form->field($model, 'sub_pooja_id')->widget(DepDrop::classname(), [
                        'type' => DepDrop::TYPE_SELECT2,
                        //'select2Options' => ['size' => Select2::SMALL, 'pluginOptions' => ['allowClear' => false]],/
                        'pluginOptions' => [
                            'initialize' =>  true ,
                            'depends' => ['bookingform-master_pooja_id'],
                            'placeholder' => 'pooja*',
                            'url' => Url::to(['site/sm']),
                            'loadingText' => 'Pooja ...',
                        ]
                    ])->hint('<small></small>');
                }else 
                {
                    $data =  ArrayHelper::map(frontend\models\SubPoojalu::find()->where(['puja_name' => $booking_pooja_name ])->asArray()->all(), 'id', 'puja_name');
                    
                    $mainservice_data =  frontend\models\SubPoojalu::find()->where(['puja_name' => $booking_pooja_name ])->one();//$mainservice_data = [''];
                    
                    $mainservice_data_list = [$mainservice_data->master->id => $mainservice_data->master->puja_name];
                    //echo  "<pre>"; print_r($mainservice_data);
                    
                    echo $form->field($model, 'master_pooja_id')->widget(Select2::classname(), [
                         //'initValueText' => $sevice_init,
                         'data' => $mainservice_data_list, 
                         'options' => [],

                     ]); 
                    
                    echo $form->field($model, 'sub_pooja_id')->widget(Select2::classname(), [
                        //'initValueText' => $sevice_init,
                        'data' => $data, 
                        'options' => [],

                    ]);
                   
                }
                
            ?>
                <?php
                echo $form->field($model, 'date_time')->widget(DateTimePicker::classname(), [
                    'options' => ['placeholder' => 'Enter event time ...'],
                    
                    'pluginOptions' => [
                        'autoclose' => true,
                        'startDate' => date('Y-m-d'),
                        ]
                ]);
                ?>
                
                <?php //$form->field($model, 'name')->widget(CKEditor::className(), [
//        'options' => ['rows' => 6],
//        'preset' => 'basic'
//    ]) ?>
             
                        
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                
                
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
                <?php // $file="frontend\assets\aftermarket-car-parts.jpg"; Yii::$app->response->xSendFile($file); ?>
            
            
            
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
