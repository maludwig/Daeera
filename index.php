<!DOCTYPE html>
<html lang="en">

<head>
	<title>Daeera - Home</title>
	<?php include("fragments/head-all.php"); ?>
</head>

<body>
	<?php include("fragments/nav.php"); ?>

		<section id="content" class="container-fluid">

			<div class="col-md-1 hidden-sm hidden-xs">
			</div>
			<div class="hidden-sm hidden-xs col-md-2 social-column">
				<a href='http://daeera.deviantart.com/' target="_blank"><img src='img/home/devient_art.png' /></a>
				<a href='https://www.youtube.com/channel/UCRjnrJirZCUldO5RkMB6Jiw' target="_blank"><img src='img/home/youtube.png' /></a>
				<a href='https://www.youtube.com/playlist?list=PLmykU6hzTPFQ4i0Se_cIQxInYQU43xkKJ' target="_blank"><img src='img/home/podcast.png' /></a>
			</div>
			<div class="hidden-md hidden-lg social-bar">
				<a href='http://daeera.deviantart.com/' target="_blank"><img src='img/home/devient_art.png' /></a>
				<a href='https://www.youtube.com/channel/UCRjnrJirZCUldO5RkMB6Jiw' target="_blank"><img src='img/home/youtube.png' /></a>
				<a href='https://www.youtube.com/playlist?list=PLmykU6hzTPFQ4i0Se_cIQxInYQU43xkKJ' target="_blank"><img src='img/home/podcast.png' /></a>
			</div>
			<div class="col-md-2 hidden-sm hidden-xs">
			</div>
			<div class="col-md-6">
				<img src='img/home/s_talk_1.png' class='chatBubble' alt='' />
				<img src='img/home/Sakuru.png' class='hero' alt='' />
			</div>
			<div class="col-md-1 hidden-sm hidden-xs">
			</div>
		</section>
		<script>
			$(function () {
				var picIndex = Math.ceil(Math.random() * 5);
				$(".chatBubble").attr("src", "img/home/s_talk_" + picIndex + ".png");
			});
		</script>
	<?php include("fragments/footer-all.php"); ?>
</body>

</html>