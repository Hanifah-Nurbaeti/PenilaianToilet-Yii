<?php

namespace backend\controllers;

use Yii;
use common\models\toilet;
use backend\models\toiletSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Kantor;
use common\models\Station;
use common\models\Kereta;
use yii\helpers\ArrayHelper;
/**
 * ToiletController implements the CRUD actions for toilet model.
 */
class ToiletController extends Controller
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
     * Lists all toilet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new toiletSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single toilet model.
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
     * Creates a new toilet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new toilet();

        $Kantor = Kantor::find()->all();
        $Kantor =ArrayHelper:: map($Kantor,'id_kantor','kantor_name');
        $Station = Station::find()->all();
        $Station =ArrayHelper:: map($Station,'id_station','station_name');
        $Kereta = Kereta::find()->all();
        $Kereta =ArrayHelper:: map($Kereta,'id_kereta','kereta_name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_toilet]);
        }

        return $this->render('create', [
            'model' => $model,
            'Kantor' => $Kantor,
            'Station' => $Station,
            'Kereta' =>$Kereta,
        ]);
    }

    /**
     * Updates an existing toilet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $Kantor = Kantor::find()->all();
        $Kantor =ArrayHelper:: map($Kantor,'id_kantor','kantor_name');
        $Station = Station::find()->all();
        $Station =ArrayHelper:: map($Station,'id_station','station_name');
        $Kereta = Kereta::find()->all();
        $Kereta =ArrayHelper:: map($Kereta,'id_kereta','kereta_name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_toilet]);
        }

        return $this->render('update', [
            'model' => $model,
            'Kantor' => $Kantor,
            'Station' => $Station,
            'Kereta' =>$Kereta,
        ]);
    }

    /**
     * Deletes an existing toilet model.
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
     * Finds the toilet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return toilet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = toilet::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
