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
	
	<div class="main_s">
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
		<!--订单明细-->
		<div class="detail">
			<h3 class="title3"><strong>账户详情</strong>
				<a href=""><img class="title3_img" src="/images/arr_s.png" alt="" /></a>
				<span class="title3_i"></span>
			</h3>
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
