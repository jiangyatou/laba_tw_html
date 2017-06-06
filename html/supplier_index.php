<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>供应商首页 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php include("cssjs.php"); ?>
	
</head>
<body class="fhide">

<?php include("supplier_head.php"); ?>


<div class="content"><div class="Invoice"><div class="INa1dd">
<div class="main">

	<!--	幻灯片	-->
	<div class="banner">
		<div id="slideBox" class="slideBox">
			<div class="bd">
				<ul>
					<li><a href="#" target="_blank"><img src="/img/1.jpg" /></a></li>
					<li><a href="#" target="_blank"><img src="/img/2.jpg" /></a></li>
					<li><a href="#" target="_blank"><img src="/img/3.jpg" /></a></li>
				</ul>
			</div>
			<div class="hd">
				<ul><li>1</li><li>2</li><li>3</li></ul>
			</div>

			<!-- 下面是前/后按钮代码，如果不需要删除即可 -->
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>
		</div>
	</div>


	<!--	可用余额等信息	-->
	<div class="info_am clearfix margin_top_40">
		<div class="info_am_l clearfix">
			<div class="circle1">
				<h4>可用余额</h4>
				<p>2356636</p>
				<!--	图表	-->
				<div id="tb3">
				
				</div>
			</div>
			<ul class="clearfix">
				<li class="col-3"><a href=""><img src="/images/ico_yue.png" />账户余额</a></li>
				<li class="col-3"><a href="tixian.php"><img src="/images/ico_tixian.png" />申请提现</a></li>
				<li class="col-3"><a href=""><img src="/images/ico_mingxi.png" />收支明细</a></li>
			</ul>
		</div>
		<div class="info_am_r">
			<ul class="clearfix">
				<li class="col-3"><div class="circle2"><img src="/images/ico_dingdan.png" /><i>2</i></div>
					<h4><a href="order_list.php">我的订单</a></h4>
					<p><a href="">查看全部订单</a></p></li>
				<li class="col-3"><div class="circle2"><img src="/images/ico_dailihuiyuan.png" /><i>22</i></div>
					<h4><a href="car_list.php">我的资源</a></h4>
					<p>资源数量</p></li>
				<li class="col-3">
					<div class="circle3">
						<!--	图表	-->
						<div id="tb2">
							
						</div>
					</div>
					<h4><a href="order_list.php">订单统计</a></h4>
					<p>12/月</p></li>
			</ul>
		</div>
	</div>

	<!--	图表	-->
	<div class="tffb radius1 margin_top_40">
		<h3 class="title1"><strong><a >投放分布</a></strong></h3>
		<div class="tffb_m axis" id="tb1">
		</div>
	</div>
	
	<!--	任务管理	-->
	<div class="rwgl radius1 margin_top_40 clearfix" style="width:100%;float:none;">
			<h3 class="title1"><strong><a >最新受理订单</a></strong><a href="order_list.php" class="more">more&gt;&gt;</a></h3>
			<div class="rwgl_m">

				<div class="tab1_body">
				
	<table class="table_in1 cur" id="datatable1">
		<thead>
			<tr>
				<th>ID号</th>
				<th>订单类型</th>
				<th>活动名称</th>
				<th>订单状态</th>
				<th>生成时间</th>
				<th>金额</th>
				<th class="nosort">操作</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>未受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>未受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="order_view.php" class="color2">查看</a></td>
			</tr>
		</tbody>
	</table>

				</div>
			</div>
	</div>

	<!--	新闻中心、盈利状况、联系我们	-->
	<div class="box_1 clearfix margin_top_40">
		<div class="row3 row3_1 radius1">
			<h3 class="title2"><strong><a style="border-left:none;">新闻中心</a></strong><a href="news_lsit.php" class="more">more&gt;&gt;</a></h3>
			<ul>
				<li class="clearfix"><a href="news_view.php" title="你的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
				<li class="clearfix"><a href="news_view.php" title="你的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
				<li class="clearfix"><a href="news_view.php" title="你的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
				<li class="clearfix"><a href="news_view.php" title="你的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
			</ul>
			<div class="clr"></div>
		</div>
		<div class="row3 row3_2 radius1">
			<h3 class="title2"><strong><a style="border-left:none;">新增资源</a></strong></h3>
			<div class="m_row3_2">
				<img src="images/xinzengziyuan.jpg" style="max-width:100%;padding-top:20px;" />
			</div>
		</div>
		<div class="row3 row3_3 radius1">
			<h3 class="title2"><strong><a style="border-left:none;">联系我们</a></strong></h3>
			<div class="row3_3_m">
				<p>请输入你的电话号码<br/>
					稍后即可接到我们的来电。</p>
				<div class="callback">
					<form>
						<input type="submit" name="submit" value="免费回电" class="sub3" />
						<div class="w_txt4">
							<input type="text" name="" value="" placeholder="请输入手机号码" class="txt4" />
						</div>
					</form>
				</div>
				<p style="color:#FF8400;">该通话对您免费，请放心接听。</p>
				<p>手机请直接输入<br/>座机前请加区号</p>
			</div>
		</div>
	</div>


	<div class="clr"></div>
</div>
</div></div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
$(function(){
	
	/*	任务管理 分页	*/
	var datatable;
	var dt_option = {
		"searching" : false,		//是否允许Datatables开启本地搜索
		"paging" : true,			//是否开启本地分页
		"pageLength" : 5,			//每页显示记录数
		"lengthChange" : false,		//是否允许用户改变表格每页显示的记录数 
		"lengthMenu": [ 5, 10, 100 ],		//用户可选择的 每页显示记录数
		"info" : true,
		"columnDefs" : {
	       	"targets": 'nosort',
			"orderable": false
		},
		"pagingType": "simple_numbers",
		"language": {
			"search": "搜索",
			"sZeroRecords" : "没有查询到数据",
			"info": "显示第 _PAGE_/_PAGES_ 页，共_TOTAL_条派单订单",
			"infoFiltered": "(筛选自_MAX_条数据)",
			"infoEmpty": "没有符合条件的数据",
			"oPaginate": {    
				"sFirst" : "首页",
				"sPrevious" : "上一页",
				"sNext" : "下一页",
				"sLast" : "尾页"    
			},
			"searchPlaceholder": "过滤..."
		},
		"order" : [[3,"desc"]]
	};
	datatable =  $('#datatable1').DataTable(dt_option);
});
</script>

</body>
</html>
