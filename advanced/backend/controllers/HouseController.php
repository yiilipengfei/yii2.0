<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 * 这是房源管理
 */
class HouseController extends CommonController
{
    public function actionAccount(){
    	//安居客控制台 房源管理 账号设置 账号记录
         return $this->render('account');
    }
     public function actionAddaccount(){
    	//安居客控制台 房源管理 账号设置 添加账号
         return $this->render('addaccount');
    }
    public function actionCopy(){
    	//安居客控制台 房源管理 复制房源
         return $this->render('copy');
    }
     public function actionRecord(){
    	//房源管理 发布记录
         return $this->render('record');
    }
    public function actionRefresh(){
    	//房源管理 刷新记录
         return $this->render('refresh');
    }
    public function actionRelease(){
    	//房源管理 发布房源
    	$this->layout=false;
         return $this->render('release');
    }
}
