<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Lesson $model */
/** @var yii\widgets\ActiveForm $form */


$li=[]; $directions=\app\models\Direction::find()->all();
foreach ($directions as $direction)
{
$li[$direction->id]=$direction->name;
}


$li1=[]; $teachers=\app\models\Teacher::find()->all();
foreach ($teachers as $teacher)
{
$li1[$teacher->id]=$teacher->fio;
}

?>
<div class="lesson-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput()?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'directionid')->dropDownList($li)?>

    <?= $form->field($model, 'teacherid')->dropDownList($li1)?>

    <?= $form->field($model, 'count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
