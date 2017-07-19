<?php

namespace app\controllers;

use Yii;
use app\models\Desks;
use app\models\DesksSearch;
use app\models\Rooms;
use app\models\Devices;
use app\models\Controls;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DesksController implements the CRUD actions for Desks model.
 */
class DesksController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Desks models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DesksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Desks model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Desks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Desks();
	$rooms = Rooms::find()->all();
        $array_rooms = ArrayHelper::map($rooms,"id","name");


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
		'array_rooms' => $array_rooms,
            ]);
        }
    }

    public function actionControle() {
	$desks = Desks::find()->all();

	$devices = [];
	$controls = [];

	foreach ($desks as $desk) {
		$devices[$desk->id] = Devices::find()->where(['iddesk'=>$desk->id])->all();
		foreach ($devices[$desk->id] as $device) {
			$controls[$device->id] = Controls::find()->where(['iddevice'=>$device->id])->all();
		}
	}

	return $this->render('controle',[
		'desks'=>$desks,
		'devices'=>$devices,
		'controls'=>$controls,
	]);
    }

    /**
     * Updates an existing Desks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
	$rooms = Rooms::find()->all();
        $array_rooms = ArrayHelper::map($rooms,"id","name");


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
		'array_rooms' => $array_rooms,
            ]);
        }
    }

    /**
     * Deletes an existing Desks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Desks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Desks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Desks::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
