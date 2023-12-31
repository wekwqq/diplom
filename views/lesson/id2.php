<?php
/* @var $this yii\web\View */
?>

<style>
.marginauto {
    margin: 10px auto 20px;
    display: block;
}
h1{
  font-size: 60px;
  font-weight: 600;
  background-image: linear-gradient(to left, #3CB371, #2E8B57);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
  text-align: center;
}
h3{
  font-size: 60px;
  font-weight: 600;
  background-image: linear-gradient(to left, #3CB371, #2E8B57);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;
  text-align: center;
}

.contmeleft {
border-radius:8px; /* скругляем края блока*/
width: 520px; /* общая ширина блока*/
border: 1px solid #d9d9d9; /* рамка блока*/
overflow: hidden; /* скрывает возможность появления прокрутки блока. */
margin:0 auto;
}

.contmeleft img {
width: 250px; /* ширина картинки 140 */
height: 400px; /* высота картинки, от неё будет зависеть и размер общего блока */
object-fit: cover; /* обрезаем края картинки, если они не вместятся в блок */
object-position: 0 70; /* тоже обрезка краев */
margin-right: 10px;
float: left; /* важный момент. с помощью этого знаения, мы показывем браузеру, что блок должен соприкасаться со вторым блоком приемущественно с левой стороны */
}


.contmeleft p{
overflow-wrap: normal; /* показывает тексту, что он не должен заходить за границы блока */
word-wrap: normal;
word-break: normal; /* не поддерживает Opera12.14, значение keep-all не поддерживается IE, Chrome */
line-break: auto; /* нет поддержки для русского языка */
-webkit-hyphens: none; -ms-hyphens: none; hyphens: none; /* значение auto не поддерживается Chrome */

padding: 10px; /* отступ от рамки до текста - делает его красивее */
margin-left: 15px; /* отступ с левой стороны от блока с картинкой */
display: block; /* обознначает, что это не просто бесформенный текст, а блок внутри блока */
font-weight:bold; /* толщина текста - толстый */
font-size:14px; /* размер текста*/
margin: 40px 0 0 0; /* отступ от блока с текстом */
}

p{
    text-align: justify;
}
</style>
<body> 

<h1>Рисование на холсте</h1>

<p>Представьте себя в мире цветов, форм и креативного выражения! Занятие "Рисование на холсте" -
это увлекательное путешествие в мир искусства, где каждый ребеёнок может раскрыть свой творческий потенциал и создать уникальное произведение.</p>


<div>
    <img class="marginauto" src="/images/id2.jpg" alt="отцентрированное изображение" height="370" width="600" />
</div>
  
<p>На этом занятии мы исследуем разнообразные техники рисования, играя с красками, текстурами и композицией. Будем изучать основы пропорций,
перспективы и цветовой гармонии, а также углубимся в мир различных стилей и направлений искусства.</p>

<p>С нашим опытным и вдохновляющим преподавателем, юный художник освоит различные техники рисования, включая акриловые и масляные краски, уголь, пастель и многое другое и
     научится работать с кистями, мастихинами и другими инструментами, чтобы создать уникальные текстуры и эффекты на холсте.</p>

<p>Наша цель - помочь ребёнку развить егго творческую интуицию, расширить художественное видение и приобрести навыки, которые будут
вдохновлять его на дальнейшее творческое развитие. Независимо от уровня опыта, это занятие предоставит возможность погрузиться в мир рисования,
выразить свои идеи и воплотить их на холсте.</p>

<p>Присоединяйтесь к нам на занятии "Рисование на холсте" и откройте в себе художника, который ждал своего момента для самовыражения.
Позвольте вашей кисти и краскам создать шедевр, который будет радовать глаза и вдохновлять вас на дальнейшие творческие подвиги!</p>

 <h3>Расписание занятия "Рисование на холсте"</h3>
 <table align="center">
 <thead1>
  <tr>
    <th>№ группы</th>
     <th>День недели</th>
     <th>Кабинет</th>
     <th>Время занятия</th>
     <th>Период занятия</th>
  </tr>
  
 </thead1>
<tbody>
<td>1.А</td><td>Понедельник, Среда</td><td>12</td><td>12:30-15:45</td><td>10.06-26.06.2023</td>
  </tr>
  <tr>
    <td>1.Б</td><td>Вторник, Пятница</td><td>17</td><td>18:15-20:45</td><td>03.06-28.06.2023</td>
  </tr>
</tbody>  
</table>

<h3>Преподаватель</h3>

<div class='contmeleft'>
<img width='150px' src='/images/pr5.jpg' >
<p>Фёдорова Евгения Викторовна</p>
<p align="justify">талантливый и креативный педагог, способный вдохновить и развить творческий потенциал каждого ребенка. 
    Преподаватель поощряет самовыражение, творческое мышление и сотрудничество, помогая детям развивать свою воображение и уверенность в своих способностях.</p>
</div>

<a class="btn btn-primary" href="/lesson/catalog" role="button">К списку занятий </a>

</body>