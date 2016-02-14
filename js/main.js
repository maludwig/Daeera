$(function () {
	var path = window.location.pathname.split("/");
	var tail = path[path.length - 1];
	if (tail === "") {
		tail = "home";
	}
	$(".navpic." + tail).addClass("active");

	activate("featured");
	$(".portfolio-nav-pic").click(function () {
		var pane = $(this).data("pane");
		activate(pane);
	});
	$(".portfolio-nav-pic").hover(function() {
		$(".arrow-right").removeClass("active");
		$(this).prev().addClass("active");
	}, function() {
		$(".arrow-right").removeClass("active");
	});
	$(".navpic").hover(function() {
		$(".arrow-down").removeClass("active");
		$(this).prev().addClass("active");
	}, function() {
		$(".arrow-down").removeClass("active");
	});
});

function activate(pane) {
	$(".portfolio-nav-pic").removeClass("active");
	$(".portfolio-nav-pic." + pane).addClass("active");

	$(".gallery-pane").hide();
	$(".gallery-pane." + pane).show();
}
