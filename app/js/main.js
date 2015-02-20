/*
Author: C.Kelly
Date:2014-DEC-02
Description:Javascript for the application
*/
function nightMode() {
	var nightmode = true;
	alert(nightmode);
	$("#body").css("color", "black");
	$(".header").css("background-color", "gray");
	$(".footer").css("background-color", "gray");
}
function dayMode() {
	$("#body").css("color", "black");
	$(".header").css("background-color", "yellow");
	$(".footer").css("background-color", "yellow");
}