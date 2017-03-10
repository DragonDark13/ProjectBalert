<?php

namespace frontend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "user_statistics".
 *
 * @property int $id
 * @property int $user_id
 * @property int $plan
 * @property int $action
 * @property int $learning
 * @property int $exercises
 * @property int $relaxing
 * @property int $thinking
 * @property string $created_at
 *
 * @property User $user
 */
class UserStatistics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_statistics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'plan', 'action', 'learning', 'exercises', 'relaxing', 'thinking'], 'integer'],
            [['created_at'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'plan' => 'Plan',
            'action' => 'Action',
            'learning' => 'Learning',
            'exercises' => 'Exercises',
            'relaxing' => 'Relaxing',
            'thinking' => 'Thinking',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
