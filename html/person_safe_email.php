<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>安—绑定邮箱 - 亚媒社</title>
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
			<li><a href="">订单管理</a></li>
			<li><a href="">账户查询</a></li>
			<li><a href="">账户充值</a></li>
			<li class="cur"><a href="">用户信息</a></li>
		</ul>
	</div>

	<div class="place">
		当前位置：<a href="">首页</a> > 安全设置
	</div>
	
	<div class="main_s">
		<h3 class="title3"><strong>绑定邮箱</strong>
			<a href=""><img class="title3_img" src="/images/arr_s.png" alt="" /></a>
			<span class="title3_i"></span>
		</h3>
		<div class="safe_2 clearfix">
			<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>会员帐号：</p>
				gzanteng@qq.com
			</div>
			<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>邮箱地址：</p>
				<input type="text" name="textfield" id="textfield" class="txt6">
				<div><span>输入有效的邮箱地址，以便接收系统邮件通知及重置用户名 示例：cndns@163.com</span></div>
			</div>
			<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>邮箱验证码：</p>
				<input type="text" name="textfield" id="textfield" class="Bpass_" style="margin-right: 10px;height:30px;line-height:30px;">
				<input type="submit" name="button1" value="获取验证码" class="LGn3" style="cursor:pointer;">
			</div>
			<div class="WMain3 WMain3_2 clearfix" style="margin-top:50px;">
				<input type="submit" value="提交" class="sub5">
			</div>
			<div class="clr"></div>
		</div>
		<div class="safe2_b">
			友情提醒：用户名和密码要做好相应记录，以免忘记。
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
