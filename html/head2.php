
<div class="frame" id="top">
	<div class="logo">
		<a href="index.php"><img src="/images/logo.png" alt="亚媒社" /></a>
	</div>
    <a href="#" class="sidebar-open-button"></a>
    <a href="#" class="new-message"><img src="/images/new-message.png" /><i>2</i></a>
	<ul class="ul_top">
		<li><a href="help.php">帮助中心</a></li>
	</ul>
	
    <div class="ITuser">
    	<div class="Hlogo"><img src="img/bn66.png" /><div class="Hltext">5</div></div>
        <div class="IName">
        	<p class="name">1171801173@qq.com</p>
            <p class="account">认证账户</p>
			<img src="/images/v.png" />
            <a class="logout">退出</a>
        </div>
        <div class="sidepanel-open-button"></div>
    </div>
	<div class="search_top">
		<form id="form_top" method="post" action="">
			<label class="w_key_ftop"><input type="text" name="key_ftop" class="key_ftop" placeholder="搜索" /></label>
			<input type="submit" name="submit" class="sub_ftop" value="" />
		</form>
	</div>

</div>
<!--右边会员中心入口弹窗-->
<div class="HYrukou">
	<ul>
		<li><a href="" class="">会员资料</a></li>
		<li><a href="" class="">账户查询</a></li>
		<li><a href="" class="">账户充值</a></li>
		<li><a href="" class="">订单管理</a></li>
		<li><a href="" class="">代理商管理</a></li>
		<li><a href="" class="">退出</a></li>
	</ul>
</div>  

    <!--右弹购物车-->
    <div role="tabpanel" class="sidepanel" style="display:block;">
		<div class="ITuser">
			<div class="Hlogo"><img src="img/bn66.png" /><div class="Hltext">5</div></div>
			<div class="IName">
				<p class="name">1171801173@qq.com</p>
				<p class="account">认证账户</p>
				<img src="/images/v.png" />
				<a class="logout">退出</a>
			</div>
			<div class="sidepanel-open-button"></div>
		</div>
        <div style="float:left;height:auto;padding-bottom:30px;" >
			<form action="car.php" method="post" id="form_tcar">
				<div class="IIO_nt">购物车共：<span>20</span>个</div>
				<div class="IIO_line"></div>
				<ul class="ITorder"  id="apDiv1">
					<li><a href="">
						<div class="GWxuanxiang"><input type="checkbox" name="checkItem_tcar" data_id="1" data-price="1.01" /></div>
						<div class="IOimg"><img src="/images/avatar.png" />
							</div>
						<div class="IOtext">
							<h3>订单名称</h3>
							<p>￥1.00</p>
						</div>
					</a></li>
					<li><a href="">
						<div class="GWxuanxiang"><input type="checkbox" name="checkItem_tcar" data_id="2" data-price="2.10" /></div>
						<div class="IOimg"><img src="/images/avatar.png" />
						</div>
						<div class="IOtext">
							<h3>订单名称</h3>
							<p>￥2.00</p>
						</div>
					</a></li><li><a href="">
						<div class="GWxuanxiang"><input type="checkbox" name="checkItem_tcar" data_id="3" data-price="3.00" /></div>
						<div class="IOimg"><img src="/images/avatar.png" />
						</div>
						<div class="IOtext">
							<h3>订单名称</h3>
							<p>￥3.00</p>
						</div>
					</a></li>
					<li><a href="">
						<div class="GWxuanxiang"><input type="checkbox" name="checkItem_tcar" data_id="3" data-price="21.00" /></div>
						<div class="IOimg"><img src="/images/avatar.png" />
						</div>
						<div class="IOtext">
							<h3>订单名称</h3>
							<p>￥21.00</p>
						</div>
					</a></li>
					<li><a href="">
						<div class="GWxuanxiang"><input type="checkbox" name="checkItem_tcar" data_id="3" data-price="21.00" /></div>
						<div class="IOimg"><img src="/images/avatar.png" />
						</div>
						<div class="IOtext">
							<h3>订单名称</h3>
							<p>￥21.00</p>
						</div>
					</a></li>
					<li><a href="">
						<div class="GWxuanxiang"><input type="checkbox" name="checkItem_tcar" data_id="3" data-price="21.00" /></div>
						<div class="IOimg"><img src="/images/avatar.png" />
						</div>
						<div class="IOtext">
							<h3>订单名称</h3>
							<p>￥21.00</p>
						</div>
					</a></li>
					<li><a href="">
						<div class="GWxuanxiang"><input type="checkbox" name="checkItem_tcar" data_id="3" data-price="21.00" /></div>
						<div class="IOimg"><img src="/images/avatar.png" />
						</div>
						<div class="IOtext">
							<h3>订单名称</h3>
							<p>￥21.00</p>
						</div>
					</a></li>
					<li><a href="">
						<div class="GWxuanxiang"><input type="checkbox" name="checkItem_tcar" data_id="3" data-price="21.00" /></div>
						<div class="IOimg"><img src="/images/avatar.png" />
						</div>
						<div class="IOtext">
							<h3>订单名称</h3>
							<p>￥21.00</p>
						</div>
					</a></li>
				</ul>
				<div class="IObu">
					<p>合计 <span id="price_tcar" style="color:#f00;">0</span> 元</p>
					<input type="hidden" name="order_tcar" value="" />
					<input type="hidden" name="totalprice_tcar" value="0" />
					<input type="submit" name="button" id="button" value="提交支付" class="TOUbutton"/>
				</div>
			</form>
        </div>
    </div>



