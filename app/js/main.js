/*
Author: C.Kelly
Date:2014-DEC-02
Description:Javascript for the application
*/

function nightMode() {
	$("#body").css("color", "white");
	$(".header").css("background-color", "#08088A");
	$(".footer").css("background-color", "#08088A");
}
function dayMode() {
	$("#body").css("color", "black");
	$(".header").css("background-color", "yellow");
	$(".footer").css("background-color", "yellow");
}
function displayDriver() {

}
function submitDriver() {
	$.ajax({
       url: "ajax_addDriver.php",
       type: "post",
       success: function(){
		alert("success");
       },
       error:function(){
		alert("failure");
       }
   });
}