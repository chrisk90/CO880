/*
Author: C.Kelly
Date:2014-DEC-02
Description:Javascript for the application
*/
var taxi = {
	nightMode:function() {
		$("#body").css("color", "white");
		$(".header").css("background-color", "#08088A");
		$(".footer").css("background-color", "#08088A");
	}
	,
	dayMode:function() {
		$("#body").css("color", "black");
		$(".header").css("background-color", "yellow");
		$(".footer").css("background-color", "yellow");
	}
	,
	displayDriver:function() {

	}
	,
	submitDriver:function() {
		$.ajax({
        url: "ajax_addDriver.php",
        type: "post",
        data: thisJson,
        success: function(json){
			alert("success");
        },
        error:function(){
			alert("failure");
        }
    });
	}
}