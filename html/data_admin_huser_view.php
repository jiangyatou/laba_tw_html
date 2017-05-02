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
			<th>活动名称</th>
			<th>订单类型</th>
			<th>开始时间</th>
			<th>结束时间</th>
			<th>会员价</th>
			<th>平台价</th>
			<th>所属会员</th>
			<th>订单状态</th>
			<th>完成链接/截图</th>
		</tr>
*/

	$tbody = "";
	
	$tbody .= "<tr>";
	$tbody .= "<td>15425HJK25545</td>";
	$tbody .= "<td>互联网新闻编写</td>";
	$tbody .= "<td>新闻发布</td>";
	$tbody .= "<td>2017-4-20</td>";
	$tbody .= "<td>2017-4-20</td>";
	$tbody .= "<td class=\"color1\">￥210</td>";
	$tbody .= "<td class=\"color1\">￥250</td>";
	$tbody .= "<td>13711174990</td>";
	$tbody .= "<td>完成</td>";
	$tbody .= "<td><a href=\"\">http://www.yameishe.com</a></td>";
	$tbody .= "</tr>";

	$tbody .= "<tr>";
	$tbody .= "<td>15425HJK25545</td>";
	$tbody .= "<td>互联网新闻编写</td>";
	$tbody .= "<td>新闻发布</td>";
	$tbody .= "<td>2017-4-20</td>";
	$tbody .= "<td>2017-4-20</td>";
	$tbody .= "<td class=\"color1\">￥210</td>";
	$tbody .= "<td class=\"color1\">￥250</td>";
	$tbody .= "<td>13711174990</td>";
	$tbody .= "<td>完成</td>";
	$tbody .= "<td></td>";
	$tbody .= "</tr>";

	$tbody .= "<tr>";
	$tbody .= "<td>15425HJK25545</td>";
	$tbody .= "<td>互联网新闻编写</td>";
	$tbody .= "<td>新闻发布</td>";
	$tbody .= "<td>2017-4-20</td>";
	$tbody .= "<td>2017-4-20</td>";
	$tbody .= "<td class=\"color1\">￥210</td>";
	$tbody .= "<td class=\"color1\">￥250</td>";
	$tbody .= "<td>13711174990</td>";
	$tbody .= "<td>完成</td>";
	$tbody .= "<td><a href=\"\">http://www.yameishe.com</a></td>";
	$tbody .= "</tr>";


	
//	$tbody = "";		//查询无数据时
	
	echo $tbody;





?>