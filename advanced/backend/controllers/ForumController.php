<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 * 这是论坛管理
 */
class ForumController extends CommonController
{
    public function action(){
    	
         return $this->render('');
    }
}
