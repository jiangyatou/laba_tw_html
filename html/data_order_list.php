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
			<th>价格</th>
			<th>订单状态</th>
			<th>完成链接/截图</th>
			<th class="nosort">操作</th>
		</tr>
*/

	$tbody = "";
	
	$tbody .= "<tr>";
	$tbody .= "<td>248d4965666</td>";
	$tbody .= "<td>互联网大数据新闻编写</td>";
	$tbody .= "<td>文案策划</td>";
	$tbody .= "<td>2016-9-12</td>";
	$tbody .= "<td>2016-9-12</td>";
	$tbody .= "<td class=\"color1\">￥228.00</td>";
	$tbody .= "<td>未完成</td>";
	$tbody .= "<td class=\"link-pic\"></td>";
	$tbody .= "<td><a class=\"color2\" href=\"#\">查看</a></td>";
	$tbody .= "</tr>";

	$tbody .= "<tr>";
	$tbody .= "<td>248d4965666</td>";
	$tbody .= "<td>互联网大数据新闻编写</td>";
	$tbody .= "<td>文案策划</td>";
	$tbody .= "<td>2016-9-12</td>";
	$tbody .= "<td>2016-9-12</td>";
	$tbody .= "<td class=\"color1\">￥228.00</td>";
	$tbody .= "<td>未完成</td>";
	$tbody .= "<td class=\"link-pic\">http://www.laba.tw</td>";
	$tbody .= "<td><a class=\"color2\" href=\"#\">查看</a></td>";
	$tbody .= "</tr>";

	$tbody .= "<tr>";
	$tbody .= "<td>248d4965666</td>";
	$tbody .= "<td>互联网大数据新闻编写</td>";
	$tbody .= "<td>文案策划</td>";
	$tbody .= "<td>2016-9-12</td>";
	$tbody .= "<td>2016-9-12</td>";
	$tbody .= "<td class=\"color1\">￥228.00</td>";
	$tbody .= "<td>未完成</td>";
	$tbody .= "<td class=\"link-pic\"><a href=\"#\"><img src=\"img/1.jpg\" /></a></td>";
	$tbody .= "<td><a class=\"color2\" href=\"#\">查看</a></td>";
	$tbody .= "</tr>";

	
//	$tbody = "";		//查询无数据时
	
	echo $tbody;





?>