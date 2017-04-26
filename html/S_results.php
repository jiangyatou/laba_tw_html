<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>头部搜索结果 - 亚媒社</title>
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

	<div class="banner2">
		<img src="images/1.jpg" width="100%">
	</div>
	
	<div class="place">
		当前位置：<a href="">首页</a> > “搜索关键词”搜索结果
	</div>
	
	<div class="main_o clearfix">
		<div class="dhorder_m" style="padding-top:2px;">
			<div class="tab1_body" style="border-top:1px solid #E5E5E5;border-radius:12px 12px 0 0;">
<table class="table_in1 cur" id="datatable1">
	<thead>
		<tr>
			<th style="border-radius:12px 0 0 0;">序号</th>
			<th>媒体名称</th>
			<th>媒体类型</th>
			<th>入口示意图</th>
			<th>媒体简介</th>
			<th>金额</th>
			<th style="border-radius:0 12px 0 0;" class="nosort">操作</th>
		</tr>
	</thead>
	<tbody id="listcontent">
		<tr>
			<td>10</td>
			<td class="media-pic"><img src="images/medialogo.png" />新浪</td>
			<td>文案策划</td>
			<td></td>
			<td>媒体简介</td>
			<td class="color1">￥228.00</td>
			<td><a class="color2" href="">任务发布</a></td>
		</tr>
		<tr>
			<td>11</td>
			<td class="media-pic"><img src="images/medialogo.png" />新浪</td>
			<td>文案策划</td>
			<td></td>
			<td>媒体简介</td>
			<td class="color1">￥228.00</td>
			<td><a class="color2" href="">任务发布</a></td>
		</tr>
		<tr>
			<td>12</td>
			<td class="media-pic"><img src="images/medialogo.png" />新浪</td>
			<td>文案策划</td>
			<td></td>
			<td>媒体简介</td>
			<td class="color1">￥228.00</td>
			<td><a class="color2" href="">任务发布</a></td>
		</tr>
	</tbody>
</table>
			</div>
		</div>

							
	</div>	

</div></div>



<?php include("foot.php"); ?>

<script>
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
				"order" : [[3,"desc"]]
			};
			datatable =  $('#datatable1').DataTable(dt_option);
	});
</script>

</body>
</html>
