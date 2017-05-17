<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>内—添加文章 - 亚媒社</title>
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
		当前位置：<a href="">首页</a> > 添加文章
	</div>
	
	<div class="main_o" style="padding-bottom:50px;">
		
		<h3 class="title4"><strong><a href="#">添加文章</a></strong></h3>
		
		<div class="clearfix wrap_f" style="padding:50px 10px 30px;width:70%;min-width:400px;">
		
			<form action="" method="post">
				<div class="item_f"><p><i class="LGntas"></i>标题：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;" /></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>来源：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="min-width:176px;width:10%;" /></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>发布栏目：</p>
					<div class="r">
						<select class="sel_f1" style="min-width:200px;width:auto;">
							<option value="">请选择栏目</option>
							<option value="">栏目一</option>
							<option value="">栏目二</option>
						</select>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>内容编辑：</p>
					<div class="r">
						<script id="editor" name="content" type="text/plain" style="min-height:300px;"></script>
					</div>
				</div>
				<div class="item_f item_f_2" style="margin-top:50px;">
					<div class="r"><input type="submit" value="确 认" class="sub_f1" style="margin-left:25%;" ></div>
				</div>
			</form>
			
		</div>
		
	</div>
	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
	var ue = UE.getEditor('editor');		//	UEditor API 文档	http://ueditor.baidu.com/doc/#UE.Editor:focus
	setTimeout(function () {
		ue.execCommand('drafts');
	}, 1000);
</script>

</body>
</html>
