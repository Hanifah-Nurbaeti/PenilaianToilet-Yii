<?php

namespace backend\controllers;

use Yii;
use common\models\ketidakpuasan;
use backend\models\KetidakpuasanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Respon;
use yii\helpers\ArrayHelper;

/**
 * KetidakpuasanController implements the CRUD actions for ketidakpuasan model.
 */
class KetidakpuasanController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ketidakpuasan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KetidakpuasanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ketidakpuasan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ketidakpuasan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ketidakpuasan();
        $respon = Respon::find()->all();
        $respon =ArrayHelper:: map($respon,'id_respon','nama_respon');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_ketidakpuasan]);
        }

        return $this->render('create', [
            'model' => $model,
            'respon' => $respon
        ]);
    }

    /**
     * Updates an existing ketidakpuasan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $respon = Respon::find()->all();
        $respon =ArrayHelper:: map($respon,'id_respon','nama_respon');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_ketidakpuasan]);
        }

        return $this->render('update', [
            'model' => $model,
            'respon' => $respon
        ]);
    }

    /**
     * Deletes an existing ketidakpuasan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ketidakpuasan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ketidakpuasan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ketidakpuasan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
