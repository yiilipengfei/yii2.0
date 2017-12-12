<?php
namespace backend\controllers;

use Yii;
use yii\db\Exception;
use yii\db\Command;
use yii\web\Controller;
/**
 * Index controller
 */
class LayoutsController extends CommonController
{
    public $enableCsrfValidation = false;
    public $layout = false;

    public function actionMain()
    {
        $session = Yii::$app->session;
        $language = $session->get('admin');
        $name = $language['admin_name'];
        return $this->render('main', ['name' => $name]);
    }

}