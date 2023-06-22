<?php

use app\models\Lesson;
use app\models\Cart;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LessonSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Занятия';
$this->params['breadcrumbs'][] = $this->title;
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

<h1>Каталог занятий</h1>

<div class="btn-group m-1">
<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    По названию</button>
<ul class="dropdown-menu">
    <li><a class="dropdown-item" href="catalog?sort=name">По возрастанию (А-Я)</a></li>
    <li><a class="dropdown-item" href="catalog?sort=-name">По убыванию (Я-А)</a></li>
</ul>
</div>

<div class="btn-group m-1">
<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    По количеству групп</button>
<ul class="dropdown-menu">
    <li><a class="dropdown-item" href="catalog?sort=description">По возрастанию</a></li>
    <li><a class="dropdown-item" href="catalog?sort=-description">По убыванию</a></li>
</ul>
</div>

<div class="btn-group m-1">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Фильтр по категориям</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="catalog?LessonSearch[directionid]=1">Лепка</a></li>
            <li><a class="dropdown-item" href="catalog?LessonSearch[directionid]=2">Рисование</a></li>
            <li><a class="dropdown-item" href="catalog?LessonSearch[directionid]=3">Работа с бумагой</a></li>
</ul>
</ul>
</div>

<div style='width:100%' class="btn-group m-1">
<a class="btn btn-secondary"  href="catalog" role="button" >Сбросить фильтры</a>     
</div>

<hr>

<?php
$lessons=$dataProvider->getModels();
echo "<div class='d-flex flex-row flex-wrap justify-content-start align-items-end'>";
foreach ($lessons as $lesson){
        echo "<div class='card m-1' style='width: 22%; height: 60%; min-width: 300px;'>
 <a href='/lesson/id{$lesson->id}'><img src='{$lesson->image}'class='card-img-top' style='height: 300px; width: 300px;' alt='image'></a>
 <div class='card-body'>
 <h5 class='card-title'>{$lesson->name}</h5>
 <p class='text-secondary'>{$lesson->description}</p>";
// echo (Yii::$app->user->isGuest ? "<a href='/lesson/id{$lesson->id}' class='btn btn-secondary'>Информация</a>": "<p onclick='add_lesson({$lesson->id},1)' class='btn btn-secondary'>Добавить в корзину</p>");
 
  if (Yii::$app->user->isGuest) echo "<a href='/lesson/id{$lesson->id}' class='btn btn-secondary'>Информация</a>";
  else {echo (Cart::find()->where(['userid' => Yii::$app->user->identity->id])->andWhere(['lessonid'=>$lesson->id])->one()) ? "<p  class='btn-product'>Вы записаны</p>" : "<p onclick='add_lesson({$lesson->id},1)' class='btn btn-secondary'>Записаться</p>";} 
 
 
 
 echo "</div>
</div>";}
echo "</div>";
?>