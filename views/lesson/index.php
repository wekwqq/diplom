<?php

use app\models\Lesson;
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
<div class="lesson-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить Занятие', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
           ['attribute'=>'Изображение', 'format'=>'html', 'value'=>function($data){return"<img src='{$data->image}' alt='image' style='width: 100px;'>";}],
            'name',
            ['attribute'=>'Направление', 'value'=> function($data){return $data->getDirection()->One()->name;}],
            ['attribute'=>'Преподаватель', 'value'=> function($data){return $data->getTeacher()->One()->fio;}],
            'description',
            'count',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Lesson $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

</div>
