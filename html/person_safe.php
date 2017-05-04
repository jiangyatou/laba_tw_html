<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>安全设置 - 亚媒社</title>
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
		<h3 class="title3"><strong>安全设置</strong>
			<a href=""><img class="title3_img" src="/images/arr_s.png" alt="" /></a>
			<span class="title3_i"></span>
		</h3>
		<div class="safe_1">
					<div class="safe_1_t clearfix">
						<img src="/images/avatar.jpg" class="l">
						<div class="r">
							<p>会员帐号：gzanteng@qq.com</p>
							<p>会员等级：直接客户</p>
							<p>注册时间：2016-09-02 22:42:47</p>
						</div>
					</div>
					<div class="safe_1_m clearfix">
						<span class="l">您当前的帐号安全程度</span>
						<span class="r">安全级别：<i>中</i></span>
						<span class="m"><i class="rank_M"></i></span>	<!--	低 rank_L	中 rank_M	高 rank_H	-->
					</div>
					<div class="safe_1_b">
						<ul class="ul_table1">
							<li><span class="sp1">修改密码</span>
								<span class="sp2">安全性高的密码可以使帐号更安全。建议您定期更换密码，设置一个包含字母、符号、数字组成且长度不少于6位的密码。</span>
								<span class="sp3">
									<i class="ok">已设置</i>
								</span>
								<span class="sp4">
									<a href="person_safe_changepass.php">修改</a>
								</span>
							</li>
							<li><span class="sp1">绑定手机</span>
								<span class="sp2">您的手机：134*****609。绑定认证后可用于手机找回密码、接收手机动态验证码等，使您的账户更加安全。</span>
								<span class="sp3">
									<i class="ok">已绑定</i>
								</span>
								<span class="sp4">
									<a href="person_safe_phone.php">查看</a>
								</span>
							</li>
							<li><span class="sp1">绑定邮箱</span>
								<span class="sp2">绑定认证后可用于邮箱找回密码、接受订单提醒、重置用户名等，保障您的账户更加安全。</span>
								<span class="sp3">
									<i class="not-ok">未绑定</i>
								</span>
								<span class="sp4">
									<a href="person_safe_email.php">修改</a>
								</span>
							</li>
							<li><span class="sp1">密保问题</span>
								<span class="sp2">设置安保问题可以进一步提升您的账户安全性及重置用户名。</span>
								<span class="sp3">
									<i class="ok">已设置</i>
								</span>
								<span class="sp4">
									<a href="person_safe_question.php">修改</a>
								</span>
							</li>
							<li><span class="sp1">证件信息</span>
								<span class="sp2">证件以及个人信息涉及您的隐秘信息，可以用于确认您的身份。</span>
								<span class="sp3">
									<i class="not-ok">未设置</i>
								</span>
								<span class="sp4">
									<a href="person_safe_zhengjianinfo.php">修改</a>
								</span>
							</li>
						</ul>
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
