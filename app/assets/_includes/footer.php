<?php 
    $titel = "Stenzel design training";
    $year =  date('Y');
    $vers = "14";
    $Trennlinie = "hr-brand-danger-auf-dunkel";
?>

<footer>
    
  <?php
		if ($Hintergrund < "128") {
			   $Hintergrund = "copyright_hell";
			   $Trennlinie = "hr-brand-danger-auf-dunkel";
		} else {
			   $Hintergrund = "copyright_dunkel";
			   $Trennlinie = "hr-brand-danger-auf-hell";
		}
	?>

	<!-- <hr class= "<?php echo $Trennlinie; ?>"> -->

	<!-- <div class="<?php echo $Balken; ?> container"> -->
	<!-- <div class="balken-auf-hell container"> -->
	<!-- <div> -->

		<p class= "<?php echo $Hintergrund; ?> zentrierter-text"> Copyright <span class="copyright-zeichen"> © </span> <span class="copyright"> <?php echo $year; ?>  <?php echo $titel; ?></span></p>
	
	<!-- </div> -->

</footer>
