<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
						<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active">后台管理控制台</li>
						</ul><!-- .breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								控制台
								<small>
									<i class="icon-double-angle-right"></i>
                                    <a href="<?php Url::toRoute(['index/list'])?>">查看</a>

								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-block alert-success">
<!--									<button type="button" class="close" data-dismiss="alert">-->
<!--										<i class="icon-remove"></i>-->
<!--									</button>-->
<!--									<i class="icon-ok green"></i>-->
                                    <h1>欢迎<font color="red"><?php echo $name?></font>登录</h1>
                                    <h3><a href="<?= Url::toRoute(['index/loginout'])?>">退出</a></h3>
									<strong class="green">
										后台系统
									</strong>
							  </div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->


















