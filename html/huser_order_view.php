<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>订单详情 - 亚媒社</title>
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
		当前位置：<a href="">首页</a> > <a href="">订单管理</a> > 订单详情
	</div>
	
	<div class="main_o">
		
		<h3 class="title5 clearfix"><strong>我的订单</strong></h3>
		
		<div class="clearfix wrap_f" style="padding-bottom:50px;">
		
			<form action="" method="post">
				<div class="item_f"><p><i class="LGntas"></i>订单号：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>所属用户：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style=""></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>订单状态：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>活动类型：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>活动名称：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>开始时间：</p>
					<div class="r"><input type="text" name="textfield" id="datepicker1" class="txt_f1"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>结束时间：</p>
					<div class="r"><input type="text" name="textfield" id="datepicker2" class="txt_f1"></div>
				</div>
				
				<div class="item_f"><p><i class="LGntas"></i>活动需求：</p>
					<div class="r">
						<textarea class="txt_ft1" style=""></textarea>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>订单备注：</p>
					<div class="r">
						<textarea class="txt_ft1" style="height:90px;"></textarea>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>平台价：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:16%;" /><span class="color1" style="padding-left:10px;">元</span></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>质量反馈：</p>
					<div class="r">
						<select class="sel_f1" style="min-width:110px;">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">......</option>
						</select>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>完成链接：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;" /></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>完成截图：</p>
					<div class="r" style="position:relative;">
						<img src="/images/z_add2.png" id="img_upload" style="cursor:pointer;float:left;margin-right:8px;" />
						<input type="file" name="Documents" id="documents_upload_button" placeholder="未选择任何文件" class="upload_f1" accept="image/*" style="" />
						<span class="info1_f valign_m" style="height:95px;padding:0;">
							<i>*</i> 请点击选择图片，仅支持 JPG、JPEG、GIF、<br/>PNG 格式的图片文件，文件不能大于 2MB。
						</span>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>确认订单：</p>
					<div class="r">
						<select class="sel_f1" style="min-width:110px;afloat:left;amargin-right:8px;">
							<option value="1">订单反馈</option>
							<option value="2">2</option>
							<option value="3">......</option>
						</select>
						<span class="info2_f">
							<i>*</i> 当订单流程为“已完成”状态下并选择“确认完成”，则该订单流程已正式完成
						</span>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>订单反馈：</p>
					<div class="r">
<!--	确认订单项为：确认完成后面两项为隐藏，否则为显示 ,判断订单所属用户为代理商刚确认订单以下的不显示，如果是本用户则显示操作	-->
						<textarea class="txt_ft1" style="height:100px;"></textarea>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>供应商反馈：</p>
					<div class="r">
						<textarea class="txt_ft1" style="height:100px;"></textarea>
					</div>
				</div>

				<div class="item_f item_f_2" style="margin-top:50px;">
					<div class="r"><input type="submit" value="确 认" class="sub_f1"></div>
				</div>
			</form>
			
		</div>

	</div>	

</div></div>

<?php include("foot.php"); ?>

<script type="text/javascript">
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
	
$(function(){

});


</script>

</body>
</html>
