<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cart $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cart-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userid')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'lessonid')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'count')->textInput(['disabled' => true]) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
