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
use frontend\models\Profile;
use frontend\models\ProfileCompany;
use frontend\models\User;
use frontend\models\Selection;

/**
 * Site controller
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
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
    public function actionIndex()
    {

    $model = Profile::find()->where(['id'=> Yii::$app->user->id])->with('user.selection')->one();
    print_r($model);

        return $this->render('index', compact('model'));
    }

      public function actionSettings()
    {
          $selection = Selection::find()->where(['id'=> Yii::$app->user->id])->one();
        if ($selection->status == 1){
            $model = Profile::find()->where(['id'=> Yii::$app->user->id])->with('user.selection')->one();
        if(empty($model)){
            $model = new Profile();

        }
        }
        else {
            $model = ProfileCompany::find()->where(['id'=> Yii::$app->user->id])->with('user.selection')->one();
        if(empty($model)){
            $model = new ProfileCompany();

        }
        }
        
        if($model->load(Yii::$app->request->post()) &&  $model->save());
         
        return $this->renderAjax('settings', compact('selection', 'model'));
     
    }



}
