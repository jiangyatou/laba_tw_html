<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>账户提现 - 亚媒社</title>
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
			<li class="cur"><a href="account_query.php">账户查询</a></li>
			<li><a href="chongzhi.php">账户充值</a></li>
			<li><a href="person_edit.php">用户信息</a></li>
		</ul>
	</div>

	<div class="place">
		当前位置：<a href="">首页</a> > 账户查询
	</div>
	
	<div class="main_aq">
		<h3 class="title3"><strong>账户详情</strong>
			<a href=""><img class="title3_img" src="/images/arr_s.png" alt="" /></a>
			<span class="title3_i"></span>
		</h3>
		
		<div class="clearfix " >
			<!--	柱状图	-->
			<div class="r minh" id="tb_aq1"></div>
			<div class="account_0">
				<li><p>账户总金额：</p><span>￥2400.00元</span></span></li>
				<li><p>余额：</p><span>￥1800.00元</span></span></li>
				<a href="chongzhi.php" class="account_1">充 值</a>
				<a href="tixian.php" class="account_2">提 现</a>
			</div>
			<div class="account_3">
				<div class="account_4"><img src="/images/aq1.png"></div>
				<div class="account_5">
					<div class="account_6"><img src="/images/aq2.png"></div>
					<p>已发布订单数：<span>5212个</span></p>
				</div>
			</div>
			<!--	柱状图	-->
			<div class="r minh" id="tb_aq2"></div>
		</div>		
	</div>


	<div class="main_o clearfix">
		<h3 class="title3" style="padding:20px 30px 0 20px;"><strong>订单明细</strong>
			<a href=""><img class="title3_img" src="/images/arr_s.png" alt=""></a>
			<span class="title3_i"></span>
		</h3>
		<div class="dhorder_m">
			<div class="tab1">
				<ul>       
					<li class="cur"><a href="#">全部</a></li>
					<li><a href="#">提现</a></li>
					<li><a href="#">充值</a></li>
					<li><a href="#">消费</a></li>
				</ul>
				<div class="search_2">
					<form action="" method="" name="">
						<div class="l">
							<span>起止时间</span>
						</div>

						<div class="l">
							<input type="text" class="txt2" id="datepicker1" />-<input type="text" class="txt2" id="datepicker2" />
						</div>
						<div class="l">
							<select name="" class="sel1" id="mediatype">
								<option value="网络媒体">网络媒体</option>
								<option value="电视媒体">电视媒体</option>
								<option value="1">1</option>
							</select>
						</div>
						<div class="l">
							<input type="text" name="keyword" id="keyword" class="txt5" placeholder="订单号" />
							<input type="submit" name="submit" class="sub4_3" id="searchnews" value="查询" />
						</div>
					</form>
				</div>
				<a href="" class="sub4_2" style="float:right; margin:15px 30px 0 0;">导出财务明细</a>
			</div>
			<div class="tab1_body" style="">
				<table class="table_in1 cur"  id="datatable1">
				<thead>
					<tr>
						<th>日期</th>
						<th>订单号</th>
						<th>订单类型</th>
						<th>订单名称</th>
						<th>订单状态</th>
						<th>截图/链接</th>
						<th>金额</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<!--<td colspan="9">
							<div class="nodata">
								<img src="/images/nodata.png" />
								<p>您目前暂无明细信息</p>
							</div>
						</td>-->
						<td>2016.8.18</td>
						<td>24r34f66</td>
						<td>新闻任务</td>
						<td>秒分必争创业</td>
						<td>完成</td>
						<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="链接/截图" /></a></td>
						<td><span class="color_red2">80元</span></td>
					</tr>
				</tbody>
				</table>
				<table class="table_in1" >
				<thead>
					<tr>
						<th>日期</th>
						<th>订单号</th>
						<th>消费方式</th>
						<th>消费账号</th>
						<th>状态</th>
						<th>金额</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2016.8.18</td>
						<td>24r34f66</td>
						<td>支付宝</td>
						<td>12245687565454</td>
						<td>完成</td>
						<td><span class="color_red2">80元</span></td>
					</tr>
				</tbody>
				</table>
				<table class="table_in1" >
				<thead>
					<tr>
						<th>日期</th>
						<th>订单号</th>
						<th>消费方式</th>
						<th>消费账号</th>
						<th>状态</th>
						<th>金额</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2016.8.18</td>
						<td>24r34f66</td>
						<td>支付宝</td>
						<td>12245687565454</td>
						<td>完成</td>
						<td><span class="color_red2">80元</span></td>
					</tr>
				</tbody>
				</table>
				<table class="table_in1"  >
				<thead>
					<tr>
						<th>日期</th>
						<th>订单号</th>
						<th>订单类型</th>
						<th>订单名称</th>
						<th>订单状态</th>
						<th>截图/链接</th>
						<th>金额</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2016.8.18</td>
						<td>24r34f66</td>
						<td>新闻任务</td>
						<td>秒分必争创业</td>
						<td>完成</td>
						<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="链接/截图" /></a></td>
						<td><span class="color_red2">80元</span></td>
					</tr>
					<tr>
						<td>2016.8.18</td>
						<td>24r34f66</td>
						<td>新闻任务</td>
						<td>秒分必争创业</td>
						<td>完成</td>
						<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="链接/截图" /></a></td>
						<td><span class="color_red2">80元</span></td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
	</div>



</div></div>

<?php include("foot.php"); ?>

<script>

/*	饼状图	*/
if( $('#tb_aq1').length > 0 ){
	var myChart_hv2 = echarts.init(document.getElementById('tb_aq1'));
	option_hv2 = {
		title : {
			text: '',
			subtext: '',
			x:'75',
			y:'bottom',
			textStyle:{
				fontSize: '14',
				color: '#c23531',
				fontWeight: 'normal'
			}
		},
		tooltip : {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		legend: {
			orient: 'vertical',
			left: 'left',
			data: []
		},
		series : [
			{
				name: '访问来源',
				type: 'pie',
				radius : '55%',
				center: ['60%', '55%'],
				data:[
					{value:335, name:'总金额'},
					{value:310, name:'充值金额'},
					{value:234, name:'提现金额'},
					{value:135, name:'消费金额'}
				],
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		]
	};
	myChart_hv2.setOption(option_hv2);
}
	
</script>
<script>
/*	饼状图	*/
if( $('#tb_aq2').length > 0 ){
	var myChart_hv2 = echarts.init(document.getElementById('tb_aq2'));
	option_hv2 = {
		title : {
			text: '',
			subtext: '',
			x:'75',
			y:'bottom',
			textStyle:{
				fontSize: '14',
				color: '#c23531',
				fontWeight: 'normal'
			}
		},
		tooltip : {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		legend: {
			orient: 'vertical',
			left: 'left',
			data: []
		},
		series : [
			{
				name: '访问来源',
				type: 'pie',
				radius : '55%',
				center: ['60%', '55%'],
				data:[
					{value:335, name:'总金额'},
					{value:310, name:'充值金额'},
					{value:234, name:'提现金额'},
					{value:135, name:'消费金额'}
				],
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		]
	};
	myChart_hv2.setOption(option_hv2);
}
	
</script>

</body>
</html>
