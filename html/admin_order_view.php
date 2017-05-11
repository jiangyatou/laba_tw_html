<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>任—订单详情 - 亚媒社</title>
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
				<div class="item_f"><p><i class="LGntas"></i>所属媒体商：</p>
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
				
				<div class="item_f"><p><i class="LGntas"></i>编辑方式：</p>
					<div class="r radio_w">
						<label><input type="radio" name="edit_type" class="radio_f" value="1" />外部连接</label>
						<label><input type="radio" name="edit_type" class="radio_f" value="2" />上传文档</label>
						<label><input type="radio" name="edit_type" class="radio_f" value="3" checked />内部编辑</label>
					</div>
				</div>
				
				<div id="body_edit_type">
					<div class="item_f" style="display:none;"><p><i class="LGntas"></i>外部链接：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;" /></div>
					</div>
					<div class="item_f" style="display:none;"><p><i class="LGntas"></i>文档导入：</p>
						<div class="r">
							<input type="text" name="doc_" id="name2_2"  class="txt_f1" style="awidth:30%;" readonly="">
							<button type="button" name="upload_file" id="upload_file" class="txt7" style="height:40px;line-height:40px;">导入</button><br/>
						</div>
					</div>
					<div class="item_f" style="display:block;"><p><i class="LGntas"></i>活动需求：</p>
						<div class="r">
							<!--	在订单详情页中，”订单内容项“ 根据编辑方式不同所显示的界面不同，具体排版与会员下单页界页一样	-->
							<textarea class="txt_ft1"></textarea>
						</div>
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
						<select class="sel_f1">
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
						<select class="sel_f1" style="float:left;margin-right:8px;">
							<option value="1">订单反馈</option>
							<option value="2">2</option>
							<option value="3">......</option>
						</select>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>订单反馈：</p>
					<div class="r">
						<!--	确认订单项为：确认完成后面两项为隐藏，否则为显示	-->
						<textarea class="txt_ft1" style="height:100px;"></textarea>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>供应商反馈：</p>
					<div class="r">
						<textarea class="txt_ft1" style="height:100px;"></textarea>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>质检扣款：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:16%;" /><span class="color1" style="padding-left:10px;">元</span></div>
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
	
	$("input[name=edit_type]").click(function(){
		var value = $(this).val();
		var index = $(this).index("input[name=edit_type]");
		console.log(index);
		console.log(value);
		$("#body_edit_type .item_f").eq(index).css("display","block").siblings().css("display","none");		
	});
	
$(function(){

});


</script>

</body>
</html>
