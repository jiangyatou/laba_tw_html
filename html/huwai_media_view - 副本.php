<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>户外媒体查看详情 - 亚媒社</title>
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
		当前位置：<a href="">首页</a> > 新闻约稿
	</div>
	
	<div class="main_o clearfix" style="">
	
		<h3 class="title5 clearfix"><strong>户外大牌</strong></h3>
		
		<div class="vbox_1 clearfix">
			<div class="vbox_1_l">
				图片幻灯片+放大镜？
			</div>
			<div class="vbox_1_r">
				<h3 class="vbox_1_r_h3">广州机场路1心酒店墙面喷绘</h3>
				<div class="vbox_1_r_info1">
					<p><span>刊例价：￥40万</span>
						<span style="margin:0;">平台价备注：￥40万/年/双面</span>
						<span>平台价：<i>￥24万</i></span>
					</p>
				</div>
				<div class="vbox_1_r_info2">
					<p><span>所在地：</span>湖北/省直辖行政单位/潜江市</p>
					<p><span>媒体形式：</span>跨街大牌</p>
					<p><span>广告商圈：</span>城际高速公路</p>
					<p><span>媒体面积：</span>120.0平米</p>
				</div>
				<div class="vbox_1_r_btn clearfix">
					<a href="" style="margin-right:50px;">立即预订</a>
					<a href="" style="background:#aab2c5;">收藏资源</a>
				</div>
				<div class="vbox_1_r_share">
					分享资源
					<p class="p1">点击量：<i>327</i> 评价数：<i>0</i></p>
				</div>
			</div>
		</div>
		
		<div class="vbox_2">
			<div class="vbox_2_t">
				<ul class="clearfix">
					<li><a href="" class="cur">基本信息</a></li>
					<li><a href="">媒体地图</a></li>
					<li><a href="">评论</a></li>
				</ul>
			</div>
			<div class="vbox_2_m">
			
				<div class="vbox_2_body" style="display:block;">
				
					<table class="table1"><tbody>
						<tr>
							<td>媒体规格：</td>
							<td>19.2m×10.97m 1面</td>
							<td>画面形式：</td>
							<td>LED</td>
							<td>经营方式：</td>
							<td>自营经营</td>
						</tr>
						<tr>
							<td>所在区域：</td>
							<td>国际</td>
							<td>媒体形式：</td>
							<td>户外频媒/户外LED屏</td>
							<td>照明时间：</td>
							<td>无</td>
						</tr>
						<tr>
							<td>投放档期：</td>
							<td>2016年11月30日起</td>
							<td>人流量：</td>
							<td>35.0万/天</td>
							<td>车流量：</td>
							<td>15.0万/天</td>
						</tr>
						<tr>
							<td>最短投放周期：</td>
							<td>一月</td>
							<td>制作安装费：</td>
							<td>提供</td>
							<td>可发布行业：</td>
							<td>所有</td>
						</tr>
					</tbody></table>
				
					<div class="vbox_2_m_info">
						<h3>媒体优势：</h3>
						<p>该广告位于沪渝高速潜江至荆州出口之间，处于武汉至宜昌的中间段，此广告牌前后视距长，均没有任何媒体或树枝电线杆等干扰，广告环境干净，跨线桥视觉冲击力强。汉宜高速是湖北省内重要的经济和旅游通道，人流车流络绎不绝，交通网络四能八达，自湖北沪蓉西高速开通后更可驱车直达重庆。</p>
					</div>
					
				</div>
				
				<div class="vbox_2_body" style="adisplay:none;">
				
					<h3 class="title3_2"><strong>绑定手机</strong>
						<a href=""><img class="title3_2_img" src="/images/arr_s.png" alt=""></a>
						<span class="title3_2_i"></span>
					</h3>

					
					<img src="/images/map.jpg" style="max-width:100%;" />

				</div>
				
				<div class="vbox_2_body" style="adisplay:none;">
					
					<textarea type="text" name="pinglun" id="pinglun" class="pinglun">如您对该广告位有任何看法都可在此输入相关内容，我们将用心为您服务。</textarea>
					
				</div>
				
			</div>
			
		</div>
					
	</div>
	
</div></div>



<?php include("foot.php"); ?>

<script type="text/javascript">
$(function(){
	
	$(".vbox_2_t ul li a").click(function(){
		var index = $(this).parent().index();
		$(this).addClass("cur").parent().siblings("li").find("a").removeClass("cur");
		$(this).closest(".vbox_2_t").next(".vbox_2_m").find(".vbox_2_body").eq(index).css("display","block")
			.siblings().css("display","none");
		return false;
	});
	
});


</script>

</body>
</html>
