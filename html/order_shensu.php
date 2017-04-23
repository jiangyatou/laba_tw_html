<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>订单申诉 - 亚媒社</title>
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
		当前位置：<a href="">首页</a> > <a href="">订单管理</a> > 订单申诉
	</div>
	
	<div class="main_o">
		
		<h3 class="title5 clearfix"><strong>我的订单</strong></h3>
		
		<div class="clearfix wrap_f" style="padding-bottom:50px;">
		
			<form action="" method="post">
				<div class="item_f"><p><i class="LGntas"></i>订单号：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style=""></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>活动类型：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style=""></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>活动名称：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:48%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>完成链接：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:73%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>完成截图：</p>
					<div class="r" style="position:relative;">
						<img src="/images/z_add2.png" id="img_upload" style="cursor:pointer;" />
						<input type="file" name="Documents" id="documents_upload_button" placeholder="未选择任何文件" class="upload_f1" accept="image/*" style="">
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>申诉标题：</p>
					<div class="r"><input type="text" name="textfield" id="textfield" class="txt_f1" style="width:48%;"></div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>申诉内容：</p>
					<div class="r">
						<textarea class="txt_ft1"></textarea>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>申诉状态：</p>
					<div class="r">
						<select class="sel_f1">
							<option value="1">已完成</option>
							<option value="2">未完成</option>
							<option value="3">......</option>
						</select>
					</div>
				</div>
				<div class="item_f"><p><i class="LGntas"></i>申诉反馈：</p>
					<div class="r">
						<textarea class="txt_ft1" style="height:98px;color:#8e574f;">管理员可处理申诉状态及申诉反馈，首次提交时不显示 ，查看申诉订单时显示</textarea>
					</div>
				</div>
				<div class="item_f item_f_2" style="margin-top:50px;">
					<div class="r"><input type="submit" value="确认" class="sub_f1"></div>
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
	$(".tab1>ul>li>a").unbind("click");
});

//<div id="datatable1_filter" class="dataTables_filter"><label>搜索<input type="search" class="" placeholder="过滤..." aria-controls="datatable1"></label></div>
	var datatable;
	$(function () {
			var dt_option = {
				"searching" : false,		//是否允许Datatables开启本地搜索
				"paging" : true,			//是否开启本地分页
				"pageLength" : 8,			//每页显示记录数
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
				},
				"order" : [[3,"desc"]]
			};
			datatable =  $('#datatable1').DataTable(dt_option);
//			var _token = $('input[name="_token"]').val();
            $("#searchnews").click(function () {
                $.ajax({
                    type:"post",
//					url:"/Admin/searchnewspage",
					url:"data_order_list.php",
					dataType: 'html',
                    data:{
                        'start':$("#datepicker1").val(),
                        'end':$("#datepicker2").val(),
                        'mediatype':$("#mediatype").val(),
                        'orderid':$("#keyword").val()
                    },
                    success:function (msg) {
						console.log("msg:" + msg);
                        if (msg) {
							if( $.fn.dataTable.isDataTable(" #datatable1 ") ){
								datatable.destroy();
							}
							$('#listcontent').html(msg);
							datatable =  $('#datatable1').DataTable(dt_option);
                        } else {
							if( $.fn.dataTable.isDataTable(" #datatable1 ") ){
								datatable.destroy();
							}
                            $('#listcontent').html("<tr><td colspan='9'>没有查询到数据！</td></tr>");			//9 表格列数
//                        window.location.reload();
                        }
                    }
                })
            })
			
	})


</script>

</body>
</html>
