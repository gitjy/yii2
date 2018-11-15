<?php

namespace console\controllers;

use common\models\User;

class InitController extends \yii\console\Controller
{
    public function actionUser()
    {
        echo "Create init user ...\n";
        $username = $this->prompt('Input userName:');
        $email = $this->prompt('Input Email for $username:');
        $password = $this->prompt('Input password for $username:');


        $model = new User();
        $model->username = $username;
        $model->email = $email;
        $model->password = $password;
        $model->auth_key = '';

        if (!$model->save()) {
            foreach ($model->getErrors() as $errors) {
                foreach ($errors as $e) {
                    echo "$e\n";
                }
            }
            return 1;
        }
        return 0;
    }

}
