<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = 'Регистрация';
?>
<style>
h1{
  font-size: 60px;
  font-weight: 600;
  background-image: linear-gradient(to left, #3CB371, #2E8B57);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
  text-align: center;
}
</style>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
