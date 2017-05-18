<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>安—密保 - 亚媒社</title>
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
		当前位置：<a href="putong_index.php">首页</a> > <a href="person_edit.php">用户信息</a> > <a href="person_safe.php">安全设置</a>
	</div>
	
	<div class="main_s">
		<h3 class="title3"><strong>密保设置</strong>
			<a href=""><img class="title3_img" src="/images/arr_s.png" alt="" /></a>
			<span class="title3_i"></span>
		</h3>
		<div class="safe_2 clearfix">
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>会员帐号：</p>
						gzanteng@qq.com
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>兴趣爱好类：</p>
						<select class="sel_2" style="height: 40px; color: #666">
							<option value="">请选择问题</option>
							<option value="">请选择问题请选择问题1</option>
							<option value="">请选择问题2</option>
						</select>
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>您的回答：</p>
						<input type="text" name="textfield" id="textfield" class="txt6"  style="height: 40px; color: #666">
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>家庭工作类：</p>
						<select class="sel_2" style="height: 40px; color: #666">
							<option value="">请选择问题</option>
							<option value="">请选择问题请选择问题1</option>
							<option value="">请选择问题2</option>
						</select>
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>您的回答：</p>
						<input type="text" name="textfield" id="textfield" class="txt6"  style="height: 40px; color: #666">
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>教育杂项类：</p>
						<select class="sel_2" style="height: 40px; color: #666">
							<option value="">请选择问题</option>
							<option value="">请选择问题请选择问题1</option>
							<option value="">请选择问题2</option>
						</select>
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>您的回答：</p>
						<input type="text" name="textfield" id="textfield" class="txt6"  style="height: 40px; color: #666">
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
