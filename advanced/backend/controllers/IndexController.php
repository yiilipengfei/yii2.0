<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class IndexController extends CommonController
{

    //后台管理控制台
    public function actionIndex(){
        $session = Yii::$app->session;
        $language = $session->get('admin');
        $name = $language['admin_name'];
        return $this->render('index', ['name' => $name]);
//         return $this->render('index');
    }
    //安居客控制台
    public function actionNotice(){
    	return $this->render('notice');
    }

    //退出
    public function actionLoginout()
    {
        $session=Yii::$app->session;
        $session->remove('admin');
        return $this->redirect(['login/login']);
    }
}

