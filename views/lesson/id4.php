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

<h1>Лепка из пластилина</h1>

<p>"Лепка из пластилина" - волшебное приключение, где дети могут смешивать цвета, воплощать свои идеи в
 трехмерной форме и создавать удивительные скульптуры.</p>

<div>
    <img class="marginauto" src="/images/id4.jpg" alt="отцентрированное изображение" height="370" width="600" />
</div>
  
<p>На этом занятии мы будем исследовать пластилин - мягкий и гибкий материал, который позволяет нашим маленьким художникам выразить свою фантазию и создать
 уникальные произведения искусства. С помощью нашего опытного преподавателя, дети узнают различные техники лепки, освоят базовые формы и научатся создавать детали и текстуры.</p>

 <p>Мы будем создавать разные объекты - от животных и фигурок до фантастических существ и фантазийных миров. Во время занятия дети будут стимулировать свое 
воображение, развивать моторику рук и улучшать координацию движений. Они научатся работать с разными инструментами и применять различные техники, 
чтобы придать своим работам особый вид.</p>

<p>Мы создадим вдохновляющую атмосферу, где каждый ребенок будет иметь возможность свободно выразить свои идеи и чувства через творчество. У нас будет 
место для экспериментов, ошибок и самовыражения, поскольку мы верим, что каждое детское творение уникально и ценно.  Это занятие поможет 
развить воображение, творческое мышление и технические навыки, а также способствует развитию мелкой моторики и координации движений.</p>

<p>Пусть ваш ребенок ощутит радость и удовлетворение, видя, как его идеи превращаются в реальность с помощью пластилина. Присоединяйтесь
     и позвольте вашим детям открыть в себе маленьких скульпторов, которые будут лепить и создавать удивительные произведения искусства!</p>

 <h3>Расписание занятия "Квиллинг"</h3>
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
<tr>
    <td>4.К</td><td>Вторник, Четверг</td><td>7</td><td>11:30-15:20</td><td>16.06-10.07.2023</td>
</tr>
</tbody>  
</table>

<h3>Преподаватель</h3>

<div class='contmeleft'>
<img width='150px' src='/images/pr2.jpg' >
<p>Иванова Ольга Юрьевна</p>
<p align="justify">Творческий наставник и вдохновитель, который помогает детям обнаружить и развить свои таланты и интересы в различных областях искусства.
Преподаватель с увлечением и терпением руководит творческими процессами, помогает развить технические навыки и вдохновляет на эксперименты и самовыражение. </p>
</div>

<a class="btn btn-primary" href="/lesson/catalog" role="button">К списку занятий </a>

</body>