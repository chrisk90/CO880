/*
Author: C.Kelly
Date:2014-DEC-02
Description:Javascript for the application
*/
function nightMode() {
	$(".header").removeClass("day").addClass("night");
	$(".footer").removeClass("day").addClass("night");
}
function dayMode() {
	$(".header").removeClass("night").addClass("day");
	$(".footer").removeClass("night").addClass("day");
}