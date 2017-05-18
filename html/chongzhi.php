<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>充值 - 亚媒社</title>
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
			<li class="cur"><a href="chongzhi.php">账户充值</a></li>
			<li><a href="person_edit.php">用户信息</a></li>
		</ul>
	</div>

	<div class="place">
		当前位置：<a href="">首页</a> > 安全设置
	</div>
	
	<div class="main_s">
		<h3 class="title3"><strong>帐户充值</strong>
			<a href=""><img class="title3_img" src="/images/arr_s.png" alt="" /></a>
			<span class="title3_i"></span>
		</h3>
		
		<div class="IF1 clearfix" style="padding:70px 0% 0 5%;width:75%;">
			<div class="IF3"><p>充值金额:</p>
				 <input type="text" name="textfield" id="textfield" class="txt_f1" style="width:14%;">
				 <span>元</span>
			</div>
			<div class="LGnt8">
				<ul>
					<li>500元</li>
					<li>1000元</li>
					<li>2000元</li>
					<li>5000元</li>
					<li>10000元</li>
				</ul>
			</div>
			<div class="IF3"><p>充值方式:</p>
				<ul class="LGnt9">
					<li><img src="img/LGnta2.jpg" /></li>
				</ul>
			</div>
			<div class="IF3">
				<p>&nbsp;</p>
				<div class="IFN4">
					<span style="color:#000; font-weight:700">注意事项</span>
					<span>每次10元起充，如果您有支付宝、网上银行账户，请使用在线充值，即时到账！如果您不方便在线充值，可联系客服代充。客服QQ：3315033406 电话：020-34206485</span>
					<span></span>
				</div>
			</div>
			<div class="IF3" style="margin-top:20px;">
				<p>&nbsp;</p>
				<input type="submit" name="button" id="button" value="立即充值" class="Button"/>
			</div>
		</div>



		
	</div>
	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
$(function(){
	$(".LGnt8 ul li").click(function(){
		var a = $.trim($(this).html());
		a = a.replace("元","");
		$("input[name=name1]").val(a);
	});
});

</script>

</body>
</html>
