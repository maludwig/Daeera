<!DOCTYPE html>
<html lang="en">

<head>
	<title>Daeera - Portfolio</title>
	<?php include("fragments/head-all.php"); ?>

	<link href="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.min.css" rel="stylesheet">
	<script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.min.js"></script>
	<script>
		$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
			event.preventDefault();
			$(this).ekkoLightbox();
		});
		$(function() {
			$(".portfolio-nav-pic").hover(function() {
				$(".arrow-right").removeClass("active");
				$(this).prev().addClass("active");
			}, function() {
				$(".arrow-right").removeClass("active");
			});
		});
	</script>
</head>

<body>
	<?php include("fragments/nav.php"); ?>
		<div id="content" class="container-fluid">
			<div class="portfolio-nav col-sm-5 col-md-4 col-lg-3">
				<div><div class="arrow-right"></div><a data-pane="featured" class="portfolio-nav-pic featured" href='#'></a></div>
				<div><div class="arrow-right"></div><a data-pane="animation" class="portfolio-nav-pic animation" href='#'></a></div>
				<div><div class="arrow-right"></div><a data-pane="char-dsgn" class="portfolio-nav-pic char-dsgn" href='#'></a></div>
				<div><div class="arrow-right"></div><a data-pane="digi-paint" class="portfolio-nav-pic digi-paint" href='#'></a></div>
				<div><div class="arrow-right"></div><a data-pane="game-dsgn" class="portfolio-nav-pic game-dsgn" href='#'></a></div>
				<div><div class="arrow-right"></div><a data-pane="pixl-art" class="portfolio-nav-pic pixl-art" href='#'></a></div>
				<div><div class="arrow-right"></div><a data-pane="sketch" class="portfolio-nav-pic sketch" href='#'></a></div>
			</div>
			<div class="gallery col-sm-7 col-md-8 col-lg-9">
				<div class="gallery-pane featured">
					<!-- Projects Row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-DAEERA Production Label-</a></h3>
							<a href="img/portfolio/animation/000_Daeera.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/000_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-COMA STATE: Boss Concepts-</a></h3>
							<a href="img/portfolio/sketchbook/COMA_STATE_Boss_Concepts.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/comastatebossconcepts_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Figure Drawing 1-</a></h3>
							<a href="img/portfolio/sketchbook/Figuredrawing0.PNG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/untitled1_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Title Screen-</a></h3>
							<a href="img/portfolio/game_design/000B_Title.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/title_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Outmode Member Designs-</a></h3>
							<a href="img/portfolio/character_design/010_OutmodeDesigns.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Outmodedesigns_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-The Dancing Bird-</a></h3>
							<a href="img/portfolio/digital_paint/001_lauragout.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Lauragout_icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
				</div>
				<div class="gallery-pane animation">
					<!-- Projects Row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-DAEERA Production Label-</a></h3>
							<a href="img/portfolio/animation/000_Daeera.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/000_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Together Is Amazing-</a></h3>
							<a href="img/portfolio/animation/001_Together_Is_Amazing.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/001_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Mushu Sun-</a></h3>
							<a href="img/portfolio/animation/002_MushuSun.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/002_icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Happy Camper LCD-</a></h3>
							<a href="img/portfolio/animation/003_LCD.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/003_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Panoram Heist-</a></h3>
							<a href="img/portfolio/animation/003A_PanoramHeist.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/004_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-In Ogre My Head-</a></h3>
							<a href="img/portfolio/animation/004_OgreMyhead.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/005_icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Negative0 Map-</a></h3>
							<a href="img/portfolio/animation/005_CanadaEH.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/006_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Internet Creator-</a></h3>
							<a href="img/portfolio/animation/006_internethistory.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/006_internethistoryicon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Slice of Life-</a></h3>
							<a href="img/portfolio/animation/007_Slice_Of_Life.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/007_icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Podcast Title-</a></h3>
							<a href="img/portfolio/animation/008_Unproductive.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/008_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Flip Book-</a></h3>
							<a href="img/portfolio/animation/009_flipbook.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/009_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Supplies Broomstick-</a></h3>
							<a href="img/portfolio/animation/010_Supplies_Broom.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/010_icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Walk Cycle-</a></h3>
							<a href="img/portfolio/animation/011_WalkCycle.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/011_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-OWC Doug-</a></h3>
							<a href="img/portfolio/animation/douginlab.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/douginthelab_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Jack Fox Is A Yes-</a></h3>
							<a href="img/portfolio/animation/jackfoxisayes.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/jackfoxisyes_icon.png" alt="">
							</a>

						</div>

					</div>
					<!-- /.row -->
										<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-LaMoviéh-</a></h3>
							<a href="img/portfolio/animation/nochildren.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/nochildren_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-OWC Watershed-</a></h3>
							<a href="img/portfolio/animation/Watershedmap.gif" data-toggle="lightbox" data-gallery="animation">
								<img class="img-responsive" src="img/icons/OWC_Icon.png" alt="">
							</a>

						</div>

					</div>
					<!-- /.row -->
				</div>
				<div class="gallery-pane char-dsgn">
					<!-- Projects Row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-AdamSakuru Model Sheet-</a></h3>
							<a href="img/portfolio/character_design/000_AdamModel%20Sheet.PNG" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Adammodel_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Fred Model Sheet-</a></h3>
							<a href="img/portfolio/character_design/001_FredModelSheet.jpg" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Fredmodel_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Strat Model Sheet-</a></h3>
							<a href="img/portfolio/character_design/002_StratModelSheet.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Stratmodel_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Winston Model Sheet-</a></h3>
							<a href="img/portfolio/character_design/003_WinstonModelSheet.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Winstonmodel_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Ari Model Sheet-</a></h3>
							<a href="img/portfolio/character_design/004_AriModelSheet.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Arimodel_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Clive Model Sheet-</a></h3>
							<a href="img/portfolio/character_design/005_CliveModelSheet.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Clivemodel_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Node AD Hoc-</a></h3>
							<a href="img/portfolio/character_design/006_NodeADHoc.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/NodeADHoc_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Desert Arab Costume-</a></h3>
							<a href="img/portfolio/character_design/007_AdamBurningManCosplay.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Burningmancosplay_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-WURM-</a></h3>
							<a href="img/portfolio/character_design/008_WURM.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/WURM_Icon.png" alt="">
							</a>

						</div>

					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Richter Scayle-</a></h3>
							<a href="img/portfolio/character_design/009_Richter_Scale.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Richterscale_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Outmode Member Designs-</a></h3>
							<a href="img/portfolio/character_design/010_OutmodeDesigns.png" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Outmodedesigns_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Silent Protagonist-</a></h3>
							<a href="img/portfolio/character_design/011_Silent Protagonist.JPG" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/silentprotagonist_Icon.png" alt="">
							</a>
						</div>
					</div>
					<!-- /.row -->
										<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-The Stillborn-</a></h3>
							<a href="img/portfolio/character_design/012_stillborn.JPG" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/stillborn_icon.PNG" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Hassan 'The Outlaw' Mahayid-</a></h3>
							<a href="img/portfolio/character_design/Hassan.JPG" data-toggle="lightbox" data-gallery="char-dsgn">
								<img class="img-responsive" src="img/icons/Hassan_icon.PNG" alt="">
							</a>

						</div>

					</div>
					<!-- /.row -->
				</div>
				<div class="gallery-pane digi-paint">
					<!-- Projects Row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Sakuru & 4th Queen-</a></h3>
							<a href="img/portfolio/digital_paint/000_queensummon.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Queen_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Summoning Twist-</a></h3>
							<a href="img/portfolio/digital_paint/000A_Twist.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Twist_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-The Dancing Bird-</a></h3>
							<a href="img/portfolio/digital_paint/001_lauragout.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Lauragout_icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Robo Gout-</a></h3>
							<a href="img/portfolio/digital_paint/002_robogout.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Robogout_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-The Starmen-</a></h3>
							<a href="img/portfolio/digital_paint/003_starmen.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Starmen_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Character Creator Title-</a></h3>
							<a href="img/portfolio/digital_paint/004_rpgtitle.jpeg" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/RPGtitle_icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Let's Go Together-</a></h3>
							<a href="img/portfolio/digital_paint/005_letsgotogether.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/letsgotogether_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Warmer Lovers-</a></h3>
							<a href="img/portfolio/digital_paint/006_wishfulthinking.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/wishful_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-A Sim & Her Dog-</a></h3>
							<a href="img/portfolio/digital_paint/007_kaitsim.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/kaitsim_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Outmode Debut-</a></h3>
							<a href="img/portfolio/digital_paint/008_Outmode.png" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Outmode_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Outmode Mode7 Tour Dates-</a></h3>
							<a href="img/portfolio/digital_paint/009_Outmode2.JPG" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Outmode2_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Sittin' In A Tree-</a></h3>
							<a href="img/portfolio/digital_paint/Sitting_In_a_Tree.JPG" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Sitting_In_Tree_Icon.PNG" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-PERThomas4-</a></h3>
							<a href="img/portfolio/digital_paint/012Thomas_Gift.JPG" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Thomas_Icon.PNG" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Singapore Strikers II-</a></h3>
							<a href="img/portfolio/digital_paint/011_Singapore_Strikers_2.JPG" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Singaporestrikers_icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Definitive Hustler's Fundamentals-</a></h3>
							<a href="img/portfolio/digital_paint/Definitive_Hustler.JPG" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/Definitive_Icon.PNG" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Coffee Break From Hell-</a></h3>
							<a href="img/portfolio/digital_paint/010_HeatherAttempt22.JPG" data-toggle="lightbox" data-gallery="digi-paint">
								<img class="img-responsive" src="img/icons/HeatherDM_Icon.PNG" alt="">
							</a>

						</div>
					</div>
				</div>
				<div class="gallery-pane pixl-art">
					<!-- Projects Row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Burai Spritesheet-</a></h3>
							<a href="img/portfolio/pixel_art/BURAI.PNG" data-toggle="lightbox" data-gallery="pixl-art">
								<img class="img-responsive" src="img/icons/Burai_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Friends In My Heart-</a></h3>
							<a href="img/portfolio/pixel_art/Friendsinmyheart.PNG" data-toggle="lightbox" data-gallery="pixl-art">
								<img class="img-responsive" src="img/icons/friendsinmyheart_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Gobrins-</a></h3>
							<a href="img/portfolio/pixel_art/Gobrins.png" data-toggle="lightbox" data-gallery="pixl-art">
								<img class="img-responsive" src="img/icons/Gobrins_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Illusive Heather-</a></h3>
							<a href="img/portfolio/pixel_art/Heather.PNG" data-toggle="lightbox" data-gallery="pixl-art">
								<img class="img-responsive" src="img/icons/Heather_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-HOLM-</a></h3>
							<a href="img/portfolio/pixel_art/HOLM.PNG" data-toggle="lightbox" data-gallery="pixl-art">
								<img class="img-responsive" src="img/icons/Holm_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Don't Be patchmun GUI-</a></h3>
							<a href="img/portfolio/pixel_art/HUD_Buttons.PNG" data-toggle="lightbox" data-gallery="pixl-art">
								<img class="img-responsive" src="img/icons/HUDbuttons_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Taalabaya Tileset-</a></h3>
							<a href="img/portfolio/pixel_art/Taalabaya.PNG" data-toggle="lightbox" data-gallery="pixl-art">
								<img class="img-responsive" src="img/icons/Taalabaya_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Twisten-</a></h3>
							<a href="img/portfolio/pixel_art/Twist1.PNG" data-toggle="lightbox" data-gallery="pixl-art">
								<img class="img-responsive" src="img/icons/Twist1_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Enemies & Bosses-</a></h3>
							<a href="img/portfolio/pixel_art/untitled.PNG" data-toggle="lightbox" data-gallery="pixl-art">
								<img class="img-responsive" src="img/icons/untitled_Icon.png" alt="">
							</a>

						</div>
					</div>
				</div>
				<div class="gallery-pane sketch">
					<!-- Projects Row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Skeleton Practice-</a></h3>
							<a href="img/portfolio/sketchbook/011_Human_Skeleton.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Humanskeleton_icon_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Anatomy Practice-</a></h3>
							<a href="img/portfolio/sketchbook/012_Human_Anatomy.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Humananatomy_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Male & Female Wires-</a></h3>
							<a href="img/portfolio/sketchbook/014_Male_And_Female_Wires.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/anatomy2_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-COMA STATE: Boss Concepts-</a></h3>
							<a href="img/portfolio/sketchbook/COMA_STATE_Boss_Concepts.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/comastatebossconcepts_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Figure Drawing 1-</a></h3>
							<a href="img/portfolio/sketchbook/Figuredrawing0.PNG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/untitled1_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Figure Drawing 2-</a></h3>
							<a href="img/portfolio/sketchbook/Figuredrawing1.PNG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/untitled2_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Figure Drawing 3-</a></h3>
							<a href="img/portfolio/sketchbook/Figuredrawing2.PNG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/untitled3_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Figure Drawing 4-</a></h3>
							<a href="img/portfolio/sketchbook/Figuredrawing3.PNG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/untitled4_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Gabriel Knight-</a></h3>
							<a href="img/portfolio/sketchbook/GabrielKnight.PNG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Gabrielknight_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Cel Shading-</a></h3>
							<a href="img/portfolio/sketchbook/greenie.PNG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Greenie_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Negative Space-</a></h3>
							<a href="img/portfolio/sketchbook/Negative_Space.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Negativespace_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Object Sketching-</a></h3>
							<a href="img/portfolio/sketchbook/object___stop_light_by_daeera-d80arys.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Stoplight_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Practice 1-</a></h3>
							<a href="img/portfolio/sketchbook/practice__1_by_daeera-d7yy0b2.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Practice1_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Practice 2-</a></h3>
							<a href="img/portfolio/sketchbook/practice__2_by_daeera-d7z1i5j.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/practice2_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Practice 3-</a></h3>
							<a href="img/portfolio/sketchbook/practice__3_by_daeera-d809hs5.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Practice3_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Dancing Bird's Head-</a></h3>
							<a href="img/portfolio/sketchbook/Shawnahead.PNG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/shawnahead_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-Rendering Practice-</a></h3>
							<a href="img/portfolio/sketchbook/Study%20so%20far.png" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Studysofar_Icon.png" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="gallery-pane game-dsgn">
					<!-- Projects Row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Box Art (Front)-</a></h3>
							<a href="img/portfolio/game_design/000_RPG_Cover.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/titlecover_icon.PNG" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Box Art (Back)-</a></h3>
							<a href="img/portfolio/game_design/000A_Back_Of_Box.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Back_Of_Box_Icon.PNG" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Title Screen-</a></h3>
							<a href="img/portfolio/game_design/000B_Title.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/title_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Overworld-</a></h3>
							<a href="img/portfolio/game_design/001_home.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/home_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Action Stage-</a></h3>
							<a href="img/portfolio/game_design/002_platform.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/platform_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Boss Battle-</a></h3>
							<a href="img/portfolio/game_design/003_boss.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/boss_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Chipstorm Match-</a></h3>
							<a href="img/portfolio/game_design/004_cardgame.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/cardgame_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ World Map-</a></h3>
							<a href="img/portfolio/game_design/005_worldmap.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/worldmap_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-TSC:MAJ Shop Scene-</a></h3>
							<a href="img/portfolio/game_design/006_shop.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/shop_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-COMAT STATE: Azure Dream 1-</a></h3>
							<a href="img/portfolio/game_design/Shooter1.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/shooter1_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-COMAT STATE: Azure Dream 2-</a></h3>
							<a href="img/portfolio/game_design/Shooter2.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/shooter2_Icon.png" alt="">
							</a>

						</div>
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-COMAT STATE: Boss Battle-</a></h3>
							<a href="img/portfolio/game_design/Shooter3.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/shooter3_Icon.png" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<h3><a href="#">-The Steel Hijab-</a></h3>
							<a href="img/portfolio/game_design/Steelhijab.JPG" data-toggle="lightbox" data-gallery="sketch">
								<img class="img-responsive" src="img/icons/Steelhijab_icon.PNG" alt="">
							</a>

						</div>
					</div>
					<!-- /.row -->
				</div>
			</div>
		</div>
	<?php include("fragments/footer-all.php"); ?>
</body>

</html>
