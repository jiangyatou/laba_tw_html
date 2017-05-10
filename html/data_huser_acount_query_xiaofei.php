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
			<th>订单名称</th>
			<th>订单状态</th>
			<th>截图/链接</th>
			<th>金额</th>
		</tr>
*/

	$tbody = '';
	
	$tbody .= '<tr>';
	$tbody .= '<td>2016.8.18</td>';
	$tbody .= '<td>24r34f66</td>';
	$tbody .= '<td>新闻任务</td>';
	$tbody .= '<td>秒分必争创业</td>';
	$tbody .= '<td>完成</td>';
	$tbody .= '<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="链接/截图" /></a></td>';
	$tbody .= '<td><span class="color_red2">80元</span></td>';
	$tbody .= '</tr>';
	
	$tbody .= '<tr>';
	$tbody .= '<td>2016.8.18</td>';
	$tbody .= '<td>24r34f66</td>';
	$tbody .= '<td>新闻任务</td>';
	$tbody .= '<td>秒分必争创业</td>';
	$tbody .= '<td>完成</td>';
	$tbody .= '<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="链接/截图" /></a></td>';
	$tbody .= '<td><span class="color_red2">80元</span></td>';
	$tbody .= '</tr>';
	
	$tbody .= '<tr>';
	$tbody .= '<td>2016.8.18</td>';
	$tbody .= '<td>24r34f66</td>';
	$tbody .= '<td>新闻任务</td>';
	$tbody .= '<td>秒分必争创业</td>';
	$tbody .= '<td>完成</td>';
	$tbody .= '<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="链接/截图" /></a></td>';
	$tbody .= '<td><span class="color_red2">80元</span></td>';
	$tbody .= '</tr>';
	
	$tbody .= '<tr>';
	$tbody .= '<td>2016.8.18</td>';
	$tbody .= '<td>24r34f66</td>';
	$tbody .= '<td>新闻任务</td>';
	$tbody .= '<td>秒分必争创业</td>';
	$tbody .= '<td>完成</td>';
	$tbody .= '<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="链接/截图" /></a></td>';
	$tbody .= '<td><span class="color_red2">80元</span></td>';
	$tbody .= '</tr>';
	
//	$tbody = '';		//查询无数据时
	
	echo $tbody;





?>