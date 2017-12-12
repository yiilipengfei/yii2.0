<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 * 这是账户管理
 */

class AccountController extends CommonController
{
//     public function actionChange(){
//    	//安居客控制台 账户管理 修改密码
//         $session = Yii::$app->session;
//         $admin = $session->get('admin');
//         $data = Yii::$app->request->post();
//         $sql = "SELECT * FROM admin WHERE admin='".$session->get('admin')."'";
//         $query = Yii::$app->db->createCommand($sql)->queryOne();
//         if($query['admin_password']==$data['pwd']){
//             if($data['pwds']==$data['pwdss']){
//                 $sql = "UPDATE admin SET admin_password = '".$data['pwds']."' WHERE admin = '".$session->get('admin')."'";
//                 $res = Yii::$app->db->createCommand($sql)->execute();
//             }else{
//                 echo '确认密码错误';
//             }
//         }else{
//             echo '初始密码错误';
//         }
//    }

    public function actionChanges(){
        $session=Yii::$app->session;
        $admin=$session->get('admin');
        $data = yii::$app->request->post();
        $sql = "SELECT * FROM admin WHERE admin='".$session->get('admin')."'";
        $query = Yii::$app->db->createCommand($sql)->queryOne();
        if($query['admin_password']==$data['pwd']){
            if($data['pwds']==$data['pwdss']){
                $sql = "UPDATE admin SET admin_password = '".$data['pwds']."' WHERE r_name = '".$session->get('admin')."'";
                $res = Yii::$app->db->createCommand($sql)->execute();
            }else{
                echo '确认密码错误';
            }
        }else{
            echo '初始密码错误';
        }
    }

    public function actionMoney(){

        //账号管理 余额充值
    	return $this->render('money');
    }

    public function actionRecharge(){
    	//账户管理 充值记录
    	return $this->render('recharge');
    }
}
