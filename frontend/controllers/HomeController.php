<?php
namespace frontend\controllers;

use yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\LoginForm;
use frontend\models\SignupForm;

/**
 * Site controller
 */
class HomeController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup', 'login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
        $loginFormModel  = new LoginForm();
        $signupFormModel = new SignupForm();
        return $this->render(
            'index', 
            [
                'login' => $loginFormModel,
                'signup' => $signupFormModel
            ]
        );
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $loginFormModel  = new LoginForm();
        $signupFormModel = new SignupForm();
        if ($loginFormModel->load(Yii::$app->request->post()) && $loginFormModel->login()) {
            return 1;
        } else {
            return $this->render('index', [
                'login' => $loginFormModel,
                'signup' => $signupFormModel
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $loginFormModel  = new LoginForm();
        $signupFormModel = new SignupForm();
        if ($signupFormModel->load(Yii::$app->request->post())) {
            if ($user = $signupFormModel->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('index', [
            'login' => $loginFormModel,
            'signup' => $signupFormModel,
            'signupFailed' => true
        ]);
    }
}
