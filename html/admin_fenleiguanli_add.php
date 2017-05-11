<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>内—添加分类栏目 - 亚媒社</title>
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
		当前位置：<a href="">首页</a> > 添加分类栏目
	</div>
	
	<div class="main_o" style="padding-bottom:50px;">
		
		<h3 class="title4"><strong><a href="#">添加分类栏目</a></strong></h3>
		
		<div class="clearfix wrap_f" style="padding:70px 10px 100px;width:30%;min-width:400px;">
		
			<form action="" method="post">
				<div class="item_f"><p><i class="LGntas"></i>栏目类型：</p>
					<div class="r">
						<select class="sel_f1" style="min-width:150px;width:50%;">
							<option value="">广告主</option>
							<option value="">媒体主</option>
							<option value="">质检标准</option>
							<option value="">最新消息</option>
						</select>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>分类名称：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;" /></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>分类排序：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;" /></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>状态：</p>
					<div class="r radio_w">
						<label><input type="radio" name="status" class="radio_f" value="1" />在线</label>
						<label><input type="radio" name="status" class="radio_f" value="2" />下架</label>
					</div>
				</div>
				<div class="item_f item_f_2" style="margin-top:120px;">
					<div class="r"><input type="submit" value="确 认" class="sub_f1" style="margin-left:10%;" ></div>
				</div>
			</form>
			
		</div>
		
	</div>
	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">

</script>

</body>
</html>
