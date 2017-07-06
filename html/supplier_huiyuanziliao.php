<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>添加资源_供应商 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php include("cssjs.php"); ?>
	
	<style>

	</style>
</head>
<body class="fhide">			<!--	class="fold" 左导航收缩	-->

<?php include("supplier_head.php"); ?>
<?php include("side_l_admin.php"); ?>			<!--	左弹菜单 供应商首页	-->

<div class="content"><div class="Invoice">

	<div class="s1_tab">
		<ul class="clearfix">
			<li><a href="supplier_order_list.php">订单管理</a></li>
			<li><a href="supplier_account_query.php">账户查询</a></li>
			<li class="cur"><a href="supplier_huiyuanziliao.php">用户信息</a></li>
			<li><a href="supplier_resource_management.php">资源管理</a></li>
		</ul>
	</div>
	
	<div class="place">
		当前位置：<a href="">首页</a> > <a href="">用户信息</a> > 会员中心
	</div>
	
	<div class="main_o">
		
		<h3 class="title4"><strong><a href="#">会员中心</a></strong></h3>
		
		<div class="safe_1 clearfix">

			<div class="wrap_fl clearfix" style="width:35%;">
			
<!--			<form action="" method="post">			-->
					<div class="item_f"><p><i class="LGntas"></i>用户名：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>所属媒体：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>媒体类型：</p>
						<div class="r">
							<select class="sel_f1" style="width:70%;">
								<option value="1">网络媒体</option>
								<option value="2">2</option>
								<option value="3">......</option>
							</select>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>媒体分类：</p>
						<div class="r">
							<select class="sel_f1" style="width:70%;">
								<option value="1">新闻约稿</option>
								<option value="2">2</option>
								<option value="3">......</option>
							</select>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>媒体名称：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
					</div>
					<div class="item_f"><p style="padding-top:25px;"><i class="LGntas"></i>媒体LOGO：</p>
						<div class="r" style="position:relative;">
							<img src="/images/z_add2.png" id="img_upload" style="cursor:pointer;float:left;margin-right:8px;" />
							<input type="file" name="Documents" id="documents_upload_button" placeholder="未选择任何文件" class="upload_f1" accept="image/*" style="" />
							<span class="info1_f valign_m" style="height:95px;padding:0;">
								<i>*</i> 请点击选择图片，仅支持JPG、JPEG、GIF、PNG格式的图片文件，文件不能大于2MB。
							</span>
						</div>
					</div>
					<div class="item_f"><p style="padding-top:25px;"><i class="LGntas"></i>入口示意图：</p>
						<div class="r" style="position:relative;">
							<img src="/images/z_add2.png" id="img_upload2" style="cursor:pointer;float:left;margin-right:8px;" />
							<input type="file" name="Documents2" id="documents_upload_button2" placeholder="未选择任何文件" class="upload_f1" accept="image/*" style="" />
							<span class="info1_f valign_m" style="height:95px;padding:0;">
								<i>*</i> 请点击选择图片，仅支持JPG、JPEG、GIF、PNG格式的图片文件，文件不能大于2MB。
							</span>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>代理价：</p>
						<div class="r">
							<input type="text" name="textfield" id="textfield" class="txt_f1" style="width:55%;"><span class="color1" style="padding-left:10px;">元</span>
						</div>
					</div>
					


<!--			</form>			-->
			</div>
			
			<div class="wrap_fr" style="width:47%;margin-right:2%;">
				<div class="wrap_fr3">
					
					<div class="item_f"><p><i class="LGntas"></i>媒体负责人：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>联系电话：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>电子邮箱：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>联系QQ：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>联系地址：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>邮编：</p>
						<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>媒体认证：</p>
						<div class="r">
							<select class="sel_f1" style="width:70%;">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">......</option>
							</select>
						</div>
					</div>
					<div class="item_f"><p style="padding-top:25px;"><i class="LGntas"></i></p>
						<div class="r" style="position:relative;">
							<img src="/images/z_add2.png" id="img_upload3" style="cursor:pointer;float:left;margin-right:8px;" />
							<input type="file" name="Documents3" id="documents_upload_button3" placeholder="未选择任何文件" class="upload_f1" accept="image/*" style="" />
							<span class="info1_f valign_m" style="height:95px;padding:0;">
								<i>*</i> 请点击选择图片，仅支持JPG、JPEG、GIF、PNG格式的图片文件，文件不能大于2MB。
							</span>
						</div>
					</div>


				</div>
			</div>
			
			<div class="clr"></div>
				
				
			<div class="main_o clearfix" style="padding-bottom:0;width:90%;border:none;box-shadow: 0px 0px 0px #fff;">
			

				<div class="clearfix">
				
					<div class="item_f"><p><i class="LGntas"></i>资源优势：</p>
						<div class="r">
							<textarea class="txt_ft1" style="width:75%;height:128px;"></textarea>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>媒体简介：</p>
						<div class="r">
							<textarea class="txt_ft1" style="width:75%;height:128px;"></textarea>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>网站/微博：</p>
						<div class="r"><input name="textfield" id="textfield" class="txt_f1" style="width:70%;" type="text"></div>
					</div>

					
					<div class="item_f item_f_2" style="margin-top:80px;">
						<div class="r"><input type="submit" value="确 认" class="sub_f1" style="margin-left:30%;" /></div>
					</div>
					
				</div>
									
			</div>	
	
	
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
