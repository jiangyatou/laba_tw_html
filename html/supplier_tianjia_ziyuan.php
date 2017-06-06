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
			<li><a href="">用户信息</a></li>
			<li class="cur"><a href="supplier_resource_management.php">资源管理</a></li>
		</ul>
	</div>
	
	<div class="place">
		当前位置：<a href="">首页</a> > <a href="">资源管理</a> > 添加资源
	</div>
	
	<div class="main_o">
		
		<h3 class="title4"><strong><a href="#">资源管理</a></strong>
			<ul class="add_resource2">
				<li><a href="">添加网络媒体</a></li>
			</ul>
			<!--	显示添加资源的分类名称，当查看资源详情页，添加资源的分类名称隐藏，	-->
		</h3>
		
		<div class="clearfix wrap_f wrap_f2" style="padding-bottom:50px;">
			<form action="" method="post">
				<div class="item_f"><p><i class="LGntas"></i>资源分类：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>资源类型：</p>
					<div class="r">
						<select class="sel_f1" style="width:38%;">
							<option value="新闻发布">新闻发布</option>
							<option value="2">2</option>
							<option value="3">......</option>
						</select>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>资源名称：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:45%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>媒体LOGO：</p>
					<div class="r" style="position:relative;">
						<img src="/images/z_add2.png" id="img_upload" style="cursor:pointer;float:left;margin-right:8px;" />
						<input type="file" name="Documents" id="documents_upload_button" placeholder="未选择任何文件" class="upload_f1" accept="image/*" style="" />
						<span class="info1_f valign_m" style="height:95px;padding:0;">
							<i>*</i> 请点击选择图片，仅支持 JPG、JPEG、GIF、<br/>PNG 格式的图片文件，文件不能大于 2MB。
						</span>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>公司名称：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:45%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>所属领域：</p>
					<div class="r">
						<select class="sel_f1" style="width:38%;">
							<option value=""></option>
							<option value="2">2</option>
							<option value="3">......</option>
						</select>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>机构所在地：</p>
					<div class="r">
						<select class="sel_f1" style="width:auto;">
							<option value="">广东</option>
							<option value="2">2</option>
							<option value="3">......</option>
						</select>
						<select class="sel_f1" style="width:auto;">
							<option value="">广州</option>
							<option value="2">2</option>
							<option value="3">......</option>
						</select>
						<select class="sel_f1" style="width:auto;">
							<option value="">海珠区</option>
							<option value="2">海珠区海珠区海珠区</option>
							<option value="3">......</option>
						</select>
						<input type="text" name="textfield" id="textfield" class="txt_f1" style="width:45%;" placeholder="详细地址" value="" />
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>媒体负责人：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:45%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>联系电话：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:45%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>联系邮箱：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:45%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>资源优势：</p>
					<div class="r">
						<textarea class="txt_ft1" style="height:90px;"></textarea>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>媒体简介：</p>
					<div class="r">
						<textarea class="txt_ft1" style="height:90px;"></textarea>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>网站/微博（可选）：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:75%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>服务协议：</p>
					<div class="r">
						<div class="txt_xieyi" style="">
						
<h1>喇叭传媒平台服务协议</h1>
<p>一、总则</p>
<p>1、为使用亚媒社平台服务（下简称“本服务”），您应当阅读并遵守《亚媒社平台服务协议》（以下简称“本协议”），以及《亚媒社服务协议》、《亚媒社网站保护隐私权之声明》等内容。</p>
<p>2、本协议系您与广州安腾网络科技有限公司（以下简称“亚媒社公司”）之间就亚媒社平台注册、登录及使用等事宜所订立的权利义务规范。</p>
<p>3、请您仔细阅读以下全部内容，您点选“同意”键并完成注册、登录，即视为已完全同意并接受本协议，并愿受其约束；若不同意本协议的任何条款，请不要点选“同意”，也不要使用亚媒社平台的任何服务。如您是未成年人，您还应要求您的监护人仔细阅读本协议，并取得他/他们的同意。</p>
<p>4、本协议视为《亚媒社服务协议》的补充协议，是其不可分割的组成部分，本协议与《亚媒社服务协议》不一致的，以本协议为准。</p>
<p>……</p>

						</div>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i></p>
					<div class="r radio_w">
						<label><input type="radio" name="agree" class="radio_f" value="1" />同意</label>
						<label><input type="radio" name="agree" class="radio_f" value="2" />不同意</label>
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
