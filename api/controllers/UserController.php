<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2018/11/9
 * Time: 上午12:32
 */

namespace api\controllers;


class UserController extends \yii\rest\ActiveController
{
    public $modelClass = 'common\models\user';
}