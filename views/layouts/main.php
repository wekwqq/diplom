<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' =>'../logo/logo.png']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="ce d-flex flex-column h-100">
<?php $this->beginBody() ?>
<header>
<?php
if (Yii::$app->user->isGuest){
    $items=[
        ['label' => 'Контактная информация', 'url' => ['/site/about']],
        ['label' => 'Занятия', 'url' => ['/lesson/catalog']],
        ['label' => 'Фотогалерея', 'url' => ['/site/gallery']],
        ['label' => 'Регистрация', 'url' => ['/user/create']],
        ['label' => 'Авторизация', 'url' => ['/site/login']],
    ];}
else {
    Yii::$app->user->identity->admin==1 ?
        ( $items=[
            ['label' => 'Административная панель', 'url' => ['/admin']],
            ['label' => 'Занятия', 'url' => ['/lesson/catalog']],
            ['label' => 'Расписание', 'url' => ['/site/shedule']],
            ['label' => 'Галерея', 'url' => ['/site/gallery']],
        ])
        :
        ($items=[
            ['label' => 'Личный кабинет', 'url' => ['/user/view?id='.Yii::$app->user->identity->id]],
            ['label' => 'Контактная информация', 'url' => ['/site/about']],
            ['label' => 'Занятия', 'url' => ['/lesson/catalog']],
            ['label' => 'Расписание', 'url' => ['/site/shedule']],
            ['label' => 'Галерея', 'url' => ['/site/gallery']],
            ['label' => 'Записи', 'url' => ['/cart/index?CartSearch[userid]='.\Yii::$app->user->identity->id]]
        ]);

    array_push($items, '<li class="nav-item">'
 . Html::beginForm(['/site/logout'])
 . Html::submitButton(
     'Выйти (' . Yii::$app->user->identity->login . ')',
     ['class' => 'nav-link btn btn-link logout']
 )
 . Html::endForm()
 . '</li>');
}

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => ['class' => 'cu navbar-expand-md fixed-top']
]);
echo
Nav::widget([
    'options' => ['class' => 'navbar-nav'],
    'items' => $items
]);
NavBar::end(['brandLabel' => Yii::$app->name,]);
?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="cc container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<style>
.footer
{
    position: fixed;
}
</style>
<footer id="footer" class="mt-auto py-3 bg-light">
<script src="/web/add_lesson.js"></script>
<div class="container"><div class="row text-muted">
<div class="col-md-6 text-center text-md-start">&copy; Кружок детского творчества <?= date('Y') ?></div>
<div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
</div></div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog"><div class="modal-content"><div class="modal-header">
<h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
<div class="modal-body" id="modalBody"></div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть</button>
</div></div></div></div></footer>



<?php $this->endBody() ?>
	
</body>
</html>
<?php $this->endPage() ?>
