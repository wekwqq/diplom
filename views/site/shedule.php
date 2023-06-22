<?php

/** @var yii\web\View $this */

$this->title = 'Расписание';
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
table{
  text-align: center;
}
</style>

<h1 >Расписание занятий</h1>

<table align="center">
 <thead1>
  <tr>
    <th>№ группы</th>
    <th>Занятие</th>
     <th>День недели</th>
     <th>Кабинет</th>
     <th>Время занятий</th>
     <th>Период занятий</th>
  </tr>
 </thead1>
<tbody>
  <tr>
    <td>1.А</td>
    <td>Рисование на холсте</td><td>Понедельник, Среда</td><td>12</td><td>12:30-15:45</td><td>10.06-26.06.2023</td>
  </tr>
  <tr>
    <td>1.Б</td>
    <td>Рисование на холсте</td><td>Вторник, Пятница</td><td>17</td><td>18:15-20:45</td><td>03.06-28.06.2023</td>
  </tr>
  <tr>
    <td>2.В</td>
    <td>Рисование для малышей</td><td>Среда, Суббота</td><td>3</td><td>10:00-13:15</td><td>12.07-02.08.2023</td>
  </tr>
  <tr>
    <td>4.М</td>
    <td>Лепка из пластилина</td><td>Четверг</td><td>11</td><td>15:40-17:00</td><td>01.08-24.08.2023</td>
  </tr>
  <tr>
    <td>4.К</td>
    <td>Лепка из глины</td><td>Вторник, Четверг</td><td>7</td><td>11:30-15:20</td><td>16.06-10.07.2023</td>
  </tr>
  <tr>
    <td>5.А</td>
    <td>Оригами</td><td>Вторник, Суббота</td><td>4</td><td>12:20-14:00</td><td>30.05-30.07.2023</td>
  </tr>
  <tr>
    <td>5.M</td>
    <td>Оригами</td><td>Среда, Четверг, Пятница</td><td>4</td><td>13:00-15:15</td><td>18.08-15.11.2023</td>
  </tr>
  <tr>
    <td>6.П</td>
    <td>Папье-маше</td><td>Понедельник, Суббота</td><td>9</td><td>16:40-19:15</td><td>09.07-13.09.2023</td>
  </tr>
  <tr>
    <td>7.К</td>
    <td>Квиллинг</td><td>Вторник, Среда</td><td>2</td><td>10:30-14:15</td><td>15.05-21.07.2023</td>
  </tr>
  <tr>
    <td>8.Б</td>
    <td>Аппликация</td><td>Четверг, Пятница</td><td>15</td><td>15:20-17:30</td><td>11.07-31.07.2023</td>
  </tr>
</tbody>  
</table>