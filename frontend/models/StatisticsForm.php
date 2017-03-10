<?php
namespace frontend\models;

use yii;
use yii\base\Model;

/**
 * Login form
 */
class StatisticsForm extends Model
{

    public $plan;
    public $action;
    public $learning;
    public $exercises;
    public $relaxing;
    public $thinking;


    /**
    * @inheritdoc
    */
    public function attributeLabels()
    {
        return [
            'plan' => 'План',
            'action' => 'Действие',
            'learning' => 'Обучение',
            'exercises' => 'Физическая нагрузка',
            'relaxing' => 'Отдых',
            'thinking' => 'Позитивное мышление'
        ];
    }

}
