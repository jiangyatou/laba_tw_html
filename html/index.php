<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>管理员首页 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php include("cssjs.php"); ?>
	
</head>
<body>

<?php include("admin_head.php"); ?>
<?php include("side_l_admin.php"); ?>			<!--	左弹菜单 管理员首页	-->

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
				<li class="col-2"><a href=""><img src="/images/ico_yue.png" />账户余额</a></li>
				<li class="col-2"><a href=""><img src="/images/ico_mingxi.png" />收支明细</a></li>
			</ul>
		</div>
		<div class="info_am_r">
			<ul class="clearfix">
				<li class="col-3"><div class="circle2"><img src="/images/ico_dingdan.png" /><i>2</i></div>
					<h4><a href="">平台订单</a></h4>
					<p>21234 条</p></li>
				<li class="col-3"><div class="circle2"><img src="/images/ico_ziyuan.png" /><i>22222</i></div>
					<h4><a href="">平台资源</a></h4>
					<p>21234 条</p></li>
				<li class="col-3"><div class="circle2"><img src="/images/ico_yonghu.png" /><i>222</i></div>
					<h4><a href="">平台用户</a></h4>
					<p>21234 个</p></li>
			</ul>
		</div>
	</div>

	<!--	图表	-->
	<div class="tffb radius1 margin_top_40">
		<h3 class="title1 "><strong><a>投放分布</a></strong></h3>
		<div class="tffb_m axis" id="tb1">
		</div>
	</div>
	
	<div class="clearfix margin_top_40">
		<!--	最新受理订单	-->
		<div class="rwgl radius1">
			<h3 class="title1"><strong><a >最新受理订单</a></strong>
				<a href="order_shouli.php" class="more">more>></a>
			</h3>
			<div class="rwgl_m">

				<div class="tab1_body">
				
	<table class="table_in1 cur">
		<thead>
			<tr>
				<th>订单号</th>
				<th>订单类型</th>
				<th>活动名称</th>
				<th>订单状态</th>		<!--	（受理，未受理）	-->
				<th>生成时间</th>
				<th>金额</th>
				<th>操作</th>			<!--	（查看）	-->
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
				<td><a href="" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="" class="color2">查看</a></td>
			</tr>
			<tr>
				<td>sdf100000815</td>
				<td>文案策划</td>
				<td>互联网大数据新闻编写</td>
				<td>受理</td>
				<td>2016-9-12 15:12:00</td>
				<td class="color1">￥228.00</td>
				<td><a href="" class="color2">查看</a></td>
			</tr>
		</tbody>
	</table>

				</div>
			</div>
		</div>
		
		<!--	新会员、新媒体商	-->
		<div class="member-media">
			<div class="tab2">
				<ul class="clearfix">
					<li class="cur"><a href="javascript:void(0)">新会员</a></li>
					<li><a href="javascript:void(0)">新媒体商</a></li>
				</ul>
			</div>
			<div class="tab2_body">
				<ul class="clearfix" style="display:block;">
					<li><a href="" title="昵称昵称昵称昵称昵称昵称昵称昵称"><img src="/images/pic4.jpg" alt="" /><p>昵称昵称昵称昵称昵称昵称昵称昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>昵称</p></a></li>
				</ul>
				<ul class="clearfix" style="display:none;">
					<li><a href="" title="北京新闻网北京新闻网北京新闻网"><img src="/images/pic4.jpg" alt="" /><p>北京新闻网北京新闻网北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
					<li><a href="" title=""><img src="/images/pic4.jpg" alt="" /><p>北京新闻网</p></a></li>
				</ul>
			</div>
		</div>
		
	</div>

	<!--	新闻中心、盈利状况、联系我们	-->
	<div class="box_1 clearfix margin_top_40">
		<div class="row3 row3_1 radius1">
			<h3 class="title2"><strong><a >新闻中心</a></strong><a href="" class="more">more>></a></h3>
			<ul>
				<li class="clearfix"><a href="" title="你的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
				<li class="clearfix"><a href="" title="你的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
				<li class="clearfix"><a href="" title="你的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
				<li class="clearfix"><a href="" title="你的任务已经被某某媒体商确认电视广告精准投放已经实现">你的任务已经被某某媒体商确认电视广告精准投放已经实现</a><span>2016-9-16</span></li>
			</ul>
			<div class="clr"></div>
		</div>
		<div class="row3 row3_2 radius1">
			<h3 class="title2"><strong><a >盈利状况</a></strong></h3>
			<ul>
				<li class="li1">
					<p>会员总金额<br/>
						<b>￥2100.00</b></p>
					<span></span></li>
				<li class="li2">
					<p>平台纯收益<br/>
						<b>￥1100.00</b></p>
					<span></span></li>
				<li class="li3">
					<p>供应商总金额<br/>
						<b>￥1100.00</b></p>
					<span></span></li>
			</ul>
		</div>
		<div class="row3 row3_3 radius1">
			<h3 class="title2"><strong><a >回拔电话列表</a></strong><a href="" class="more">more>></a></h3>
			<div class="bd_phone">
				<div class="rwgl_m">
					<div class="tab1_body">
						<table class="table_in1 cur">
							<thead>
								<tr>
									<th>用户名</th>
									<th>用户角色</th>
									<th>联系电话</th>
									<th>状态</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1171801173@qq.com</td>
									<td>普通会员</td>
									<td>13711174990</td>
									<td><a href="" class="color2">完成</a></td>
								</tr>
								<tr>
									<td>1171801173@qq.com</td>
									<td>普通会员</td>
									<td>13711174990</td>
									<td><a href="" class="color1">回拔</a></td>
								</tr>
								<tr>
									<td>1171801173@qq.com</td>
									<td>普通会员</td>
									<td>13711174990</td>
									<td><a href="" class="color2">完成</a></td>
								</tr>
								<tr>
									<td>1171801173@qq.com</td>
									<td>普通会员</td>
									<td>13711174990</td>
									<td><a href="" class="color2">完成</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="clr"></div>
</div>
</div></div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
$(function(){
	
	$(".tab2 li a").click(function(){
		var index = $(this).parent().index();
		console.log(index);
		$(this).parent().addClass("cur").siblings().removeClass("cur");
		$(this).closest(".tab2").next(".tab2_body").find("ul").eq(index).css("display","block").siblings("ul").css("display","none");
		return false;
	});
	
});
</script>

</body>
</html>
