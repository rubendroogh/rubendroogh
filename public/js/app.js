$(document).ready(function(){
	homePageAnimation();
});

function homePageAnimation() {
	// does the slide animation when loggin in
	var heightTop = $( ".home .color-top" ).css("height");
	var heightBottom = $( ".home .color-bottom" ).css("height");
	
	$( ".home .color-top" ).css("top", "-" + heightTop);
	$( ".home .color-bottom" ).css("bottom", "-" + heightBottom);
	setTimeout(function() {
		$( ".home .navigation" ).css("left", "calc(100vw - 5rem)");
		$( ".home .panel" ).css("transform", "translate(-50%, -50%)");
	 }, 1000);

}