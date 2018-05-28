<!DOCTYPE html>
<!-- MARU -->
<html>
<head>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" /> -->

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
  <!-- TEST -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no"/>
  <!-- TEST -->


  <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> -->

  <!-- Meine Schrift -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet"> -->

  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> -->

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

  <title>design &#9670; training &#9670; Trainer</title>
  <meta name="keywords" content="Travel planning, travel bundles, travel escapes, affordable travel">
  <meta name="description" content="Our clarity. One trip away. We create soul restoring journeys that inspire you to be you.">

  <!-- build:css /assets/styles/styles.css -->
  <link rel="stylesheet" href="temp/styles/styles.css">

  <!-- <link rel="stylesheet" href="assets/styles/modules/_style-von-altem-design-invest.css"> -->
  <!-- endbuild -->

  <!-- build:js /assets/scripts/Vendor.js -->
  <script src="/temp/scripts/Vendor.js"></script>
  <!-- endbuild -->

</head>
<body id="trainer">

  <!-- Muss ein Symbol in jeder Seite definiert werden auf der es benutzt wird? -->
  <!-- Vermutlich ja -->
  <!-- Vorrat an inline svg sprites -->
  <svg style="display:none;">
    <symbol id="sym-mouth">
      <rect width="480" height="480"/>
    </symbol>
  </svg>

  <!-- NAVBAR importiert -->
  <?php require 'assets/_includes/_navbar.php'; ?>
 
  <!-- BANNER -->

  <!-- Muss ein Symbol in jeder Seite definiert werden auf der es benutzt wird? -->
  <!-- Vermutlich ja -->
  <!-- Vorrat an inline svg sprites -->
  <svg style="display:none;">
    <symbol id="sym-mouth">
      <rect width="480" height="480"/>
    </symbol>
  </svg>


  <!-- Karten -->
  
  <div class="wrapper">

    <h3 class="headline">Nicht alle Trainer sind auch Designer.<br>Sie unterscheiden sich durch ihre Leidenschaften.<br>Training von:</h3>

    <!-- Das Raster für die Trainer-Karte muß abgeändert werden -->

    <div class="Karten-Kiste-Grid-Trainer">

        <!-- Karte 0 -->
        <div class="Karte-Kiste-3D">
          <div class="Einzel-Karte">
            <div class="front-gemeinsam front0b "></div>
            <div class="front-gemeinsam front0"></div>
            <!-- Version mit svg inline sprite -->
            <div class="user-mund">
              <svg class="Mund-knapp" viewBox="0 0 480 480">
                <use xlink:href="#sym-mouth"></use>
              </svg>
            </div>
            <div class="back-gemeinsam back1">
              <div id='b1' class="Logo EberhardStenzel"></div>
            </div>
              <h4 class="Karte-back-text-1">Designer <span class="diamant-small-grey-alpha"> &#9670; </span> Trainer</h4>
              <!-- <h4 class="Karte-back-text-1">Designer &#9670; Trainer</h4> -->
              <!-- <h4 class="Karte-back-text-1">Designer ◆ Trainer</h4> -->
              <h3 class="Karte-back-text-2">Eberhard Stenzel</h3>
          </div>
        </div>

    </div>

    <h3 class="headline-2">Viele Inhalte sind ähnlich.<br>Sie unterscheiden sich in der Art der Vermittlung.</h3>

  </div>




  

   


 
  <footer class="site-footer">
    <div class="wrapper">
      <p><span class="site-footer__text">copyright &copy; 2018 design training</p>
    </div>
  </footer>

  <div class="modal">
    <div class="modal__inner">
      <h2 class="section-title section-title--blue section-title--less-margin"><span class="icon icon--mail section-title__icon"></span>Get in <strong>Touch</strong></h2>
      <div class="wrapper wrapper--narrow">
        <p class="modal__description">We will have an online order system in place soon. Until then, connect with us on any of the platforms below!</p>
      </div>

      <div class="social-icons">
        <a href="#" class="social-icons__icon"><span class="icon icon--facebook"></span></a>
        <a href="#" class="social-icons__icon"><span class="icon icon--twitter"></span></a>
        <a href="#" class="social-icons__icon"><span class="icon icon--instagram"></span></a>
        <a href="#" class="social-icons__icon"><span class="icon icon--youtube"></span></a>
      </div>
    </div>
    <div class="modal__close">X</div>
  </div>

  <!-- build:js /assets/scripts/App.js -->
  <script src="/temp/scripts/App.js"></script>
  <!-- endbuild -->

</body>
</html>