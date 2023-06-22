<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Lesson $model */

$this->title = 'Редактировать занятие: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Занятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Сохранить';
?>
<div class="lesson-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
