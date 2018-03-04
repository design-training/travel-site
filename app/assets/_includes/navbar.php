
<!-- 	class="primary-nav primary-nav--pull-right" -->
	<nav class="primary-nav primary-nav--pull-right">

	<!-- <nav class="navbar navbar-inverse navbar-fixed-top" id="main-navbar" role="navigation"> -->
	<h4 class="hidden"> main navigation design &amp; training </h4>
		<div class="container">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed three-diamants"
					data-toggle="collapse"
					data-target="#navbar-collapse"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>

						<span class="">&#9670;</span>
						<span class="">&#9670;</span>
						<span class="">&#9670;</span>

					<!-- <span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> -->
				</button>
				
				<!-- Die Ansammlung der class im span Element sorgt entweder für einen Syntaxfehler wenn mit " und , -->
				<!-- oder für ein nach unten Verspringen des Zeichen unterhalb von einer Breite < 768 -->
 				<!-- <a href="index.php" class="navbar-brand"><span class="icon-logo nav navbar-nav"></span></a> -->
 				<!-- Braucht man denn die nav und navbar-nav hinter dem icon-logo? -->
 				<a href="index.php" class="navbar-brand"><span class="icon-logo"></span></a>
 				<!-- Scheint also auch ohne nav navbar-nav innerhalb des span tags zu funktionieren -->

 				<a href="index.php" class="navbar-brand hidden-sm hidden-md hidden-lg"> design<span class="fussnavbar"> &#9670; </span>training </a>

				<!-- <a href="index.php" class="navbar-brand hidden-sm hidden-md hidden-lg"> design &amp; training </a> -->



			</div> <!-- end navbar-header -->

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<a href="#" class="btn navbar-btn navbar-right btn-success" >Trainingsanfrage</a>
			
	<ul class="nav navbar-nav">
        	<!-- <li class="active"><a href="./referenzen.php">Referenzen</a></li> -->
        	<!-- das mit dem Anker tag verbundene zu einer anderen Seite navigieren -->
        	<!-- ist der Grund für das nicht wie erwartet funktionierende JavaScript -->
        	<li><a href="./inhalte.php">Inhalte</a></li>
		<li><a href="./teilnehmer.php">Teilnehmer</a></li>
		<li><a href="./beispiele.php">Beispiele</a></li>
		<li><a href="./trainer.php">Trainer</a></li>
          	<li><a href="./fragen.php">Fragen</a></li>
          	<li><a href="./kontakt.php">Kontakt</a></li>
	</ul>
			</div> <!-- end collapse -->
		</div> <!-- end container -->
	</nav>
