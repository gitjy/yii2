<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2018/11/9
 * Time: 上午12:32
 */

namespace api\controllers;

use Yii;

class GoodsController extends \yii\rest\ActiveController
{
    public $modelClass = 'common\models\goods';

    public function actionDetail()
    {
        return "detail";
    }

    public function actionSearch($keyword){
        if(!$keyword){
            return null;
        }
        return $keyword;
    }

    public function actionList()
    {
        var_dump(array_keys($this->actions()), $this->action->id, Yii::$app->response->format);
        return 'list';
    }

    public function actionView()
    {
        return "view";
    }
}