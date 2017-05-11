<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>内—分类管理 - 亚媒社</title>
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
		当前位置：<a href="">首页</a> > 分类管理
	</div>
	
	<div class="main_o" style="padding-bottom:50px;">
		
		<h3 class="title4"><strong><a href="#">分类管理</a></strong></h3>
		
		<div class="dhorder_m">
			<div class="tab1_body">
<table class="table_in1 cur" id="datatable1">
	<thead>
		<tr>
			<th style="width:15%;">序号</th>
			<th style="width:23%;">分类名称</th>
			<th style="width:22%;">栏目类型</th>
			<th style="width:20%;">状态</th>
			<th style="width:20%;">操作</th>
		</tr>
	</thead>
	<tbody id="listcontent">
		<tr data-id="1" data-name="广告主">
			<td>1</td>
			<td>广告主</td>
			<td>常见问题</td>
			<td>在线</td>
			<td><a class="color2" href="">查看</a> <span class="color2">|</span> <a class="color2 del" href="">删除</a></td>
		</tr>
		<tr data-id="2" data-name="广告主2">
			<td>2</td>
			<td>广告主2</td>
			<td>常见问题</td>
			<td>在线</td>
			<td><a class="color2" href="">查看</a> <span class="color2">|</span> <a class="color2 del" href="">删除</a></td>
		</tr>
		<tr data-id="3" data-name="广告主3">
			<td>3</td>
			<td>广告主3</td>
			<td>常见问题</td>
			<td>在线</td>
			<td><a class="color2" href="">查看</a> <span class="color2">|</span> <a class="color2 del" href="">删除</a></td>
		</tr>
		<tr data-id="4" data-name="广告主">
			<td>4</td>
			<td>广告主</td>
			<td>常见问题</td>
			<td>在线</td>
			<td><a class="color2" href="">查看</a> <span class="color2">|</span> <a class="color2 del" href="">删除</a></td>
		</tr>
		<tr data-id="5" data-name="广告主">
			<td>5</td>
			<td>广告主</td>
			<td>常见问题</td>
			<td>在线</td>
			<td><a class="color2" href="">查看</a> <span class="color2">|</span> <a class="color2 del" href="">删除</a></td>
		</tr>
		<tr data-id="6" data-name="广告主">
			<td>6</td>
			<td>广告主</td>
			<td>常见问题</td>
			<td>在线</td>
			<td><a class="color2" href="">查看</a> <span class="color2">|</span> <a class="color2 del" href="">删除</a></td>
		</tr>
		<tr data-id="7" data-name="广告主">
			<td>7</td>
			<td>广告主</td>
			<td>常见问题</td>
			<td>在线</td>
			<td><a class="color2" href="">查看</a> <span class="color2">|</span> <a class="color2 del" href="">删除</a></td>
		</tr>
		<tr data-id="8" data-name="广告主">
			<td>8</td>
			<td>广告主</td>
			<td>常见问题</td>
			<td>在线</td>
			<td><a class="color2" href="">查看</a> <span class="color2">|</span> <a class="color2 del" href="">删除</a></td>
		</tr>
	</tbody>
</table>
			</div>

		</div>
		
	</div>
	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
$(".table_in1 td a.del").click(function(){
	var $tr = $(this).closest("tr");
	var id = $tr.attr("data-id");
	var name = $tr.attr("data-name");
	
	layer.confirm("确认要删除 分类 " + name + " 吗", {
		btn: ['是','取消']
	}, function(){
		/*
			ajax删除分类
		*/
		$tr.remove();
		layer.msg("分类 " + name + " 删除成功");
	}, function(){

	});

	return false;
});
</script>

</body>
</html>
