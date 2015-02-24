<!-- 
Author: C.Kelly
Date:2015-FEB-17
-->
<link rel="stylesheet" type="text/css" href="css/layout.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>
<script type="text/javascript">
	var time = setInterval(function(){
		myTimer()
	}, 100);
	function myTimer() {
		var d = new Date();
		// document.getElementById("time").innerHTML = d.toLocaleTimeString();
		var m = d.getHours();
		if (m < 8) {
			nightMode();
		}
		else if (m >= 8 && m < 17) {
			dayMode();
		}
		else if (m >= 17) {
			nightMode();
		}
	}
</script>