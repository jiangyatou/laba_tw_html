<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>购物车订单 - 亚媒社</title>
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

	<div class="banner2">
		<img src="images/banner2.jpg" width="100%">
	</div>
	
	<div class="place">
		当前位置：<a href="">首页</a> > 购物车
	</div>
	
	<div class="main_o">
		
		<h3 class="title5 clearfix"><strong>全部订单</strong></h3>
		
		<div class="tab1_body">
		
<table class="table_in1 cur table_ah" id="datatable1">
	<thead>
		<tr>
			<th width="6%">勾选</th>
			<th>订单号</th>
			<th>订单类型</th>
			<th>活动名称</th>
			<th>生成时间</th>
			<th>金额</th>
			<th style="width:30%;">备注</th>
		</tr>
	</thead>
	<tbody id="listcontent">
		<tr>
			<td><label><input type="checkbox" name="check_Item" data-price="228"></label></td>
			<td>248d4965666</td>
			<td>文案策划</td>
			<td>互联网大数据新闻编写</td>
			<td>2016-10-12 15:12:00</td>
			<td><span class="red price">￥228</span></td>
			<td class="bz">互联网大数据新</td>
		</tr>
		<tr>
			<td><label><input type="checkbox" name="check_Item" data-price="1"></label></td>
			<td>248d4965666</td>
			<td>文案策划</td>
			<td>互联网大数据新闻编写</td>
			<td>2016-10-12 15:12:00</td>
			<td><span class="red price">￥1</span></td>
			<td class="bz"></td>
		</tr>
		<tr>
			<td><label><input type="checkbox" name="check_Item" data-price="228"></label></td>
			<td>248d4965666</td>
			<td>文案策划</td>
			<td>互联网大数据新闻编写</td>
			<td>2016-10-12 15:12:00</td>
			<td><span class="red price">￥228</span></td>
			<td class="bz">联网大数据新闻编写联网大数据新闻编写联网大数据新闻编写联网大数据新闻编写</td>
		</tr>
		<tr>
			<td><label><input type="checkbox" name="check_Item" data-price="3"></label></td>
			<td>248d4965666</td>
			<td>文案策划</td>
			<td>互联网大数据新闻编写</td>
			<td>2016-10-12 15:12:00</td>
			<td><span class="red price">￥3</span></td>
			<td class="bz">联网大数据新闻编写联网大数据新闻编写</td>
		</tr>
		<tr>
			<td><label><input type="checkbox" name="check_Item" data-price="228"></label></td>
			<td>248d4965666</td>
			<td>文案策划</td>
			<td>互联网大数据新闻编写</td>
			<td>2016-10-12 15:12:00</td>
			<td><span class="red price">￥228</span></td>
			<td class="bz">互联网大数据新闻编写互联网大数据新闻编写互联网大数据新闻编写互联网大数据新闻编写互联网大数据新闻编写互联网大数据新闻编</td>
		</tr>
		<tr>
			<td><label><input type="checkbox" name="check_Item" data-price="1"></label></td>
			<td>248d4965666</td>
			<td>文案策划</td>
			<td>互联网大数据新闻编写</td>
			<td>2016-10-12 15:12:00</td>
			<td><span class="red price">￥1</span></td>
			<td class="bz"></td>
		</tr>
		<tr>
			<td><label><input type="checkbox" name="check_Item" data-price="228"></label></td>
			<td>248d4965666</td>
			<td>文案策划</td>
			<td>互联网大数据新闻编写</td>
			<td>2016-10-12 15:12:00</td>
			<td><span class="red price">￥228</span></td>
			<td class="bz">联网大数据新闻编写联网大数据新闻编写联网大数据新闻编写联网大数据新闻编写</td>
		</tr>
		<tr>
			<td><label><input type="checkbox" name="check_Item" data-price="3"></label></td>
			<td>248d4965666</td>
			<td>文案策划</td>
			<td>互联网大数据新闻编写</td>
			<td>2016-10-12 15:12:00</td>
			<td><span class="red price">￥3</span></td>
			<td class="bz">联网大数据新闻编写联网大数据新闻编写</td>
		</tr>
	</tbody>
</table>
		
		</div>

		<div class="info3 clearfix">
			<label><input type="checkbox" id="checkall"/>全选</label>
			<a href="#" class="delorder" id="delorder">删除失效定单</a>
			<a href="#" class="settle" id="settle">结算</a>
			<span class="sp1">结算总金额：<i class="red" id="sum">￥<b>0.00</b></i></span>
			<span class="sp2">已选定单 <i class="red" id="rows_order">1</i> 条</span>
		</div>
							
	</div>	

</div></div>

    <!--	支付弹窗	-->
    <div class="pay_info">
        <h3>总金额</h3>
        <h4 class="sum" id="sum2">￥<b>0.00</b></h4>
        <p>任务将由所下单媒体审核，若资源审核成功后便会执行发布，稍后注意前往我的喇叭传媒平台查看</p>
        <form action="" method="post" id="form1">
            <div class="item">
                <input type="password" name="pass" placeholder="请输入您的平台密码" class="pass" />
            </div>
            <div class="item">
                <button type="submit" class="sub" id="pay">支付</button>
            </div>
        </form>
    </div>

<?php include("foot.php"); ?>

    <script type="text/javascript">
        /*	计算金额	*/
        function reset_total(){
            var total=0;
            var rows_order=0;
            $("input[name='check_Item']").each(function(){
                var price=parseFloat($(this).attr("data-price"));
                if( $(this).is(":checked") ){
                    total += price;
                    rows_order++;
                }
            });
            $("#rows_order").text(rows_order);
            $("#sum b").text(total);
            $("#sum2 b").text(total);
        }
        $(".table_in1 input:checkbox").change(function(){
            reset_total();
        });

        /*	全选	*/
        $("#checkall").on("click",function(){
            if( $(this).is(":checked") ) {
                $("input[name='check_Item']").prop("checked",true);
            }else{
                $("input[name='check_Item']").prop("checked",false);
            }
            reset_total();
        });

        /*	删除选中订单	*/
        $("#delorder").click(function(){
            event.preventDefault();
            layer.confirm("确定要删除选中的订单吗？",{
                btn:["确定","取消"]
            },function(){
                $("input[name='check_Item']").each(function(){
                    if( $(this).is(":checked") ){
                        $(this).closest("tr").remove();
                    }
                });
                layer.msg('删除成功', {icon: 1});
                reset_total();
            },function(){
                layer.msg('删除已取消', {icon: 1});
            });
        });
        /*	点击结算弹出支付	*/
		var orderdata = [];
        $("#settle").click(function(){
            event.preventDefault();
			if( $("input[name=check_Item]:checked").length>0 ){
				var _token = $("input[name=_token]").val();
				var order_id = "";
				var price = $.trim($("#sum b").html());
				$("input[name=check_Item]:checked").each(function(){
					var order_id2 = $(this).closest("tr").attr("order_id");
					if( order_id == "" ){
						order_id += order_id2;
					}else{
						order_id += "," + order_id2;
					}
				});
			
				orderdata["_token"] = _token;
				orderdata["order_id"] = order_id;
				orderdata["price"] = price;

				layer.open({
					type: 1,
					title: " ",
					shadeClose: true, //开启遮罩关闭
					skin: 'pay_info_w', //加上class设置样式
					area: ['430px'], //宽高
					content: $(".pay_info")
				});
			}else{
				layer.msg("请选择订单");
			}
        });
		/*	支付	*/
		$("#pay").click(function(){
			var pass = $("input[name=pass]").val();
			if( $.trim(pass) == "" || pass.length < 6 ){
				layer.msg("密码不能为空或者小于6位");
				return false;
			}
			$.ajax({
					url: "{{route('user.Settlement')}}",
					data: {
						'order_id' : orderdata["order_id"],
						'price' : orderdata["price"],
						'password' : pass,
						'_token' : orderdata["_token"]
					},
					type: 'post',
					dataType: "json",
					success: function (data) {
						/*layer.close(1);*/
						if (data.sta == '0') {
                            layer.msg(data.msg || '提交失败');
                            window.location.href='/';
						} else {
							layer.msg(data.msg || '提交失败');
						}
					},
					error: function (data) {
						layer.msg(data.msg || '网络发生错误');
						return false;
					}
				});
			
			return false;
		});
		
        reset_total();
		
    </script>
</body>
</html>
