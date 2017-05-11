<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>新增会员 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php include("cssjs.php"); ?>
	
	<style>

	</style>
</head>
<body class="fold">			<!--	class="fold" 左导航收缩	-->

<?php include("admin_head.php"); ?>
<?php include("side_l_admin.php"); ?>			<!--	左弹菜单 普通会员首页	-->


<div class="content"><div class="Invoice">

	<div class="s1_tab">
		<ul class="clearfix">
			<li><a href="">代理会员管理</a></li>
			<li><a href="">订单管理</a></li>
			<li><a href="">账户查询</a></li>
			<li><a href="">账户充值</a></li>
			<li><a href="">用户信息</a></li>
			<li class="cur"><a href="huser_huiyuan_add.php">新增会员</a></li>
		</ul>
	</div>

	<div class="place">
		当前位置：<a href="">首页</a> > 新增会员
	</div>
	
	<div class="main_o clearfix" style="padding-bottom:80px;">
	
		<h3 class="title4 clearfix"><strong><a>新增会员</a></strong></h3>
		
		<div class="clearfix">

			<div class="wrap_f clearfix" style="width:60%;">
				<form action="" method="post">
					<div class="item_f"><p><i class="LGntas"></i>用户名：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>密码：</p>
						<div class="r"><input type="password" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>
					<div class="item_f"><p style="padding-top:25px;"><i class="LGntas"></i>会员头像：</p>
						<div class="r" style="position:relative;">
							<img src="/images/z_add2.png" id="img_upload" style="cursor:pointer;float:left;margin-right:8px;" />
							<input type="file" name="Documents" id="documents_upload_button" placeholder="未选择任何文件" class="upload_f1" accept="image/*" style="" />
							<span class="info1_f valign_m" style="height:95px;padding:0;">
								<i>*</i> 请点击选择图片，仅支持JPG、JPEG、GIF、<br/>PNG格式的图片文件，文件不能大于2MB。
							</span>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>昵称：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>企业名称：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>简介：</p>
						<div class="r">
							<textarea class="txt_ft1" style="height:90px;width:70%;"></textarea>
						</div>
						<div class="r">
							<span class="info1_f"><i>*</i> 请输入2-200个字的个人简介</span>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>联系人：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>联系QQ：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>联系电话：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>邮箱：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
						<div class="r">
							<span class="info1_f"><i>*</i> 请填写有效邮箱地址，以便接受通知及订单信息，建议使用QQ，hotmail等邮箱</span>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>地址：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>

					<div class="item_f item_f_2" style="margin-top:50px;">
						<div class="r"><input type="submit" value="提 交" class="sub_f1" style="margin-left:15%;" /></div>
					</div>
				</form>
			</div>
				
		</div>
		
	</div>
	
</div></div>



<?php include("foot.php"); ?>

<script>
/*	日历	*/
	if( $('#datepicker1').length>0 && typeof(picker1)!="object" ){
		var picker1 = new Pikaday({
			field: document.getElementById('datepicker1'),
			firstDay: 1,
			format: "YYYY-MM-DD",
			minDate: new Date('2000-01-01'),
			maxDate: new Date('2020-12-31'),
			yearRange: [2000,2020]
		});
	}
	if( $('#datepicker2').length>0 && typeof(picker2)!="object" ){
		var picker2 = new Pikaday({
			field: document.getElementById('datepicker2'),
			firstDay: 1,
			format: "YYYY-MM-DD",
			minDate: new Date('2000-01-01'),
			maxDate: new Date('2020-12-31'),
			yearRange: [2000,2020]
		});
	}
	if( $('#datepicker3').length>0 && typeof(picker3)!="object" ){
		var picker3 = new Pikaday({
			field: document.getElementById('datepicker3'),
			firstDay: 1,
			format: "YYYY-MM-DD",
			minDate: new Date('2000-01-01'),
			maxDate: new Date('2020-12-31'),
			yearRange: [2000,2020]
		});
	}


</script>

</body>
</html>
