<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\GoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'typeid') ?>

    <?= $form->field($model, 'goods') ?>

    <?= $form->field($model, 'company') ?>

    <?= $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'picname') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'store') ?>

    <?php // echo $form->field($model, 'num') ?>

    <?php // echo $form->field($model, 'clicknum') ?>

    <?php // echo $form->field($model, 'addtime') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
