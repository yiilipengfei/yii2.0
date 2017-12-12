<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css//sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />


</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">后台登录</h3>
                </div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin();?>
                    <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="账号" name="admin_name" id="admin_name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="密码" name="password" type="password" value="" id="admin_password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">记住密码
                                </label>
                            </div>
                        <div class="row cl">
                                <input name="" type="button"  value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;" id="dl" class="btn btn-lg btn-success btn-block">
                        </div>
<!--                            <a href="index.html" class="btn btn-lg btn-success btn-block">登录</a>-->
                            <div style="text-align:right;">
                                <a href="<?php echo Url::toRoute(['login/register']);?>" class="btn ">没有账号密码？点击注册</a>
                            </div>

                        </fieldset>
            <?php $form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    $('#dl').click(function() {
//    alert($);return;
        var admin_name = $("#admin_name").val();
        var admin_password = $("#admin_password").val();
//    alert(admin_password);return;
        $.ajax({
            type: 'post',
            url: '?r=login/index',
            data: {admin_name: admin_name, admin_password: admin_password},
            dataType: 'json',
            success:function (res){
//            console.log(res);
                if(res == 0)
                {
                    location.href='http://localhost/yii2.0/advanced/backend/web/index.php?r=login/login';
                }
                if(res == 1)
                {
                    location.href='http://localhost/yii2.0/advanced/backend/web/index.php?r=login/login';
                }
                if(res == 2)
                {
                   location.href='http://localhost/yii2.0/advanced/backend/web/index.php?r=index/index';
                }
            }
        })
    });
</script>

</body>

</html>
