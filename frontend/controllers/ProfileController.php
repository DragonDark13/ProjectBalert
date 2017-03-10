<?php
/**
 * Created by PhpStorm.
 * User: naro
 * Date: 3/3/17
 * Time: 5:50 PM
 */

namespace frontend\controllers;

use common\models\User;
use frontend\models\StatisticsForm;
use frontend\models\UserStatistics;
use yii\base\Module;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

class ProfileController extends Controller
{
    /*
     * Current user object.
     */
    private $_user;

    /**
     * Statistics form model object
     */
    private $_statisticsFormModel;


    public function __construct($id, Module $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        if ($this->_statisticsFormModel == null) {
            $this->_statisticsFormModel = new StatisticsForm();
        }
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'saveStatistic'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className()
            ],
        ];
    }

    /**
     * Displays profile.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $user = $this->_getUser();

        return $this->render('index',[
                'user' => $user,
                'statistics' => $this->_calculateStatistic($user),
                'statisticsForm' => $this->_statisticsFormModel
            ]
        );
    }

    public function actionSaveStatistic()
    {
        $user = $this->_getUser();
        
        if ($this->_statisticsFormModel->load(\Yii::$app->request->post())) {
            if ($this->_statisticsFormModel->save()) {
                $this->goBack();
            }
        }
        return $this->render('index',[
                'user' => $user,
                'statistics' => $this->_calculateStatistic($user),
                'statisticsForm' => $this->_statisticsFormModel
            ]
        );
    }

    /**
     * Return current user with statistics data.
     *
     * @return User|null
     */
    private function _getUser()
    {
        if ($this->_user === null) {
            $user = new User();
            $this->_user = $user->getUserInfo();
        }
        return $this->_user;
    }

    /**
     * @param $array
     *
     * @return mixed
     */
    protected function _trim($array)
    {
        $unusedKeys = ['id', 'user_id', 'created_at'];

        foreach ($array as $key => $value) {
            if (in_array($key, $unusedKeys)) {
                unset($array[$key]);
            }
        }

        return $array;
    }

    /**
     * Return an array of calculated statistic by user.
     *
     * @param $userData
     *
     * @return array|mixed
     */
    protected function _calculateStatistic($userData)
    {
        $statistics = [];
        $statisticData = $userData['userStatistics'];
        $count = count($statisticData);
        if ($count) {
            foreach ($statisticData as $key => $subArray) {
                if (!count($statistics)) {
                    $statistics = $this->_trim($subArray);
                }
                foreach ($this->_trim($subArray) as $id => $value) {
                    $statistics[$id] += $value;
                }
            }
            $labels = $this->_statisticsFormModel->attributeLabels();
            $calculatedStatistics = [];
            foreach ($statistics as $key => $value) {
                $calculatedStatistics[$labels[$key]] = round(($value/$count) * 100);
            }
            return $this->_addDateInfo($statisticData, $calculatedStatistics);
        }
        return $statistics;
    }

    /**
     * Add date info to user statistics.
     *
     * @param $statisticData
     * @param $calculatedStatistics
     *
     * @return array
     */
    protected function _addDateInfo($statisticData, $calculatedStatistics)
    {
        ArrayHelper::multisort($statisticData,'created_at');
        $from = current($statisticData);
        $to = end($statisticData);
        $dateInfo = [
            'date_info' => [
                'from' => date('d-m-Y',$from['created_at']),
                'to' => date('d-m-Y',$to['created_at'])
            ]
        ];
        return array_merge($calculatedStatistics, $dateInfo);
    }
}