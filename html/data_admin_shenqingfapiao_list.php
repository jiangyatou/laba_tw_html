<?php


/*
 	$start = $_POST['start'];
	$end = $_POST['end'];
	$mediatype = $_POST['mediatype'];
	$orderid = $_POST['orderid'];
	
	echo "start：".$start."<BR>"; 
	echo "end：".$end."<BR>"; 
	echo "mediatype：".$mediatype."<BR>"; 
	echo "orderid：".$orderid."<BR>";
*/

/*
		<tr>
			<th>订单号</th>
			<th>用户名</th>
			<th>用户角色</th>
			<th>票据型号</th>
			<th>发票明细</th>
			<th>金额类型</th>
			<th>发票金额</th>
			<th>发送方式</th>
			<th>状态</th>
			<th class="nosort">操作</th>
		</tr>
*/

	$tbody = "";
	
	$tbody .= "<tr>";
	$tbody .= '<td>248d4965666</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>普通会员</td>';
	$tbody .= '<td>收据</td>';
	$tbody .= '<td>网络服务费</td>';
	$tbody .= '<td>消费金额</td>';
	$tbody .= '<td class="color1">￥1452.00</td>';
	$tbody .= '<td>电子档</td>';
	$tbody .= '<td>完成</td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= "</tr>";
	
	$tbody .= "<tr>";
	$tbody .= '<td>248d4965666</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>普通会员</td>';
	$tbody .= '<td>收据</td>';
	$tbody .= '<td>网络服务费</td>';
	$tbody .= '<td>消费金额</td>';
	$tbody .= '<td class="color1">￥1452.00</td>';
	$tbody .= '<td>电子档</td>';
	$tbody .= '<td>完成</td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= "</tr>";
	
	$tbody .= "<tr>";
	$tbody .= '<td>248d4965666</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>普通会员</td>';
	$tbody .= '<td>收据</td>';
	$tbody .= '<td>网络服务费</td>';
	$tbody .= '<td>消费金额</td>';
	$tbody .= '<td class="color1">￥1452.00</td>';
	$tbody .= '<td>电子档</td>';
	$tbody .= '<td>完成</td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= "</tr>";


	
//	$tbody = "";		//查询无数据时
	
	echo $tbody;





?>