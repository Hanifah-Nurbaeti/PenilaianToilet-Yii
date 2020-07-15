<?php

namespace backend\controllers;

use Yii;
use common\models\rekap;
use backend\models\RekapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Daop;
use common\models\Kantor;
use common\models\Station;
use common\models\Kereta;
use common\models\Toilet;
use common\models\Respon;
use common\models\Ketidakpuasan;
use yii\helpers\ArrayHelper;
/**
 * RekapController implements the CRUD actions for rekap model.
 */
class RekapController extends Controller
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
     * Lists all rekap models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RekapSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single rekap model.
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
     * Creates a new rekap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new rekap();

        $daop = Daop::find()->all();
        $daop =ArrayHelper:: map($daop,'id_daop','singkatan');
        $Kantor = Kantor::find()->all();
        $Kantor =ArrayHelper:: map($Kantor,'id_kantor','kantor_name');
        $Station = Station::find()->all();
        $Station =ArrayHelper:: map($Station,'id_station','station_name');
        $Kereta = Kereta::find()->all();
        $Kereta =ArrayHelper:: map($Kereta,'id_kereta','kereta_name');
        $toilet = Toilet::find()->all();
        $toilet =ArrayHelper:: map($toilet,'id_toilet','nama_toilet');
        $respon = Respon::find()->all();
        $respon =ArrayHelper:: map($respon,'id_respon','nama_respon');
        $ketidakpuasan = Ketidakpuasan::find()->all();
        $ketidakpuasan =ArrayHelper:: map($ketidakpuasan,'id_ketidakpuasan','nama_ketidakpuasan');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_rekap]);
        }

        return $this->render('create', [
            'model' => $model,
            'daop' => $daop,
            'Kantor' => $Kantor,
            'Station' => $Station,
            'Kereta' =>$Kereta,
            'toilet' => $toilet,
            'respon' => $respon,
            'ketidakpuasan' => $ketidakpuasan,
        ]);
    }

    /**
     * Updates an existing rekap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $daop = Daop::find()->all();
        $daop =ArrayHelper:: map($daop,'id_daop','singkatan');
        $Kantor = Kantor::find()->all();
        $Kantor =ArrayHelper:: map($Kantor,'id_kantor','kantor_name');
        $Station = Station::find()->all();
        $Station =ArrayHelper:: map($Station,'id_station','station_name');
        $Kereta = Kereta::find()->all();
        $Kereta =ArrayHelper:: map($Kereta,'id_kereta','kereta_name');
        $toilet = Toilet::find()->all();
        $toilet =ArrayHelper:: map($toilet,'id_toilet','nama_toilet');
        $respon = Respon::find()->all();
        $respon =ArrayHelper:: map($respon,'id_respon','nama_respon');
        $ketidakpuasan = Ketidakpuasan::find()->all();
        $ketidakpuasan =ArrayHelper:: map($ketidakpuasan,'id_ketidakpuasan','nama_ketidakpuasan');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_rekap]);
        }

        return $this->render('update', [
            'model' => $model,
            'daop' => $daop,
            'Kantor' => $Kantor,
            'Station' => $Station,
            'Kereta' =>$Kereta,
            'toilet' => $toilet,
            'respon' => $respon,
            'ketidakpuasan' => $ketidakpuasan,
        ]);
    }

    /**
     * Deletes an existing rekap model.
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
     * Finds the rekap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return rekap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = rekap::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
