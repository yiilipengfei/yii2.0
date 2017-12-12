  <?php 
         use yii\helpers\Url;
         ?>
 后台   <a href="<?php echo Url::to(['login/login']); ?>">登录</a>
 <a href="<?php echo Url::to(['login/register']); ?>">注册</a>