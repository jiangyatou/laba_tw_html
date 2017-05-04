<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>用—供应商详情 - 亚媒社</title>
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
		当前位置：<a href="">首页</a> > 帐户信息
	</div>
	
	<div class="main_o clearfix" style="padding-bottom:20px;">
	
		<h3 class="title4 clearfix"><strong><a>供应商详情</a></strong></h3>
		
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
					<div class="item_f"><p><i class="LGntas"></i>平台价：</p>
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
			
				<div class="sbox_1_w sbox_1_w2">
					<div class="sbox_1_item clearfix">
						<span class="l" data="option_4" style="">
							<strong>网站类型：</strong>
						</span>
						<div class="m">
							<ul class="sortable" category_id="0" set_name="network">
								<li data_id="0"><a class="cur" href="">不限</a></li>
								<li data_id="1"><a href="">全国门户</a></li>
								<li data_id="7"><a href="">垂直行业</a></li>
								<li data_id="16"><a href="">地方门户</a></li>
							</ul>
						</div>
					</div>
					<div class="sbox_1_item clearfix">
						<span class="l" data="option_4">
							<strong>入口形式：</strong>
						</span>
						<div class="m">
							<ul class="sortable" category_id="2" set_name="Entrance_form">
								<li data_id="0"><a class="cur" href="">不限</a></li>
								<li data_id="3"><a href="">文字标题</a></li>
								<li data_id="4"><a href="">焦点图片</a></li>
								<li data_id="5"><a href="">图文混排</a></li>
							</ul>
						</div>
					</div>
					<div class="sbox_1_item clearfix">
						<span class="l" data="option_4">
							<strong>入口级别：</strong>
						</span>
						<div class="m">
							<ul class="sortable" category_id="1" set_name="Entrance_level">
								<li data_id="0"><a class="cur" href="">不限</a></li>
								<li data_id="2"><a href="">网站首页</a></li>
								<li data_id="9"><a href="">频道首页</a></li>
								<li data_id="10"><a href="">二级频道首页</a></li>
								<li data_id="12"><a href="">三级频道首页</a></li>
							</ul>
						</div>

					</div>
					<div class="sbox_1_item clearfix">
						<span class="l" data="option_4">
							<strong>覆盖区域：</strong>
						</span>
						<div class="m">
							<ul class="sortable" category_id="3" set_name="coverage">
								<li data_id="0"><a class="cur" href="">不限</a></li>
								<li data_id="1"><a href="">北京市</a></li>
								<li data_id="20"><a href="">天津市</a></li>
								<li data_id="39"><a href="">河北省</a></li>
								<li data_id="233"><a href="">山西省</a></li>
								<li data_id="375"><a href="">内蒙古自治区</a></li>
								<li data_id="499"><a href="">辽宁省</a></li>
								<li data_id="628"><a href="">吉林省</a></li>
								<li data_id="706"><a href="">黑龙江省</a></li>
								<li data_id="860"><a href="">上海市</a></li>
								<li data_id="880"><a href="">江苏省</a></li>
								<li data_id="1006"><a href="">浙江省</a></li>
								<li data_id="1119"><a href="">安徽省</a></li>
								<li data_id="1257"><a href="">福建省</a></li>
								<li data_id="1361"><a href="">江西省</a></li>
								<li data_id="1484"><a href="">山东省</a></li>
								<li data_id="1656"><a href="">河南省</a></li>
								<li data_id="1851"><a href="">湖北省</a></li>
								<li data_id="1981"><a href="">湖南省</a></li>
								<li data_id="2131"><a href="">广东省</a></li>
								<li data_id="2292"><a href="">广西壮族自治区</a></li>
								<li data_id="2431"><a href="">海南省</a></li>
								<li data_id="2462"><a href="">重庆市</a></li>
								<li data_id="2503"><a href="">四川省</a></li>
								<li data_id="2726"><a href="">贵州省</a></li>
								<li data_id="2829"><a href="">云南省</a></li>
								<li data_id="2983"><a href="">西藏自治区</a></li>
								<li data_id="3066"><a href="">陕西省</a></li>
								<li data_id="3194"><a href="">甘肃省</a></li>
								<li data_id="3307"><a href="">青海省</a></li>
								<li data_id="3360"><a href="">宁夏回族自治区</a></li>
								<li data_id="3393"><a href="">新疆维吾尔自治区</a></li>
								<li data_id="3510"><a href="">台湾省</a></li>
								<li data_id="3511"><a href="">香港特别行政区</a></li>
								<li data_id="3512"><a href="">澳门特别行政区</a></li>
							</ul>
						</div>

					</div>
					<div class="sbox_1_item clearfix">
						<span class="l" data="option_4">
							<strong>频道类型：</strong>
						</span>
						<div class="m">
							<ul class="sortable" category_id="4" set_name="channel">
								<li data_id="0"><a class="cur" href="">不限</a></li>
								<li data_id="13"><a href="">新闻</a></li>
								<li data_id="14"><a href="">财经</a></li>
							</ul>
						</div>

					</div>
					<div class="sbox_1_item clearfix">
						<span class="l" data="option_4">
							<strong>正文带链接：</strong>
						</span>
						<div class="m">
							<ul class="sortable" category_id="6" set_name="standard">
								<li data_id="0"><a class="cur" href="">不限</a></li>
								<li data_id="23"><a href="">不能带图片</a></li>
								<li data_id="24"><a href="">不能带二维码</a></li>
								<li data_id="25"><a href="">不能带链接</a></li>
							</ul>
						</div>
					</div>
					<div class="sbox_1_item clearfix">
						<span class="l" data="option_4">
							<strong>收录参考：</strong>
						</span>
						<div class="m">
							<ul class="sortable" category_id="6" set_name="standard">
								<li data_id="0"><a class="cur" href="">不限</a></li>
								<li data_id="23"><a href="">新闻源</a></li>
								<li data_id="24"><a href="">网页收录</a></li>
							</ul>
						</div>

					</div>
				</div>

				<div class="clearfix">
				

					<div class="item_f"><p><i class="LGntas"></i>媒体简介：</p>
						<div class="r">
							<textarea class="txt_ft1" style="width:70%;height:128px;"></textarea>
						</div>
					</div>
					<div class="item_f"><p><i class="LGntas"></i>备注：</p>
						<div class="r">
							<textarea class="txt_ft1" style="width:70%;height:128px;"></textarea>
						</div>
					</div>

					<div class="item_f"><p><i class="LGntas"></i>状态：</p>
						<div class="r radio_w">
							<label><input type="radio" name="status" class="radio_f" value="1" />在线</label>
							<label><input type="radio" name="status" class="radio_f" value="2" />下架</label>
							<label><input type="radio" name="status" class="radio_f" value="3" />审核</label>
						</div>
					</div>
					<div class="item_f item_f_2" style="margin-top:20px;">
						<div class="r"><input type="submit" value="确 认" class="sub_f1" style="margin-left:30%;" /></div>
					</div>
					
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

	$(".sbox_1_item .m ul li a").click(function () {
		var data_id = $(this).parent().attr("data_id");
		if( data_id == "0" ){
			$(this).addClass("cur").parent().siblings("li").find("a").removeClass("cur");
		}else{
			if( $(this).hasClass("cur") ){
				$(this).removeClass("cur");
				if( $(this).closest("ul").find("a.cur").length < 1 ){
					$(this).parent().siblings("li").eq(0).find("a").addClass("cur");
				}
			}else{
				$(this).addClass("cur").parent().siblings("li").eq(0).find("a").removeClass("cur");
			}
		}
		return false;
	});

</script>

</body>
</html>
