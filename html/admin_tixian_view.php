<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>帐—提现详情 - 亚媒社</title>
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

	<div class="place">
		当前位置：<a href="">首页</a> > 帐户信息
	</div>
	
	<div class="main_o clearfix" style="padding-bottom:60px;">
	
		<h3 class="title4 clearfix"><strong><a>提现详情</a></strong></h3>
		
		<div class="clearfix">

			<div class="wrap_f clearfix" style="width:60%;">
			
<!--
	金额超出五千客服联系确认信息，完成后并发送邮件通知
-->

				<form action="" method="post">
					<div class="item_f"><p><i class="LGntas"></i>订单号：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>用户名：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>用户角色：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:16%;" value="高级会员" /></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>账户余额：</p>
						<div class="r">
							<input type="text" name="textfield" id="textfield" class="txt_f1" style="width:16%;"><span class="color1" style="padding-left:10px;font-size:16px;">元</span>
							<span class="info2_f">
								<i>*</i> 用户当前账户余额
							</span>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>提现金额：</p>
						<div class="r">
							<input type="text" name="textfield" id="textfield" class="txt_f1" style="width:16%;"><span class="color1" style="padding-left:10px;font-size:16px;">元</span>
							<span class="info2_f">
								<i>*</i> 验证用户账户可用余额不得大于提现金额
							</span>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>提现方式：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:16%;" value="支付宝" /></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>提款账号：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:38%;" value="支付宝" /></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>状态：</p>
						<div class="r radio_w">
							<label><input type="radio" name="status" class="radio_f" value="1" />完成</label>
							<label><input type="radio" name="status" class="radio_f" value="2" />审核中</label>
							<label><input type="radio" name="status" class="radio_f" value="3" />拒提现</label>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>备注：</p>
						<div class="r">
							<textarea class="txt_ft1" style="height:90px;"></textarea>
						</div>
					</div>
					<div class="item_f item_f_2" style="margin-top:50px;">
						<div class="r"><input type="submit" value="确 认" class="sub_f1" style="amargin-left:15%;" /></div>
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
