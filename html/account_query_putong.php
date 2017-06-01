<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>账户查询_普通会员 - 亚媒社</title>
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
				<ul>
					<li><p>账户总金额：</p><span>￥5210.00元</span></span></li>
					<li><p>余额：</p><span>￥125.00元</span></span></li>
				</ul>
				<a href="chongzhi.php" class="account_1">充 值</a>
				<a href="tixian.php" class="account_2">提 现</a>
			</div>
			<div class="account_3">
				<div class="account_4"><img src="/images/aq1.png"></div>
				<div class="account_5">
					<div class="account_6"><img src="/images/aq2.png"></div>
					<p>已发布订单数：<span>545个</span></p>
				</div>
			</div>
			<!--	柱状图	-->
			<div class="r minh" id="tb_aq2"></div>
		</div>		
	</div>


	<div class="main_o clearfix" style="padding-bottom:0;">
		<h3 class="title3" style="padding:20px 30px 0 20px;"><strong>财务明细</strong>
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
				<div class="tab1_body_m" style="display:block;">
					<table class="table_in1 cur" id="datatable1">
						<thead>
							<tr>
								<th>日期</th>
								<th>订单号</th>
								<th>订单类型</th>
								<th>活动名称</th>
								<th>状态</th>
								<th>截图/链接</th>
								<th>金额</th>
							</tr>
						</thead>
						<tbody id="listcontent1">
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>新闻发布</td>
								<td>新闻发布会公告</td>
								<td>未完成</td>
								<td class="link-pic"></td>
								<td class="color_red2">￥228.00</td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>新闻发布</td>
								<td>新闻发布会公告</td>
								<td>未完成</td>
								<td class="link-pic">http://www.baidu.com</td>
								<td class="color_red2">￥228.00</td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>新闻发布</td>
								<td>新闻发布会公告</td>
								<td>未完成</td>
								<td class="link-pic"><a href=""><img src="/img/1.jpg"></a></td>
								<td class="color_red2">￥228.00</td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>新闻发布</td>
								<td>新闻发布会公告</td>
								<td>未完成</td>
								<td class="link-pic">http://www.baidu.com</td>
								<td class="color_red2">￥228.00</td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>新闻发布</td>
								<td>新闻发布会公告</td>
								<td>未完成</td>
								<td class="link-pic"><a href=""><img src="/img/1.jpg"></a></td>
								<td class="color_red2">￥228.00</td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>新闻发布</td>
								<td>新闻发布会公告</td>
								<td>未完成</td>
								<td class="link-pic">http://www.baidu.com</td>
								<td class="color_red2">￥228.00</td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>新闻发布</td>
								<td>新闻发布会公告</td>
								<td>未完成</td>
								<td class="link-pic"><a href=""><img src="/img/1.jpg"></a></td>
								<td class="color_red2">￥228.00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab1_body_m" style="display:none;">
					<table class="table_in1 cur" id="datatable2">
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
						<tbody id="listcontent2">
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>支付宝</td>
								<td>15424874521</td>
								<td>未完成</td>
								<td><span class="color_red2">80元</span></td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>支付宝</td>
								<td>15424874521</td>
								<td>未完成</td>
								<td><span class="color_red2">80元</span></td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>支付宝</td>
								<td>15424874521</td>
								<td>未完成</td>
								<td><span class="color_red2">80元</span></td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>支付宝</td>
								<td>15424874521</td>
								<td>未完成</td>
								<td><span class="color_red2">80元</span></td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>支付宝</td>
								<td>15424874521</td>
								<td>未完成</td>
								<td><span class="color_red2">80元</span></td>
							</tr>
							<tr>
								<td>2017-4-20 12:25</td>
								<td>sdf26215648621</td>
								<td>支付宝</td>
								<td>15424874521</td>
								<td>未完成</td>
								<td><span class="color_red2">80元</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab1_body_m" style="display:none;">
					<table class="table_in1 cur" id="datatable3">
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
						<tbody id="listcontent3">
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
				</div>
				<div class="tab1_body_m" style="display:none;">
					<table class="table_in1 cur" id="datatable4">
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
						<tbody id="listcontent4">
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
	</div>



</div></div>

<?php include("foot.php"); ?>

<script>
/*	日历	*/
	if( $('#datepicker1').length>0 && typeof(picker1)!="object" ){
		var picker1 = new Pikaday({
			field: document.getElementById('datepicker1'),
			firstDay: 1,
			format: "YYYY-MM-DD",
			minDate: new Date('2000-01-01'),
			maxDate: new Date('2020-12-31'),
			yearRange: [2000,2020]
		});
	}
	if( $('#datepicker2').length>0 && typeof(picker2)!="object" ){
		var picker2 = new Pikaday({
			field: document.getElementById('datepicker2'),
			firstDay: 1,
			format: "YYYY-MM-DD",
			minDate: new Date('2000-01-01'),
			maxDate: new Date('2020-12-31'),
			yearRange: [2000,2020]
		});
	}

/*	饼状图	*/
if( $('#tb_aq1').length > 0 ){
	var myChart_hv2 = echarts.init(document.getElementById('tb_aq1'));
	option_hv2 = {
		title : {
			text: '',
			subtext: '',
			x:'center',
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
				radius : '45%',
				center: ['50%', '55%'],
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
			text: '发布订单的类型统计',
			subtext: '',
			x:'center',
			y:'top',
			textStyle:{
				fontSize: '18',
				color: '#474747',
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
				radius : '45%',
				center: ['50%', '55%'],
				data:[
					{value:335, name:'网络媒体'},
					{value:100, name:'户外媒体'},
					{value:200, name:'平面媒体'},
					{value:330, name:'电视媒体'},
					{value:444, name:'广播媒体'},
					{value:555, name:'记者预约'},
					{value:666, name:'内容代写'},
					{value:777, name:'宣传定制'}
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
/*	表格切换分页	*/
	var datatable0;
	var datatable1;
	var datatable2;
	var datatable3;
	var datatable4;
	$(function () {
			var dt_option = {
				"searching" : false,		//是否允许Datatables开启本地搜索
				"paging" : true,			//是否开启本地分页
				"pageLength" : 5,			//每页显示记录数
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
				}
				,"order" : [[0,"desc"]]
			};
			datatable1 =  $('#datatable1').DataTable(dt_option);
			datatable2 =  $('#datatable2').DataTable(dt_option);
			datatable3 =  $('#datatable3').DataTable(dt_option);
			datatable4 =  $('#datatable4').DataTable(dt_option);
			datatable0 = datatable1;
			
            $("#searchnews").click(function () {
				event.preventDefault();
				var data_table,
					index = $(".tab1 ul li.cur").index();
				if( index == "0" ){
					url = "data_huser_acount_query_all.php";
					data_table = "#datatable1";
					data_tbody = "#listcontent1";
					datatable0 = datatable1;
				}
				if( index == "1" ){
					url = "data_huser_acount_query_tixian.php";
					data_table = "#datatable2";
					data_tbody = "#listcontent2";
					datatable0 = datatable2;
				}
				if( index == "2" ){
					url = "data_huser_acount_query_chongzhi.php";
					data_table = "#datatable3";
					data_tbody = "#listcontent3";
					datatable0 = datatable3;
				}
				if( index == "3" ){
					url = "data_huser_acount_query_xiaofei.php";
					data_table = "#datatable4";
					data_tbody = "#listcontent4";
					datatable0 = datatable4;
				}
				console.log(index);
				console.log(url);
                $.ajax({
                    type:"post",
					url:url,
					dataType: 'html',
                    data:{
                        'start':$("#datepicker1").val(),
                        'end':$("#datepicker2").val(),
                        'mediatype':$("#mediatype").val(),
                        'keytype':$("#keytype").val(),
                        'orderid':$("#keyword").val()
                    },
                    success:function (msg) {
						console.log("msg:" + msg);
						console.log("index:" + index);
						msg = $.trim(msg);
                        if(msg){
							if( $.fn.dataTable.isDataTable(data_table) ){
								datatable0.destroy();
							}
							$(data_tbody).html(msg);
							datatable0 =  $(data_table).DataTable(dt_option);
                        } else {
							if( $.fn.dataTable.isDataTable(data_table) ){
								datatable0.destroy();
							}
                            $(data_tbody).html("<tr><td colspan='8'>没有查询到数据！</td></tr>");			//7 表格列数
//                        window.location.reload();
                        }
						if( index == "0" ){	datatable1 = datatable0;	}
						if( index == "1" ){	datatable2 = datatable0;	}
						if( index == "2" ){	datatable3 = datatable0;	}
						if( index == "3" ){	datatable4 = datatable0;	}
                    }
                })
            })
			
		$(".tab1 ul li a").unbind("click");		/*	取消原切换事件，改成下面的新切换事件		直接跳转	*/
/* 		$(".tab1>ul>li>a").click(function(){
			var index=$(this).parent("li").index();
			$(this).parent("li").addClass("cur").siblings("li").removeClass("cur");
			$(this).parents(".tab1").next(".tab1_body").find(".tab1_body_m").css("display","none").eq(index).css("display","block");
			return false;
		});
*/
	})
	
</script>

</body>
</html>
