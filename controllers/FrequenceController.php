<?php

namespace app\controllers;

use Yii;
use app\models\Frequence;
use app\models\FrequenceSearch;
use app\models\Freqconfig;
use app\models\Users;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FrequenceController implements the CRUD actions for Frequence model.
 */
class FrequenceController extends Controller
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
     * Lists all Frequence models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FrequenceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Frequence model.
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
     * Creates a new Frequence model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Frequence();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

   public function recFreq($user,$time,$delay){
	    
            $freq = new Frequence();

	    $freq->iduser=$user->id;
            $freq->date=date("Y:m:d",$time);
            $freq->hour=date("H:i",$time);
            $freq->delay=$delay;
            $freq->idclass=1;
            $freq->save();

   }


   public function actionRegfreq($idcard) {

	$card = $idcard;
	$freqconfig = Freqconfig::findOne(1);

        if ($idcard != NULL){
                $user = Users::find()->where(['idcard'=>$card])->one();

                if ($user != NULL){
			
			$currentime = time();

                        if($user->profile == "professor"){

                                if($freqconfig->checkin == FALSE){
                                    $freqconfig->timecheckin=time();
                                    $freqconfig->checkin=1;
				    $this->recFreq($user,$currentime,0);
                                }
                                else{
                                   $freqconfig->checkin=0;
				   $freqconfig->timecheckout=time();
				    $this->recFreq($user,$currentime,0);
				}

				$freqconfig->save();
                        }else{
                                if($user->profile == "student"){


                	                  if($freqconfig->checkin == true)   {
                        	                if($currentime < $freqconfig->timecheckin + $freqconfig->tolerance){
						          echo "recordFrequence($idcard)";
							  $this->recFreq($user,$currentime,0);
						}else{
							  $this->recFreq($user,$currentime,1);
						}
  		                          }else{
						if($currentime < $freqconfig->timecheckout + $freqconfig->tolerance){
							$this->recFreq($user,$currentime,0);
						}else{
							$this->recFreq($user,$currentime,1);
						}
					  }
                                }



                        }
                }else
                        echo "Invalid Idcard";

        }

        if($idcard != NULL && $user != NULL)
	   return $this->render('regfreq',['freqconfig'=>$freqconfig,'card' => $card,'user'=>$user]);
    }



    /**
     * Updates an existing Frequence model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Frequence model.
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
     * Finds the Frequence model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Frequence the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Frequence::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
