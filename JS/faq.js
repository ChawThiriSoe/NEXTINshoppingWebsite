$(document).ready(function () {
	$(".content-box").hide();
	$(".contorol").click(function () {
		$(this).next(".content-box").slideToggle().siblings(".content-box").slideUp();
		if ($("i").hasClass("fa-plus")) {
			$(this).find("i").toggleClass("fa-minus");
		
		}
 	});
});