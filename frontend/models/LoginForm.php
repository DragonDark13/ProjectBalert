<?php
namespace frontend\models;

use yii;
use common\models\MainLoginForm;

/**
 * Login form
 */
class LoginForm extends MainLoginForm
{

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'password' => 'Пароль'
        ];
    }
    
}
