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
			<th>序号</th>
			<th>用户名</th>
			<th>订单数</th>
			<th>订单金额</th>
			<th>占账户收益</th>
			<th>创建时间</th>
			<th>状态</th>
			<th style="width:20%;">备注</th>
			<th class="nosort">操作</th>
		</tr>
*/

	$tbody = "";
	
	$tbody .= '<tr>';
	$tbody .= '<td>1</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>212</td>';
	$tbody .= '<td class="color1">￥228.00</td>';
	$tbody .= '<td>20%</td>';
	$tbody .= '<td>2017-4-20 12:40</td>';
	$tbody .= '<td>在线</td>';
	$tbody .= '<td></td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= '</tr>';
	
	$tbody .= '<tr>';
	$tbody .= '<td>1</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>212</td>';
	$tbody .= '<td class="color1">￥228.00</td>';
	$tbody .= '<td>20%</td>';
	$tbody .= '<td>2017-4-20 12:40</td>';
	$tbody .= '<td>在线</td>';
	$tbody .= '<td></td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= '</tr>';
	
	$tbody .= '<tr>';
	$tbody .= '<td>1</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>212</td>';
	$tbody .= '<td class="color1">￥228.00</td>';
	$tbody .= '<td>20%</td>';
	$tbody .= '<td>2017-4-20 12:40</td>';
	$tbody .= '<td>在线</td>';
	$tbody .= '<td></td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= '</tr>';
	
	$tbody .= '<tr>';
	$tbody .= '<td>1</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>212</td>';
	$tbody .= '<td class="color1">￥228.00</td>';
	$tbody .= '<td>20%</td>';
	$tbody .= '<td>2017-4-20 12:40</td>';
	$tbody .= '<td>在线</td>';
	$tbody .= '<td></td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= '</tr>';
	
	$tbody .= '<tr>';
	$tbody .= '<td>1</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>212</td>';
	$tbody .= '<td class="color1">￥228.00</td>';
	$tbody .= '<td>20%</td>';
	$tbody .= '<td>2017-4-20 12:40</td>';
	$tbody .= '<td>在线</td>';
	$tbody .= '<td></td>';
	$tbody .= '<td><a class="color2" href="admin_order_view.php">查看</a></td>';
	$tbody .= '</tr>';

	
//	$tbody = "";		//查询无数据时
	
	echo $tbody;





?>