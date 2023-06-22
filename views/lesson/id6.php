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

<h1>Аппликация</h1>

<p>"Аппликация" - творческое путешествие в мир изображений, цветов и фантазии! Это занятие предоставляет возможность детям создавать 
удивительные и красочные композиции, используя разнообразные материалы и свою фантазию.</p>

<div>
    <img class="marginauto" src="/images/id6.jpg" alt="отцентрированное изображение" height="370" width="600" />
</div>
  
<p>Здесь мы будем изучать искусство аппликации, где дети могут создавать уникальные коллажи, объединяя различные формы, текстуры и цвета. 
С помощью нашего опытного преподавателя, дети узнают различные техники аппликации, будут экспериментировать с разными материалами - бумагой, тканью, 
блестками, пуговицами и многое другое.</p>

<p>Мы будем создавать различные изображения - от животных и растений до сказочных персонажей и абстрактных форм. Дети научатся резать, складывать и 
склеивать различные элементы, чтобы создать композиции, которые отражают их воображение и собственный стиль.</p>

<p>В нашем классе ценится индивидуальность и самовыражение каждого ребенка. У нас будет место для творчества, экспериментов и собственных идей. Мы 
поощряем детей воплощать свои фантазии на бумаге и развивать свою художественную интуицию.</p>

<p>Присоединяйтесь к нам и дайте вашим детям возможность раскрыть свой творческий потенциал и развить свое художественное
 видение. Здесь они научатся работать с разными материалами, улучшать свои навыки мелкой моторики и воображения, а также получат удовольствие от процесса 
 создания собственных уникальных композиций.</p>

 <p>Позвольте вашим детям стать настоящими художниками-коллажистами и создать великолепные работы, которые будут радовать глаза и вдохновлять
 их на новые творческие подвиги!</p>

 <h3>Расписание занятия "Аппликация"</h3>
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
    <td>8.Б</td><td>Четверг, Пятница</td><td>15</td><td>15:20-17:30</td><td>11.07-31.07.2023</td>
  </tr>
</tbody>  
</table>

<h3>Преподаватель</h3>

<div class='contmeleft'>
<img width='150px' src='/images/pr3.jpg' >
<p>Игнатьева Кристина Михайловна</p>
<p align="justify">Энергичный и веселый педагог, который делает уроки интересными и увлекательными для детей. Своим харизматичным и дружелюбным подходом он создает доверительные отношения с учениками и стимулирует их творческий рост. Преподаватель развивает у детей воображение, 
    творческое мышление и оригинальность, вдохновляя их на создание уникальных произведений и исследование различных художественных техник.</p>
</div>

<a class="btn btn-primary" href="/lesson/catalog" role="button">К списку занятий </a>

</body>