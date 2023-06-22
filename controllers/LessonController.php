<?php

namespace app\controllers;

use app\models\Direction;
use app\models\Lesson;
use app\models\LessonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use Yii;
/**
 * LessonController implements the CRUD actions for Lesson model.
 */
class LessonController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Lesson models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCatalog()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('catalog', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionId2()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('id2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionId3()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('id3', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionId4()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('id4', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionId5()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('id5', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionId6()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('id6', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionId7()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('id7', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionId8()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('id8', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionId9()
    {
        $searchModel = new LessonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('id9', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Lesson model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Lesson model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Lesson();
        if ($this->request->isPost) {
        $model->load($this->request->post());
        $model->image=UploadedFile::getInstance($model,'image');
        $file_name='/web/images/' . \Yii::$app->getSecurity()->generateRandomString(50). '.' . $model->image->extension;
        $model->image->saveAs(\Yii::$app->basePath . $file_name);
        $model->image=$file_name;
        if ($model->save(false)) {
        }
        } else {
        $model->loadDefaultValues();
        }
        return $this->render('create', [
        'model' => $model,
        ]);
    }

    /**
     * Updates an existing Lesson model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Lesson model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lesson model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Lesson the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lesson::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
