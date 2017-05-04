<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>会员信息修改 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php include("cssjs.php"); ?>
	
	<style>

	</style>
</head>
<body class="fold">			<!--	class="fold" 左导航收缩	-->

<?php include("head.php"); ?>
<?php include("side_l_user.php"); ?>			<!--	左弹菜单 普通会员首页	-->


<div class="content"><div class="Invoice">

	<div class="s1_tab">
		<ul class="clearfix">
			<li><a href="order_list.php">订单管理</a></li>
			<li><a href="account_query.php">账户查询</a></li>
			<li><a href="chongzhi.php">账户充值</a></li>
			<li class="cur"><a href="person_edit.php">用户信息</a></li>
		</ul>
	</div>

	<div class="place">
		当前位置：<a href="">首页</a> > 用户信息
	</div>
	
	<div class="main_s">
		<h3 class="title3"><strong>用户资料</strong>
			<a href=""><img class="title3_img" src="/images/arr_s.png" alt="" /></a>
			<span class="title3_i"></span>
		</h3>
		<div class="safe_1 clearfix">

			<div class="wrap_fl clearfix">
				<form action="" method="post">
					<div class="item_f"><p><i class="LGntas"></i>用户名：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:50%;"></div>
					</div>
					<div class="item_f"><p style="padding-top:25px;"><i class="LGntas"></i>会员头像：</p>
						<div class="r" style="position:relative;">
							<img src="/images/z_add2.png" id="img_upload" style="cursor:pointer;float:left;margin-right:8px;" />
							<input type="file" name="Documents" id="documents_upload_button" placeholder="未选择任何文件" class="upload_f1" accept="image/*" style="" />
							<span class="info1_f valign_m" style="height:95px;padding:0;">
								<i>*</i> 请点击选择图片，仅支持JPG、JPEG、GIF、PNG格式的图片文件，文件不能大于2MB。
							</span>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>昵称：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:50%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>企业名称：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:50%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>简介：</p>
						<div class="r">
							<textarea class="txt_ft1" style="height:98px;"></textarea>
						</div>
						<div class="r">
							<span class="info1_f"><i>*</i> 请输入2-200个字的个人简介</span>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>联系人：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:50%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>QQ：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:50%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>手机：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:50%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>邮箱：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:50%;"></div>
						<div class="r">
							<span class="info1_f"><i>*</i> 请填写有效邮箱地址，以便接受通知及订单信息，建议使用QQ，hotmail等邮箱</span>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>地址：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:50%;"></div>
					</div>
					<div class="item_f item_f_2" style="margin-top:50px;">
						<div class="r"><input type="submit" value="提 交" class="sub_f1" style="margin-left:15%;" /></div>
					</div>
				</form>
			</div>
			
			<div class="wrap_fr">
				<div class="wrap_fr1">
					<h3>完善资料</h3>
					<p>资料更完整，账号更安全。完善资料将帮助我们更好的提供服务。</p>
				</div>
				<div class="wrap_fr2">
					<img src="images/pic_ue.jpg" />
				</div>
			</div>
				
		</div>
	</div>
	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">

//	$(".logo").addClass("hidden");
$(function(){
//	$(".sidebar-open-button").click();
});

</script>

</body>
</html>
