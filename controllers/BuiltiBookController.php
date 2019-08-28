<?php

namespace app\controllers;

use Yii;
use app\models\BuiltiBook;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mPDF;
/**
 * BuiltiBookController implements the CRUD actions for BuiltiBook model.
 */
class BuiltiBookController extends Controller
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
     * Lists all BuiltiBook models.
     * @return mixed
     */
     public function actionTest1()
    {
        $view= $this->renderAjax('test');

           /* $model = new Mpdf();
            $model->SetHeader('header');
            $model->WriteHTML($view);
            $model->SetFooter('footer');
            $model->Output('MyPDF.pdf', 'D');
*/
        $this->layout = 'pdf';
         $mpdf =new \Mpdf\Mpdf(['format'=>'','', 0, '', 2, 2, 3, 3, 2, 2, 'A4']);
       // $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
        $mpdf->WriteHTML($view);
        $mpdf->Output('overall-transport-route-wise-'.date("d-m-Y").'.pdf', 'I'); 
    }
    public function actionBook($id)
    {
       $model= new BuiltiBook();
       $query=BuiltiBook::findOne(['id'=>$id]);
        $view= $this->render('builti-slip',[ 'model' => $model,'query'=>$query]);
        $this->layout = 'pdf';
        $mpdf = new mPDF('','', 0, '', 2, 2, 3, 3, 2, 2, 'A4');
        $mpdf->WriteHTML($view);
        $mpdf->Output('builti-all-slip-'.date("d-m-Y").'.pdf', 'D'); 
    }
    public function actionIndex()
    {
        $model= new BuiltiBook();
        $dataProvider = new ActiveDataProvider([
            'query' => BuiltiBook::find()->where(['date'=>date('Y-m-d')]),
        ]);
        if(Yii::$app->request->post('selection')){
        $data=Yii::$app->request->post('selection');
        $view= $this->render('print', [
            'data' => $data,
            'model' => $model,
        ]); 
        $this->layout = 'pdf';
        $mpdf = new mPDF('','', 0, '', 2, 2, 3, 3, 2, 2, 'A4');
        $mpdf->WriteHTML($view);
        $mpdf->Output('builti-slip-'.date("d-m-Y").'.pdf', 'D'); 
        }else{
          return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);  
        }
        

        
    }

    public function actionSearch(){
        $model = new BuiltiBook();
        if ($model->load(Yii::$app->request->post())) {
            $data=Yii::$app->request->post('BuiltiBook');
            $query=BuiltiBook::find()->where(['date'=>$data['date']])->all();
             return $this->render('search',['query' => $query,'model'=>$model]);
        }else{
         return $this->render('search', [
            'model' => $model,
        ]);
        }
    }

     public function actionSearchNo(){
        $model = new BuiltiBook();
        if ($model->load(Yii::$app->request->post())) {
            $data=Yii::$app->request->post('BuiltiBook');
            // echo '<pre>';print_r($data);die;
            $query=BuiltiBook::find()->where(['builti_no'=>$data['builti_no']])->all();
             return $this->render('search-no',['query' => $query,'model'=>$model]);
        }else{
         return $this->render('search-no', [
            'model' => $model,
        ]);
        }
    }

    /**
     * Displays a single BuiltiBook model.
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
     * Creates a new BuiltiBook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BuiltiBook();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BuiltiBook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BuiltiBook model.
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
     * Finds the BuiltiBook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BuiltiBook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BuiltiBook::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
