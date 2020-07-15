<?php

namespace backend\controllers;

use Yii;
use common\models\respon;
use backend\models\ResponSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ResponController implements the CRUD actions for respon model.
 */
class ResponController extends Controller
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
     * Lists all respon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResponSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single respon model.
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
     * Creates a new respon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new respon();

        if ($model->load(Yii::$app->request->post())) {

            $gambar = UploadedFile::getInstance($model, 'gambar');
 
            if($model->validate()){
                $model->save();
                if (!empty($gambar)) {
                    $gambar->saveAs(Yii::getAlias('@backend/web/img/') . 'gambar.' . $gambar->extension);
                    $model->gambar = 'gambar.' . $gambar->extension;
                    $model->save(FALSE);
                }
            }  
        $model->save(); 
            return $this->redirect(['view', 'id' => $model->id_respon]);
        
        } else {
        return $this->render('create', [
            'model' => $model,
        ]);
    }
}

    /**
     * Updates an existing respon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $gambar = UploadedFile::getInstance($model, 'gambar');
 
            if($model->validate()){
                $model->save();
                if (!empty($gambar)) {
                    $gambar->saveAs(Yii::getAlias('@frontend/web/img/') . 'gambar.' . $gambar->extension);
                    $model->gambar = 'gambar.' . $gambar->extension;
                    $model->save(FALSE);
                }
            }  
        $model->save(); 
            return $this->redirect(['view', 'id' => $model->id_respon]);
        
        } else {
        return $this->render('update', [
            'model' => $model,
        ]);
    }
}

    /**
     * Deletes an existing respon model.
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
     * Finds the respon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return respon the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = respon::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionViewGambar($id_respon){
        $file = Yii::getAlias('@backend/web/img/' . $nama);
        return Yii::$app->response->sendFile($file, NULL, ['inline' => TRUE]);
        
    }
}

