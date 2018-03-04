<?php
$zufallsContainer = array();

$zufallsContainer[0] = 'individuell';
$zufallsContainer[1] = 'leidenschaftlich';
$zufallsContainer[2] = 'effizient';
$zufallsContainer[3] = 'vielfältig';
$zufallsContainer[4] = 'fundiert';
$zufallsContainer[5] = 'inspirierend';
$zufallsContainer[6] = 'geduldig';
$zufallsContainer[7] = 'jedes Mal anders';
$zufallsContainer[8] = 'didaktisch';
$zufallsContainer[9] = 'mit Tiefgang';

$zufallsContainer[10] = 'so individuell wie die Partner';
$zufallsContainer[11] = 'forschend';
$zufallsContainer[12] = 'tiefgründig';
$zufallsContainer[13] = 'mit einem Pionier';
$zufallsContainer[14] = 'unterhaltsam';
$zufallsContainer[15] = 'auf das Quadrat gebracht';
$zufallsContainer[16] = 'einfach gut';
$zufallsContainer[17] = 'durchdacht';
$zufallsContainer[18] = 'einfühlsam';
$zufallsContainer[19] = 'experimentierfreudig';

$zufallsContainer[20] = 'immer wieder neu';
$zufallsContainer[21] = 'neugierig';
$zufallsContainer[22] = 'erfrischend';
$zufallsContainer[23] = 'mit einem Pionier';
$zufallsContainer[24] = 'Lust auf Mehr';
$zufallsContainer[25] = 'kreativ';
$zufallsContainer[26] = 'einprägsam';
$zufallsContainer[27] = 'konsequent';
$zufallsContainer[28] = 'stimmig';
$zufallsContainer[29] = 'einzigartig';

$zufallsContainer[30] = 'mehrdimensional';

$zufallsZahl = rand(0, count($zufallsContainer)-1);
// echo $zufallsContainer[$zufallsZahl];



// fittext
// $("#design-training").fitText(5);
?>


<!-- BANNER -->
<section class="jumbotron hide_on_small_screen">

	<div class="container text-center" id="design-training" >
	<!-- <div class="container-fluid text-center"> -->

		<h1 class= "head_bold head_bold_dark_grey hidden-xs" >design<span class="fussbanner"> &#9670; </span>training</h1>
		
		<!-- id "tagline" eingeführt, um damit eine sanfte Überblendung zu realisieren -->
		<h3 id="tagline" class="zitat taglineHeftig">
			<blockquote class= "sub_head subhead_light brand-danger hidden-xs" > <span id="spruch" class="inhalt"> <?php echo $zufallsContainer[$zufallsZahl] ?> </span></blockquote>
		</h3>

		<!-- <h3 id="tagline" class="zitat taglineHeftig">
			<blockquote class= "sub_head subhead_light brand-danger hidden-xs" > <span id="spruch" class="inhalt"></span></blockquote>
		</h3> -->

		<!-- <p class="hide_on_small_screen"></p> -->
		<h3 class="hide_on_small_screen"></h3>
		

		<!-- <div class="btn-group">
			<a href="#" class="btn btn-lg btn-default hidden-xs">Design Anfrage</a>
			<a href="#" class="btn btn-lg btn-success hidden-xs">Trainings Anfrage</a>
		</div>  -->
		<!-- end btn-group -->

	</div> <!-- end container -->

		

</section> <!-- end jumbotron -->

<!-- <div class="Farbfeld">
			<div class="Farbfeld suc col-xs-1"></div>
			<div class="Farbfeld inf col-xs-1"></div>
			<div class="Farbfeld war col-xs-1"></div>
			<div class="Farbfeld dan col-xs-1"></div>
			<div class="Farbfeld pri col-xs-1"></div>
			<div class="Farbfeld suc col-xs-1"></div>
			<div class="Farbfeld inf col-xs-1"></div>
			<div class="Farbfeld war col-xs-1"></div>
			<div class="Farbfeld dan col-xs-1"></div>
			<div class="Farbfeld pri col-xs-1"></div>
			<div class="Farbfeld suc col-xs-1"></div>
			<div class="Farbfeld inf col-xs-1"></div>
		</div> -->

