/**
 * Created with JetBrains PhpStorm.
 * User: De Untouchable
 * Date: 10/26/14
 * Time: 1:15 PM
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function()
{
    $("#menu-line").append("<div id='menuslider'></div>");
    var $slider=$("#menuslider");
    var ev=  $("#menu-list li a");

    ev.mouseover(function(e){
	
	var temp_width = $(this).width();
	var temp_left = $(this).position().left;
	
	console.log(temp_width,temp_left);
        e.preventDefault(); //sijui kwanini umeweka
         
		 $slider.stop().css('height','4').animate({left:temp_left,width: temp_width});
		 /*$slider.width($(this).width()) //U ARE FETCHING THE WHOLE DATA ALL OVER AGAIN
             .css("left",$(this).position().left)
             .css("background","black")
             .data("origLeft",$slider.position().left)
             .data("origWidth",$slider.width());
        $slider.stop().animate({left:$slider.data("origLeft"),
            width:$slider.data("origWidth")},1000);
			*/

    });


});
