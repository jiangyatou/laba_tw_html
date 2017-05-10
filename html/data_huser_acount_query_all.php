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
			<th>日期</th>
			<th>订单号</th>
			<th>订单类型</th>
			<th>活动名称</th>
			<th>所属用户</th>
			<th>状态</th>
			<th>完成链接/截图</th>
			<th>金额</th>
		</tr>
*/

	$tbody = "";
	
	$tbody .= "<tr>";
	$tbody .= '<td>2017-4-20 12:25</td>';
	$tbody .= '<td>sdf26215648621</td>';
	$tbody .= '<td>新闻发布</td>';
	$tbody .= '<td>新闻发布会公告</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>未完成</td>';
	$tbody .= '<td class="link-pic"></td>';
	$tbody .= '<td class="color_red2">￥228.00</td>';
	$tbody .= "</tr>";
	
	$tbody .= "<tr>";
	$tbody .= '<td>2017-4-20 12:25</td>';
	$tbody .= '<td>sdf26215648621</td>';
	$tbody .= '<td>新闻发布</td>';
	$tbody .= '<td>新闻发布会公告</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>未完成</td>';
	$tbody .= '<td class="link-pic"></td>';
	$tbody .= '<td class="color_red2">￥228.00</td>';
	$tbody .= "</tr>";
	
	$tbody .= "<tr>";
	$tbody .= '<td>2017-4-20 12:25</td>';
	$tbody .= '<td>sdf26215648621</td>';
	$tbody .= '<td>新闻发布</td>';
	$tbody .= '<td>新闻发布会公告</td>';
	$tbody .= '<td>13711174990</td>';
	$tbody .= '<td>未完成</td>';
	$tbody .= '<td class="link-pic"></td>';
	$tbody .= '<td class="color_red2">￥228.00</td>';
	$tbody .= "</tr>";
	

	
//	$tbody = "";		//查询无数据时
	
	echo $tbody;





?>