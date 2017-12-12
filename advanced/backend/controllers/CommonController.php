<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
class CommonController extends Controller{
  /*防非法登录*/
  public function init(){
    $session = Yii::$app->session;
    $user = $session->get('admin');
    if(empty($user)){
      return $this->redirect(['/login/login']);
    }
  }

  /*取出当前登录用户的信息*/
  protected function main(){
      $session = Yii::$app->session;
      $language = $session->get('admin');
      $name = $language['admin_name'];
      return $this->render('main', ['name' => $name]);
  }

  //简历
   
   public function jianli($model,$user_id,$status){
    $data=$model->find()->select('*,send_resume.add_time')->innerJoin('userinfo','send_resume.user_id=userinfo.user_id')->innerjoin('background','userinfo.user_id=background.user_id')->innerjoin('education','userinfo.education_id=education.education_id')->innerjoin('hopework','userinfo.user_id=hopework.user_id')->innerjoin('worked','userinfo.user_id=worked.user_id')->innerjoin('recruit','send_resume.recruit_id=recruit.recruit_id')->where(['company_id'=>$user_id,'send_status'=>$status])->asArray()->all();
    return $data;
   }
  //上传图片到指定文件夹
  public function uploads($model,$file,$upload){
    //第一个参数是模型，第二个是上传的文件夹，第三是表中的字段
    $model->$upload = UploadedFile::getInstance($model, $upload);
    if($model->$upload){
      $logo = 'uploads/'.$file.'/'.md5(rand(1111,9999)).'.'.$model->$upload->extension;
      $model->$upload->saveAs($logo);
    }
    return $logo;//返回的是图片路径
  }
  //发送邮件
  //第一个参数：用户填写的邮箱；第二个参数：邮件标题；第三参数：邮件内容
  public function email($emails,$title,$body){
    $mail= Yii::$app->mailer->compose();   
    $mail->setTo($emails);  
    $mail->setSubject($title);
    $mail->setHtmlBody("<a href='".$body."'>".$body."</a>");
    return $mail->send();
  }
}