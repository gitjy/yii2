<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\goods */

$this->title = Yii::t('app', 'Create Goods');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>