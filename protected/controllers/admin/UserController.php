<?php

class UserController extends Controller
{
  /**
   * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
   * using two-column layout. See 'protected/views/layouts/column2.php'.
   */
  public $layout='//layouts/column2';

  /**
   * @return array action filters
   */
  public function filters()
  {
    return array(
      'accessControl', // perform access control for CRUD operations
      'postOnly + delete', // we only allow deletion via POST request
    );
  }

  /**
   * Specifies the access control rules.
   * This method is used by the 'accessControl' filter.
   * @return array access control rules
   */
  public function accessRules()
  {
    if(app()->user->getState('roles') =="admin") {

      $arr =array('index','create', 'update', 'view', 'admin', 'delete');   /* give all access to admin */
    } else {

      $arr = array('view', 'admin', 'index');    /*  no access to other user */
    }

    return array(array('allow',
      'actions'=>$arr,
      'users'=>array('@'),),
      array('deny',
        'users'=>array('*'),),
    );

  }
  /*
      *  init CSS and Javascript file
      */
  public function init(){
    Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/user.css');

    parent::init();
  }
  /**
   * Displays a particular model.
   * @param integer $id the ID of the model to be displayed
   */
  public function actionView($id)
  {
    $model = $this->loadModel($id);
    if(User::model()->getRole() < $model->user_role) {
      throw new CHttpException(404,'You are not authorized to view This profile info !');
    } elseif (User::model()->getRole() ==  $model->user_role && app()->user->id != $id) {
      throw new CHttpException(404,'You are not authorized to update This profile info !');
    }
    $this->render('view',array(
      'model'=>$this->loadModel($id),
    ));
  }

  /**
   * Creates a new model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   */
  public function actionCreate()
  {
    $model=new User;

    // Uncomment the following line if AJAX validation is needed
    $this->performAjaxValidation($model);
    $model->setScenario('create');
    if(isset($_POST['User']))
    {
      // echo getDatetime();die;
      $model->attributes = Clean($_POST['User']);
      $model->create_date = getDatetime();
      $model->user_role = $model::USER;
      $model->create_user = app()->user->id;

      if($model->save())
        $this->redirect(array('view','id'=>$model->userid));
    }

    $this->render('create',array(
      'model'=>$model,
    ));
  }

  /**
   * Updates a particular model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param integer $id the ID of the model to be updated
   */
  public function actionUpdate($id)
  {
    $model=$this->loadModel($id);

    // Uncomment the following line if AJAX validation is needed
    // $this->performAjaxValidation($model);

    if(isset($_POST['User']))
    {
      $model->attributes = Clean($_POST['User']);
      $model->setScenario('update');
      $model->update_date = getDatetime();
      if($model->save())
        $this->redirect(array('view','id'=>$model->userid));
    }

    $this->render('update',array(
      'model'=>$model,
    ));
  }

  /**
   * Deletes a particular model.
   * If deletion is successful, the browser will be redirected to the 'admin' page.
   * @param integer $id the ID of the model to be deleted
   */
  public function actionDelete($id)
  {
    $this->loadModel($id)->delete();

    // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
    if(!isset($_GET['ajax']))
      $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
  }

  /**
   * Lists all models.
   */
//	public function actionIndex()
//	{
//		$dataProvider=new CActiveDataProvider('User');
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));
//	}

  /**
   * Manages all models.
   */
  public function actionAdmin()
  {
    $model=new User('search');
    $model->unsetAttributes();  // clear any default values
    if(isset($_GET['User']))
      $model->attributes=$_GET['User'];

    $this->render('admin',array(
      'model'=>$model,
    ));
  }

  /**
   * Returns the data model based on the primary key given in the GET variable.
   * If the data model is not found, an HTTP exception will be raised.
   * @param integer $id the ID of the model to be loaded
   * @return User the loaded model
   * @throws CHttpException
   */
  public function loadModel($id)
  {
    $model=User::model()->findByPk($id);
    if($model===null)
      throw new CHttpException(404,'The requested page does not exist.');
    return $model;
  }

  /**
   * Performs the AJAX validation.
   * @param User $model the model to be validated
   */
  protected function performAjaxValidation($model)
  {
    if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
    {
      echo CActiveForm::validate($model);
      Yii::app()->end();
    }
  }
}
