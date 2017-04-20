/* Sidebar Menu*/
$(document).ready(function() {
//	$('.inactive').click(function(){
	$('.header').click(function(){
		if( $("body").hasClass("fold") ){
			$(".sidebar-open-button").click();
			if( $(this).hasClass("inactives") ){
				return false;
			}
		}
		if($(this).siblings('.menu').css('display')=='none'){
			$(this).parent('li').siblings('li').removeClass('inactives');
			$(this).addClass('inactives');
			$(this).siblings('ul').slideDown(500).children('li');
		}else{
			$(this).removeClass('inactives');
			$(this).siblings('ul').slideUp(500);
			$(this).siblings('ul').children('li').children('a').removeClass('inactives');
		}
	})
});

/* Top Stats Show Hide */
$(document).ready(function(){
	$(".sidepanel").css("display","none");
	$(".IMenuda").css("display","none");
	$(".sidepanel-open-button").click(function(){
		$(".sidepanel").toggle(100); 
	});
});


/* Sidebar Show-Hide On Mobile */
$(document).ready(function(){
    $(".sidebar-open-button-mobile").click(function(){
        $(".sidebar").toggle(150);
    });
});


/* Sidebar Show-Hide */
$(document).ready(function(){
	if(!$('body').hasClass('fold')){
		setMenuColor("show");	
	}
    $('.sidebar-open-button').on('click', function(){
		if($('body').hasClass('fold')){
 			$("body").removeClass("fold");
			setMenuColor("show");
        }else{
			$("body").addClass("fold");
			setMenuColor("hide");
        }
		return false;
    });
});


/* ===========================================================
PANEL TOOLS
===========================================================*/
/* Minimize */
$(document).ready(function(){
  $(".panel-tools .minimise-tool").click(function(event){
  $(this).parents(".panel").find(".panel-body").slideToggle(100);

  return false;
}); 

 }); 

/* Close */
$(document).ready(function(){
  $(".panel-tools .closed-tool").click(function(event){
  $(this).parents(".panel").fadeToggle(400);

  return false;
}); 

 }); 

 /* Search */
$(document).ready(function(){
  $(".panel-tools .search-tool").click(function(event){
  $(this).parents(".panel").find(".panel-search").toggle(100);

  return false;
}); 

 }); 




/* expand */
$(document).ready(function(){

    $('.panel-tools .expand-tool').on('click', function(){
        if($(this).parents(".panel").hasClass('panel-fullsize'))
        {
            $(this).parents(".panel").removeClass('panel-fullsize');
        }
        else
        {
            $(this).parents(".panel").addClass('panel-fullsize');
 
        }
    });

});


/* ===========================================================
Widget Tools
===========================================================*/


/* Close */
$(document).ready(function(){
  $(".widget-tools .closed-tool").click(function(event){
  $(this).parents(".widget").fadeToggle(400);

  return false;
}); 

 }); 


/* expand */
$(document).ready(function(){

    $('.widget-tools .expand-tool').on('click', function(){
        if($(this).parents(".widget").hasClass('widget-fullsize'))
        {
            $(this).parents(".widget").removeClass('widget-fullsize');
        }
        else
        {
            $(this).parents(".widget").addClass('widget-fullsize');
 
        }
    });

});

/* Kode Alerts */
/* Default */
$(document).ready(function(){
  $(".kode-alert .closed").click(function(event){
  $(this).parents(".kode-alert").fadeToggle(350);

  return false;
}); 

 }); 


/* Click to close */
$(document).ready(function(){
  $(".kode-alert-click").click(function(event){
  $(this).fadeToggle(350);

  return false;
}); 

 }); 



/* Tooltips 
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/* Popover
$(function () {
  $('[data-toggle="popover"]').popover()
})  */


/* Page Loading */
$(window).load(function() {
  $(".loading").fadeOut(750);
})



	


/*	menu	*/
function setMenuColor(str){
		if( str == "hide" ){			// == "hide"
			$(".menu").hide();
			$(".header.inactives").removeClass("inactives");
			$(".menu li.cur").closest(".menu").prev(".header").addClass("inactives");
		}else{
			$(".menu a").each(function(){
				var href1 = $.trim($(this).attr("href"));
				var href2 = window.location.href;
//				if( href1 != "" && href1 != "#" &&  ( href2 == href1 || href2.indexOf(href1) >= 0 ) ){
				if( href1 != "" && href1 != "#" && href2 == href1 ){
					$(this).parents(".menu").css("display","block").prev(".header").addClass("inactives");
					$(this).parent("li").addClass("cur");
				}
			});
			$(".header .label a").each(function(){
				var href1 = $.trim($(this).attr("href"));
				var href2 = window.location.href;
//				if( href1 != "" && href1 != "#" &&  ( href2 == href1 || href2.indexOf(href1) >= 0 ) ){
				if( href1 != "" && href1 != "#" && href2 == href1 ){
					$(this).closest(".header").addClass("active");
				}
			});
		}
}

$(function(){


	/*	订单统计 图表	*/
	if( $('#tb2').length > 0 ){
		var myChart2 = echarts.init(document.getElementById('tb2'));
		option2 = {
			title : { show: false },
			tooltip : {
				trigger: 'item',
				formatter: "{a} <br/>{b} : {c} ({d}%)"
			},
			legend: {
				orient: 'vertical',
				left: 'right',
				top: 'center',
				align: 'left',
				data: ['完成','未完成','流放','预约状态','退还']
			},
			series : [
				{
					name: '访问来源',
					type: 'pie',
					radius : '80%',
					center: ['40%', '50%'],
					data:[
						{value:2000, name:'完成'},
						{value:1000, name:'未完成'},
						{value:500, name:'流放'},
						{value:200, name:'预约状态'},
						{value:100, name:'退还'}
					],
					itemStyle: {
						emphasis: {
							shadowBlur: 10,
							shadowOffsetX: 0,
							shadowColor: 'rgba(0, 0, 0, 0.5)'
						}
					}
				}
			]
		};
		myChart2.setOption(option2);
	}
	
	/*	可用余额 图表	*/
	if( $('#tb3').length > 0 ){
		var myChart3 = echarts.init(document.getElementById('tb3'));
		option3 = {
			tooltip: {
				trigger: 'item',
				formatter: "{a} <br/>{b}: {c} ({d}%)"
			},
			color:['#1ab394', '#aaa'],
			legend: {
				show: false,
				orient: 'vertical',
				x: 'left',
				data:['可用余额','不可用余额']
			},
			series: [
				{
					name:'余额',
					type:'pie',
					radius: ['70%', '84%'],
					avoidLabelOverlap: false,
					label: {
						normal: {
							show: false,
							position: 'center'
						},
						emphasis: {
							show: false,
							textStyle: {
								fontSize: '20',
								fontWeight: 'bold'
							}
						}
					},
					labelLine: {
						normal: {
							show: false
						}
					},
					data:[
						{value:2356636, name:'可用余额'},
						{value:1600000, name:'不可用余额'}
					]
				}
			]
		};
		myChart3.setOption(option3);	
	}
	
	
	
	
	
	
	
	
	
	
});

