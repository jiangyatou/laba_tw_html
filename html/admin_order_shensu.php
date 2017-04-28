<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>任—订单管理 - 申诉订单详情 - 亚媒社</title>
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
		当前位置：<a href="">首页</a> > <a href="">订单管理</a> > 订单申诉
	</div>
	
	<div class="main_o">
		
		<h3 class="title5 clearfix"><strong>我的订单</strong></h3>
		
		<div class="clearfix wrap_f" style="padding-bottom:50px;">
		
			<form action="" method="post">
				<div class="item_f"><p><i class="LGntas"></i>订单号：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style=""></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>所属用户：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style=""></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>所属媒体：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style=""></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>活动类型：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style=""></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>活动名称：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:48%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>完成链接：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:73%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>完成截图：</p>
					<div class="r" style="position:relative;">
						<img src="/images/z_add2.png" id="img_upload" style="cursor:pointer;" />
						<input type="file" name="Documents" id="documents_upload_button" placeholder="未选择任何文件" class="upload_f1" accept="image/*" style="">
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>申诉标题：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:48%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>申诉内容：</p>
					<div class="r">
						<textarea class="txt_ft1"></textarea>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>申诉状态：</p>
					<div class="r">
						<select class="sel_f1">
							<option value="1">已完成</option>
							<option value="2">未完成</option>
							<option value="3">......</option>
						</select>
					</div>
				</div>
				<!--	管理员可处理申诉状态及申诉反馈，首次提交时不显示 ，查看申诉订单时显示	-->
				<div class="item_f"><p><i class="LGntas"></i>申诉反馈：</p>
					<div class="r">
						<textarea class="txt_ft1" style="height:98px;"></textarea>
					</div>
				</div>
				<div class="item_f item_f_2" style="margin-top:50px;">
					<div class="r"><input type="submit" value="确 认" class="sub_f1"></div>
				</div>
			</form>
			
		</div>

	</div>	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
	
$(function(){

});


</script>

</body>
</html>
