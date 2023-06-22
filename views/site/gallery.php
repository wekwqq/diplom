<?php

/** @var yii\web\View $this */

$this->title = 'Фотогалерея';
?>

<style>
.gallery {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
}

.gallery__card {
  position: relative;
  height: 300px;
  cursor: pointer;
  overflow: hidden;
  border-style: double;
  border-width: 1px;
}

.gallery__card__pic {
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: 0.2s;
}

.gallery__card:hover .gallery__card__pic {
  transform: scale(1.1);
}

.slider {
  opacity: 0;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  pointer-events: none;
}

.active {
  opacity: 1;
  pointer-events: all;
}

.slider__container {
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  width: 80vw;
  height: 80vh;
}

.slider__btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  padding: 20px;
  font-size: 30px;
  z-index: 10;
}

.slider__btn_left {
  left: 25px;
}

.slider__btn_right {
  right: 25px;
}

.slider__close {
  position: absolute;
  right: 100;
  top: 100;
  font-size: 30px;
  padding: 20px;
  color: #fff;
  background: none;
  border: none;

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

.gallery__card p{
  font-weight: 700;
}
</style>

<body>
<h1>Галерея работ</h1>
    <div class="gallery">
      <div class="gallery__card" >
      <p align="center">"Морской мир" - Иванов Иван, 8 лет</p>
        <img
          class="gallery__card__pic"
          src="/images/g1.jpg"
          alt="Морской мир"   
        />
      
      </div>

      <div class="gallery__card">
      <p align="center">"Розовая ветвь" - Курочкина Полина, 6 лет</p>
        <img
          class="gallery__card__pic"
          src="/images/g2.jpeg"
          alt="Розовая ветвь"
        />
      </div>

      <div class="gallery__card">
      <p align="center">"Оленёнок на прогулке"- Мин Софья, 8 лет</p>
        <img
          class="gallery__card__pic"
          src="/images/g3.jpg"
          alt="Оленёнок на прогулке"
        />
      </div>

      <div class="gallery__card">
      <p align="center">"Птички" - Родионов Илья, 5 лет</p>
        <img
          class="gallery__card__pic"
          src="/images/g4.jpg"
          alt="Птички"
        />
      </div>

      <div class="gallery__card">
      <p align="center">"Милый оленёнок" - Еремеева Даша, 11 лет</p>
        <img
          class="gallery__card__pic"
          src="/images/g5.jpg"
          alt="Милый оленёнок"
        />
      </div>

      <div class="gallery__card">
      <p align="center">"Жирафик" - Васильев Никита, 12 лет</p>
        <img
          class="gallery__card__pic"
          src="/images/g6.jpg"
          alt="Жирафик"
        />
      </div>

    </div>

    <div class="slider">
      <div class="slider__container">
        <button class="slider__btn slider__btn_left">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="slider__btn slider__btn_right">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
      <button class="slider__close">
        <i class="far fa-times-circle"></i>
      </button>
    </div>

    <script
      src="https://kit.fontawesome.com/fce9a50d02.js"
      crossorigin="anonymous"
    ></script>
    <script src="/web/gallery.js"></script>
  </body>
</html>