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
			<th>账户余额</th>
			<th>提现金额</th>
			<th>提现时间</th>
			<th>提现状态</th>
			<th class="nosort">操作</th>
		</tr>
*/

	$tbody = "";
	
	$tbody .= "<tr>";
	$tbody .= '<td>248d4965666</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>高级会员</td>';
	$tbody .= '<td class="color1">￥100000.00</td>';
	$tbody .= '<td class="color1">￥100000.00</td>';
	$tbody .= '<td>2016-9-12 15:12:00</td>';
	$tbody .= '<td>未受理</td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= "</tr>";
	
	$tbody .= "<tr>";
	$tbody .= '<td>248d4965666</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>高级会员</td>';
	$tbody .= '<td class="color1">￥100000.00</td>';
	$tbody .= '<td class="color1">￥100000.00</td>';
	$tbody .= '<td>2016-9-12 15:12:00</td>';
	$tbody .= '<td>未受理</td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= "</tr>";
	
	$tbody .= "<tr>";
	$tbody .= '<td>248d4965666</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>高级会员</td>';
	$tbody .= '<td class="color1">￥100000.00</td>';
	$tbody .= '<td class="color1">￥100000.00</td>';
	$tbody .= '<td>2016-9-12 15:12:00</td>';
	$tbody .= '<td>未受理</td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= "</tr>";

	
//	$tbody = "";		//查询无数据时
	
	echo $tbody;





?>