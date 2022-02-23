<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\search\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        if(!Yii::$app->user->isGuest) {
            $ny = date('Y');
            $nd = date('d');
            $nm = date('m');
            $nh = date('h');
            $ni = date('i');
            $ly = date('Y', strtotime( Yii::$app->user->identity->setting));
            $lm = date('m', strtotime(Yii::$app->user->identity->setting));
            $ld = date('d', strtotime(Yii::$app->user->identity->setting));
            $lh = date('h', strtotime( Yii::$app->user->identity->setting));
            $li = date('i', strtotime( Yii::$app->user->identity->setting));
            if ($ny != $ly
                or $nm != $lm
                or $nd != $ld
                or $nh != $lh
                or (($nh * 60 + $ni) - ($lh * 60 + $li)) >= 30
            ) {
                Yii::$app->user->logout();
            }else{
                $m = User::findOne(Yii::$app->user->getId());
                $m->setting = date('Y-m-d h:i:s');
                $m->save();
            }
        }
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [

                    [
                        'allow' => true,
                        'roles' => ['@'],

                    ],

                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->identity->role != 1){
            throw new NotFoundHttpException();
        }
        $model = User::find()->where(['<>','role','1'])->all();
        return $this->render('index', [
          'model'=>$model,
            'title'=>'Users'
        ]);
    }

    public function actionAdmin()
    {
        if(Yii::$app->user->identity->role != 1){
            throw new NotFoundHttpException();
        }
        $model = User::find()->where(['role'=>'1'])->all();
        return $this->render('index', [
            'model'=>$model,
            'title'=>'Administrators'
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if(Yii::$app->user->identity->role != 1){
            throw new NotFoundHttpException();
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->identity->role != 1){
            throw new NotFoundHttpException();
        }
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
            $model->upload();
            $model->role = 1;
			$model->setting = date('Y-m-d h:i:s');
            $model->save();
            return $this->redirect(['admin']);
        } else {
            return $this->render('create', [
                'model' => $model,
                'title'=>'Administrator'
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id = null)
    {
        if(Yii::$app->user->identity->role != 1){
            throw new NotFoundHttpException();
        }

        if($id == null){
            $id = Yii::$app->user->identity->getId();
        }
        $model = $this->findModel($id);
        $text = 'Administrator';
        if($model->role != 1){
            $text = "User";
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->role != 1){
                return $this->redirect(['index']);
            }else{
                return $this->redirect(['admin']);
            }

        } else {
            return $this->render('update', [
                'model' => $model,
                'title'=>$text,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->identity->role != 1){
            throw new NotFoundHttpException();
        }
        $m = $this->findModel($id);
        if($m->role != 1){
            return $this->redirect(['index']);
        }
        $m->delete();
        return $this->redirect(['admin']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
