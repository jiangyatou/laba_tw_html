<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>安—修改密码 - 亚媒社</title>
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
			<li><a href="">账户查询</a></li>
			<li><a href="chongzhi.php">账户充值</a></li>
			<li class="cur"><a href="person_edit.php">用户信息</a></li>
		</ul>
	</div>

	<div class="place">
		当前位置：<a href="putong_index.php">首页</a> > <a href="person_edit.php">用户信息</a> > <a href="person_safe.php">安全设置</a>
	</div>
	
	<div class="main_s">
		<h3 class="title3"><strong>修改密码</strong>
			<a href=""><img class="title3_img" src="/images/arr_s.png" alt="" /></a>
			<span class="title3_i"></span>
		</h3>
		
		<div class="safe_2 clearfix">
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>会员帐号：</p>
						gzanteng@qq.com
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>旧密码：</p>
						<input type="password" name="textfield" id="textfield" class="txt6">
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>新密码：</p>
						<input type="password" name="textfield" id="textfield" class="txt6">
						<div>由字母、数字和特殊符号组成，区分大小写(6~16个字符)。示例：cndns456@#!</div>
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>确认密码：</p>
						<input type="password" name="textfield" id="textfield" class="txt6">
					</div>
					<div class="WMain3 WMain3_2 clearfix" style="margin-top:50px;">
						<input type="submit" value="提交" class="sub5">
					</div>
					<div class="clr"></div>
		</div>
		<div class="safe2_b" style="width:auto;">
<div style="width:440px;margin:0 auto;text-align:left;position:relative;left:25px;">
密码设置技巧<br/>
密码设置至少6位以上，由数字、字母和符号混合而成，安全性较高。<br/>
不要和用户名太相似，这样容易被人猜到。<br/>
不要用手机号、电话号码、生日、学号、身份证号等个人信息。<br/>
<br/>
友情提醒：用户名和密码要做好相应记录，以免忘记。
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
