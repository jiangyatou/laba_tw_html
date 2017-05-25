/*
 *   
 * jQuery scrollQ plugin li上下滚动插件 
 * numline 每行显示li个数  
 * animateTime	滚动速度	每次滚动一行动画所花时间	单位毫秒 
 * scrollTime	滚动速度	两次滚动相隔时间			单位毫秒 
 * direction	滚动方向	向左或向上					默认向左
	向左滚动 ul宽度大点	如	10000px
	向上滚动 ul宽度小点	如	900px
 * clickloop	循环滚动，点击时 向左/上滚动到第一页继续滚动到最后一页......
 * autorun		yes 为自动滚动，包括鼠标移开时、点击后放开时。其他如 no 则不自动滚动
	$("#scroll_1").scrollQ2({
		numline:4,
		animateTime:150,
		scrollTime:2500,
		direction:"top",
		leftbutton:".l_box_41",
		rightbutton:".r_box_41",
		clickloop:"yes",
		autorun:"yes"
	});
	用 id名 来调用，用类名会出问题，就算用类名调用也至少要给 ul 加上id名
	还要注意 li 的 margin-left 、 margin-top 、 border ，最好都不要加，否则会错位，要再改
 */ 
(function($){    
    $.fn.scrollQ2 = function(options){    
        var defaults = {    
            numline:6,
            animateTime:300,
            scrollTime:2000,
			direction:"left",
			leftbutton:".l_box_scroll",
			rightbutton:".r_box_scroll",
			clickloop:"yes",
			autorun:"yes"
        }  
        var options=jQuery.extend(defaults,options);  
        var _self = this;  
		var num=$("li",_self).length;
		var line=Math.ceil(num/options.numline);
		var marginBottom=parseInt($("li",_self).css("margin-bottom"));
		var marginRight=parseInt($("li",_self).css("margin-right"));
		var height=parseInt($("li",_self).css("height"));
			height+=marginBottom;
			height=height*options.numline;
		var width=parseInt($("li",_self).css("width"));
			width+=marginRight;
			width=width*options.numline;
		var id=$(_self).attr("id");
//		alert(" num:"+num+";\r\n line:"+line+";\r\n height:"+width);
//		alert(defaults.direction);
		function scroll_2(){
			if( options.direction=="top" ){
				var top=parseInt($("li",_self).css("top"));
				top-=height;
				if( top < -(line-1)*height ){	top=0;	}
				var data=$("#"+id).attr("data");
				if( isNaN(data) ){	data=1;	}
				data=data-(-1);
				if( data>line ){	data=1;	}
				$("#"+id).attr("data",data);
				$("li",_self).stop(true).animate({"top":top},options.animateTime);
				if( $("#"+id).next("ol").length>0 ){
					$("#"+id).next("ol").find("li:eq("+(data-1)+")").addClass("on").siblings("li").removeClass("on");
				}
			}else{
				var left=parseInt($("li",_self).css("left"));
				left-=width;
				if( left < -(line-1)*width ){	left=0;	}
				var data=$("#"+id).attr("data");
				if( isNaN(data) ){	data=1;	}
				data=data-(-1);
				if( data>line ){	data=1;	}
				$("#"+id).attr("data",data);
				$("li",_self).stop(true).animate({"left":left},options.animateTime);
				if( $("#"+id).next("ol").length>0 ){
					$("#"+id).next("ol").find("li:eq("+(data-1)+")").addClass("on").siblings("li").removeClass("on");
				}
			}
		}
		
		$("#"+id).next("ol").find("a").bind("click",function(){
			if( options.direction=="top" ){
				var cur=$(this).parent("li").index();			
				var top=parseInt($("li",_self).css("top"));
				top=-cur*height;
				$("#"+id).attr("data",cur-(-1));
				$(this).parent("li").addClass("on").siblings("li").removeClass("on");
				$("li",_self).stop(true).animate({"top":top},options.animateTime);
			}else{
				var cur=$(this).parent("li").index();			
				var top=parseInt($("li",_self).css("left"));
				left=-cur*width;
				$("#"+id).attr("data",cur-(-1));
				$(this).parent("li").addClass("on").siblings("li").removeClass("on");
				$("li",_self).stop(true).animate({"left":left},options.animateTime);			
			}
			return false;
		});
		
		if( $(options.leftbutton).length>0 ){
			$(options.leftbutton).bind("click",function(){
				var data=$("#"+id).attr("data");
				if( isNaN(data) ){	data=1;	}
				data=data-1;
				if( options.clickloop=="yes" ){
					if( data<1 ){	data=line;	}
				}else{
					if( data<1 ){	data=1;	}
				}
				$("#"+id).attr("data",data);
				var left=-(data-1)*width;
				var top=-(data-1)*height;
//				if( left < -(line-1)*width ){	left=0;	}
//				if( top < -(line-1)*height ){	top=0;	}
				if( options.direction=="top" ){
					$("li",_self).stop(true).animate({"top":top},options.animateTime);
					if( $("#"+id).next("ol").length>0 ){
						$("#"+id).next("ol").find("li:eq("+(data-1)+")").addClass("on").siblings("li").removeClass("on");
					}
				}else{
					$("li",_self).stop(true).animate({"left":left},options.animateTime);
					if( $("#"+id).next("ol").length>0 ){
						$("#"+id).next("ol").find("li:eq("+(data-1)+")").addClass("on").siblings("li").removeClass("on");
					}
				}
				return false;
			});
			$(options.leftbutton).bind("mouseover",function(){  
				clearInterval(timer);  
			});  
			$(options.leftbutton).bind("mouseout",function(){  
				if( options.autorun=="yes" ){
					timer = setInterval(scroll_2,options.scrollTime);  
				}
			});
		}
		
		if( $(options.rightbutton).length>0 ){
			$(options.rightbutton).bind("click",function(){
				var data=$("#"+id).attr("data");
				if( isNaN(data) ){	data=1;	}
				data=data-(-1);
				if( options.clickloop=="yes" ){
					if( data>line ){	data=1;	}
				}else{
					if( data>line ){	data=line;	}
				}
				$("#"+id).attr("data",data);
				var left=-(data-1)*width;
				var top=-(data-1)*height;
//				if( left < -(line-1)*width ){	left=0;	}
//				if( top < -(line-1)*height ){	top=0;	}
				if( options.direction=="top" ){
					$("li",_self).stop(true).animate({"top":top},options.animateTime);
					if( $("#"+id).next("ol").length>0 ){
						$("#"+id).next("ol").find("li:eq("+(data-1)+")").addClass("on").siblings("li").removeClass("on");
					}
				}else{
					$("li",_self).stop(true).animate({"left":left},options.animateTime);
					if( $("#"+id).next("ol").length>0 ){
						$("#"+id).next("ol").find("li:eq("+(data-1)+")").addClass("on").siblings("li").removeClass("on");
					}
				}
				return false;
			});
			
			$(options.rightbutton).bind("mouseover",function(){  
				clearInterval(timer);  
			});  
			$(options.rightbutton).bind("mouseout",function(){  
				if( options.autorun=="yes" ){
					timer = setInterval(scroll_2,options.scrollTime);  
				}
			});
		}
		
		
		
		var timer;
		if( options.autorun=="yes" ){
			timer = setInterval(scroll_2,options.scrollTime);  
		}
		_self.bind("mouseover",function(){  
			clearInterval(timer);  
		});  
		_self.bind("mouseout",function(){  
			if( options.autorun=="yes" ){
				timer = setInterval(scroll_2,options.scrollTime);  
			}
		});  
				
		_self.next("ol").bind("mouseover",function(){  
			clearInterval(timer);  
		});  
		_self.next("ol").bind("mouseout",function(){  
			if( options.autorun=="yes" ){
				timer = setInterval(scroll_2,options.scrollTime);  
			}
		});  
    }  
})(jQuery);