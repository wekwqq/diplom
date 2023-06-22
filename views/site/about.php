<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;


$this->title = 'Где нас найти:';
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
h3{
    text-align: center;
    background-image: linear-gradient(to left, #3CB371, #2E8B57);
    -webkit-background-clip: text;
    color: #3CB371;
    font-weight: 600;
}
.aligncenter {
    text-align: center;
}
</style>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            --
        </div>

    <?php else: ?>
        
        <p class="aligncenter">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5193.138226594556!2d30.305835380829254!3d59.96588174022363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696315b273d3cc3%3A0x14ead33b4d1ce1d0!2z0JTQstC-0YDQtdGGINC00LXRgtGB0LrQvtCz0L4g0YLQstC-0YDRh9C10YHRgtCy0LA!5e0!3m2!1sru!2sru!4v1687469506083!5m2!1sru!2sru" 
            width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
       </p>
       <p align="center"><strong>Адрес:</strong> Петроградский р-н, Каменноостровский просп., 36/73, Санкт-Петербург<br>
       <hr>
       <h3>Наши контактные данные:</h3>

                
                    <strong>Номер телефона: </strong> +7 (812) 346-26-08<br>
                    <strong>Почта:</strong> petroddt@gmail.com<br>
                </p>

             


    <?php endif; ?>
</div>