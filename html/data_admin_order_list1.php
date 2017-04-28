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
			<th>订单类型</th>
			<th>所属用户</th>
			<th>完成链接/截图</th>
			<th>申诉标题</th>
			<th>申诉时间</th>
			<th>申诉状态</th>
			<th class="nosort">操作</th>
		</tr>
*/

	$tbody = "";
	
	$tbody .= "<tr>";
	$tbody .= "<td>248d4965666</td>";
	$tbody .= "<td>1文案策划</td>";
	$tbody .= "<td>13711174990</td>";
	$tbody .= "<td>http://www.laba.tw</td>";
	$tbody .= "<td>申诉标题9</td>";
	$tbody .= "<td>2017-4-20 15：21 00</td>";
	$tbody .= "<td>未处理</td>";
	$tbody .= "<td><a class=\"color2\" href=\"\">查看</a></td>";
	$tbody .= "</tr>";
	
	$tbody .= "<tr>";
	$tbody .= "<td>248d4965666</td>";
	$tbody .= "<td>2文案策划</td>";
	$tbody .= "<td>13711174990</td>";
	$tbody .= "<td>http://www.laba.tw</td>";
	$tbody .= "<td>申诉标题9</td>";
	$tbody .= "<td>2017-4-20 15：21 00</td>";
	$tbody .= "<td>未处理</td>";
	$tbody .= "<td><a class=\"color2\" href=\"\">查看</a></td>";
	$tbody .= "</tr>";
	
	$tbody .= "<tr>";
	$tbody .= "<td>248d4965666</td>";
	$tbody .= "<td>3文案策划</td>";
	$tbody .= "<td>13711174990</td>";
	$tbody .= "<td>http://www.laba.tw</td>";
	$tbody .= "<td>申诉标题9</td>";
	$tbody .= "<td>2017-4-20 15：21 00</td>";
	$tbody .= "<td>未处理</td>";
	$tbody .= "<td><a class=\"color2\" href=\"\">查看</a></td>";
	$tbody .= "</tr>";
	
//	$tbody = "";		//查询无数据时
	
	echo $tbody;





?>