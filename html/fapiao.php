<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>申请发票 - 亚媒社</title>
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

	<div class="place">
		当前位置：<a href="">首页</a> > 订单结算
	</div>
	
	<div class="main_o">
		
		<h3 class="title5 clearfix"><strong>申请发票</strong></h3>
		
		<div class="clearfix wrap_f" style="padding-bottom:50px;">
	
			<div class="IF2">
				
				<form id="form_fp" action="" method="post">
					<div class="IF3">
						<p>票据类型号：</p>
						<input type="hidden" name="piao_typeid" id="piao_typeid"  class="IFN1" value="1" />
						<ul class="IFN5">
							<li data="1" class="cur">收据</li>
							<li data="2" class="">普通发票（含税）</li>
							<li data="3">专用发票（含税）</li>
						</ul>
					</div>
					<div class="IF3"><p>发票明细：</p>
						  <select name="select" id="select" class="sel_f1">
							<option value="">网络服务费</option>
							<option value="">其他</option>
						  </select>
					</div>
					<div class="IF3"><p>金额类型：</p>
						<label><input type="radio" name="radio" id="radio1" value="radio1" checked/> &nbsp;充值金额&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<label><input type="radio" name="radio" id="radio2" value="radio2" /> &nbsp;消费金额</label>
					</div>
					<div class="IF3"><p>发票金额：</p>
						  <input type="text" name="textfield" id="textfield"  class="IFN1"/>
						  <span>元</span>
						  <i style="color:#ccc; font-size: 12px;">
								<span>*</span> 发票金额不得大于所选金额类型的可开发票的余额
							</i>
					</div>
					<div class="IF3"><p>发送方式：</p>
						<label><input type="radio" name="radio1" id="radio" value="radio" checked onclick="Email.style.display='';dizhi.style.display='none';" checked/> &nbsp;电子档 &nbsp;&nbsp;&nbsp;&nbsp;</label>
						<label><input type="radio" name="radio1" id="radio2" value="radio2" onclick="dizhi.style.display='';Email.style.display='none';"/> &nbsp;纸质快递1000起</label>
					</div>
					<div class="IF3"><p>发票抬头：</p>
						<input type="text" name="textfield2" id="textfield2"  class="IFN2"/>
					</div>
					<div class="IF3" id="Email"><p>邮箱地址：</p>
						<input type="text" name="textfield2" id="textfield2"  class="IFN2"/>
					</div>
					<div class="IF3" id="dizhi" style="display: none;"><p>联系地址：</p>
						<input type="text" name="textfield2" id="textfield2"  class="IFN2"/>
					</div>
					<div class="IF3"><p>备注：</p>
						 <textarea name="textfield3" id="textfield3" class="IFN3"></textarea>
					</div>
					<div class="IF3">
						<p>&nbsp;</p>
						<div class="IFN4">
							<span style="color:#000; font-weight:700">发票问题</span>
							<span>标题作为含有哪些关键词要写清楚，关键词最好不要超过2个</span>
							<span>文章要求：关键词有哪些一定要写清楚，关键词文章内要出现几次，是否带连接、联系方式、图片等、如需带请自行准备   如能提供范文最好，我们可以按照格式撰写。</span>
						</div>
					</div>
					<div class="IF3">
						<p>&nbsp;</p>
						<input type="submit" name="button" id="button" value="提 交" class="Button" style="margin-left:25%;margin-top:50px;" />
					</div>
					
				</form>
					
			</div>
			
		</div>

	</div>	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
	
$(function(){
	$("ul.IFN5 li").click(function(){
		var piao_typeid = $(this).attr("data");
		$(this).addClass("cur").siblings("li").removeClass("cur");
		$("#piao_typeid").val( piao_typeid );
	});
});


</script>

</body>
</html>
