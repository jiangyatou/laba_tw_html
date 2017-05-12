<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>内—首页回拔电话列表 - 亚媒社</title>
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
		当前位置：<a href="">首页</a> > 账户信息
	</div>
	
	<div class="main_o" style="padding-bottom:0px;">
		
		<h3 class="title4"><strong><a href="#">回拔电话管理列表</a></strong></h3>
		
		<div class="dhorder_m">
			<div class="tab1_body">
<table class="table_in1 cur" id="datatable1">
	<thead>
		<tr>
			<th style="width:20%;">用户名</th>
			<th style="">用户角色</th>
			<th style="">联系电话</th>
			<th style="">日期</th>
			<th style="width:15%;">状态</th>
		</tr>
	</thead>
	<tbody id="listcontent">
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color2" href="">完成</a></td>
		</tr>
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color1" href="">回拨</a></td>
		</tr>
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color1" href="">回拨</a></td>
		</tr>
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color1" href="">回拨</a></td>
		</tr>
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color1" href="">回拨</a></td>
		</tr>
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color1" href="">回拨</a></td>
		</tr>
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color1" href="">回拨</a></td>
		</tr>
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color1" href="">回拨</a></td>
		</tr>
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color1" href="">回拨</a></td>
		</tr>
		<tr>
			<td>1171801173@qq.com</td>
			<td>供应商</td>
			<td>137111714990</td>
			<td>2016-9-12 15:12:00</td>
			<td><a class="color1" href="">回拨</a></td>
		</tr>
	</tbody>
</table>
			</div>

		</div>
		
	</div>
	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
	var datatable;
	$(function () {
			var dt_option = {
				"searching" : false,		//是否允许Datatables开启本地搜索
				"paging" : true,			//是否开启本地分页
				"pageLength" : 8,			//每页显示记录数
				"lengthChange" : false,		//是否允许用户改变表格每页显示的记录数 
				"lengthMenu": [ 5, 10, 100 ],		//用户可选择的 每页显示记录数
				"info" : true,
				"columnDefs" : [{
		        	"targets": 'nosort',
					"orderable": false
				}],
				"pagingType": "simple_numbers",
				"language": {
					"search": "搜索",
					sZeroRecords : "没有查询到数据",
					"info": "显示第 _PAGE_/_PAGES_ 页，共_TOTAL_条",
					"infoFiltered": "(筛选自_MAX_条数据)",
					"infoEmpty": "没有符合条件的数据",
					oPaginate: {    
						"sFirst" : "首页",
						"sPrevious" : "上一页",
						"sNext" : "下一页",
						"sLast" : "尾页"    
					},
					searchPlaceholder: "过滤..."
				},
				"order" : [[2,"desc"]]
			};
			datatable =  $('#datatable1').DataTable(dt_option);
	})
	
	$(".table_in1 td a.del").click(function(){
		var $tr = $(this).closest("tr");
		var id = $tr.find("input[name=news_id]").val();
		var name = $tr.find("td.td_title").html();
		
		layer.confirm("确认要删除 文章 " + name + " 吗", {
			btn: ['是','取消']
		}, function(){
			/*
				ajax删除文章
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
