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
							<li class="active">安居客控制台</li>
							<li class="active">账户管理</li>
							<li class="active">修改密码</li>
						</ul><!-- .breadcrumb -->
					</div>
					<div class="page-content">
							<div class="row">
									<div class="col-xs-12">
									<div class="space-4"></div>
									<form class="form-horizontal" role="form" action="<?php Url::toRoute(['account/change'])?>" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 初始密码 </label>
										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="初始密码" class="col-xs-10 col-sm-5" name="pwd" value="admin_password"/>
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 新密码 </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="新密码" class="col-xs-10 col-sm-5" name="pwds"/>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 确认密码 </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="确认密码" class="col-xs-10 col-sm-5" name="pwdss"/>
										</div>
									</div>

                                        <div>
                                            <input type="submit" value="确认">
                                        </div>

<!--									<div class="clearfix form-actions">-->
<!--										<div class="col-md-offset-3 col-md-9">-->
<!--											<button class="btn btn-info" type="button">-->
<!--												<i class="icon-ok bigger-110"></i>-->
<!--												确认-->
<!--											</button>-->
<!---->
<!--											&nbsp; &nbsp; &nbsp;-->
<!--											<button class="btn" type="reset">-->
<!--												<i class="icon-undo bigger-110"></i>-->
<!--												重置-->
<!--											</button>-->
<!--										</div>-->
<!--									</div>-->


								</form>
									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->