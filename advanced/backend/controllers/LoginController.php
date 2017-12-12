<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;


class LoginController extends Controller
{
    public $enableCsrfValidation = false;
    public $layout = false;
    public function actions()
    {
        return
            [
                'captchatest'=>[
                    'class'=>'yii\captcha\CaptchaAction',
                    'maxLength'=>4,
                    'minLength'=>4
                ]

            ];

    }


    public function actionLogin()
    {
        return $this->render('login');
    }

    //登录
    public function actionIndex()
    {
        $data = $_POST;
        $admin_name = $data['admin_name'];
        $admin_password = $data['admin_password'];
        $res=Yii::$app->db->createCommand("select * from admin where admin_name='$admin_name' and admin_password='$admin_password'")->queryOne();
        if ($res) {
            if ($res['admin_password'] == $data['admin_password']) {

                $session = Yii::$app->session;
                $session->set('admin', $res);
                return 2;
            } else {
                return 1;
            }

        } else {
            return 0;
        }
    }

    //注册
    public function actionRegister(){
        //安居客控制台
        $data=Yii::$app->request->post();
        if($data['password'] == $data['admin_password'])
        {
            $sql="INSERT INTO admin(admin_name,admin_password) VALUE ('".$data['admin_name']."','".$data['admin_password']."')";
            $res = Yii::$app->db->createCommand($sql)->execute();
            if($res)
            {
                $this->redirect(array('/login/login'));
            }else{
                echo '注册失败';
            }
        }
    }
}