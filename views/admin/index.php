
<?php
/* @var $this yii\web\View */
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
  font-family:'Courier New', Courier, monospace
} 
h3{
  font-size: 30px;
  font-weight: 600;
  background-image: linear-gradient(to left, darkolivegreen, darkolivegreen);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
  text-align: center;
  font-family:'Courier New', Courier, monospace
}
p{
    font-family:'Courier New', Courier, monospace
}  
p a{
    color: teal;
} 
.block{
margin: 20px;
display: inline-block;
border: 5px dashed darkolivegreen;
border-radius: 0 20px;
padding: 0 10px; 
}
</style>

<h1>Панель администратора</h1>

<div class="block">
<h3>Создание модели</h3>
<p><a href="/lesson/create">Добавить занятие</a></p>
<p><a href="/direction/create">Добавить направление</a></p>
<p><a href="/teacher/create">Добавить преподавателя</a></p>
</div>

<div class="block">
<h3>Просмотр модели</h3>
<p><a href="/lesson">Управление занятиями</a></p>
<p><a href="/direction">Управление направлениями</a></p>
<p><a href="/teacher">Управление преподавателями</a></p>
</div>

<div class="block">
<h3>Документация</h3>
<p><a href="https://hestiacp.com/docs/">Панель управления Hestia</a></p>
<p><a href="https://www.yiiframework.com/doc/guide/2.0/ru">Фреймворк Yii2</a></p>
<p><a href="https://www.phpmyadmin.net/docs/">phpMyAdmin</a></p>
</div>

<div class="block">
<h3>Пользователи и записи</h3>
<p><a href="/user/">Просмотр пользователей</a></p>
<p><a href="/cart/admin">Управление записями</a></p>
</div>

