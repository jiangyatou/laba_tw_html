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
			<th>所属会员</th>
			<th>创建时间</th>
			<th>订单数</th>
			<th>账户余额</th>
			<th>状态</th>
			<th>会员资源</th>
			<th>会员价</th>
			<th class="nosort">操作</th>
		</tr>
*/

	$tbody = "";
	
	$tbody .= "<tr>";
	$tbody .= "<td>1</td>";
	$tbody .= "<td>13711174990</td>";
	$tbody .= "<td>baidu.com</td>";
	$tbody .= "<td>2017-4-25  11:12</td>";
	$tbody .= "<td>24512</td>";
	$tbody .= "<td class=\"color1\">￥100000.00</td>";
	$tbody .= "<td>启用</td>";
	$tbody .= "<td>210</td>";
	$tbody .= "<td class=\"color1\">￥210</td>";
	$tbody .= "<td><a class=\"color2\" href=\"\">查看</a></td>";
	$tbody .= "</tr>";

	$tbody .= "<tr>";
	$tbody .= "<td>1</td>";
	$tbody .= "<td>13711174990</td>";
	$tbody .= "<td>baidu.com</td>";
	$tbody .= "<td>2017-4-25  11:12</td>";
	$tbody .= "<td>24512</td>";
	$tbody .= "<td class=\"color1\">￥100000.00</td>";
	$tbody .= "<td>启用</td>";
	$tbody .= "<td>210</td>";
	$tbody .= "<td class=\"color1\">￥210</td>";
	$tbody .= "<td><a class=\"color2\" href=\"\">查看</a></td>";
	$tbody .= "</tr>";

	$tbody .= "<tr>";
	$tbody .= "<td>1</td>";
	$tbody .= "<td>13711174990</td>";
	$tbody .= "<td>baidu.com</td>";
	$tbody .= "<td>2017-4-25  11:12</td>";
	$tbody .= "<td>24512</td>";
	$tbody .= "<td class=\"color1\">￥100000.00</td>";
	$tbody .= "<td>启用</td>";
	$tbody .= "<td>210</td>";
	$tbody .= "<td class=\"color1\">￥210</td>";
	$tbody .= "<td><a class=\"color2\" href=\"\">查看</a></td>";
	$tbody .= "</tr>";

	
//	$tbody = "";		//查询无数据时
	
	echo $tbody;





?>