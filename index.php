<?php declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'true');
	
# GET $PAGE  	
		require 'includes/functions.php';
		$PAGE =  getPage();

require 'includes/hdr.php';

?>

<body>

<!-- NICKED @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<DIV class="modalFix">

	<DIV id="top">
		<header>
				<?php require 'includes/menu-top.php'; ?>
		</header>

		<main>
			<?php if(file_exists('sitepages' . $PAGE .'-sub.php') ) : ?>
					<div id="conMenu">
						<ul id="menu-left" class="fll bg0 lh2 fss">
							<?php 
								require('sitepages' . $PAGE .'-sub.php');
								echo menuLeft($aSubs);
							?>
						</ul>	
					</div>

					<div id="conSub">
							<?php require 'sitepages/' . $PAGE 	.'.php' ?>
					</div>

			<?php else: ?>	
					<div class="clb bgo ">
						<?php 
							require 'sitepages/' . $PAGE 	.'.php';
						?>
					</div>	
			<?php endif; ?>	
		</main>

		<footer>
			<?php require 'includes/footer.php'; ?>
		</footer>

	</DIV><!-- #top -->

</DIV><!-- .modalFix -->

<!--
  MODIFIED action="#" 
-->
<form action="contact.php?fred" class="modal" id="contact">
		<?php require 'includes/hamburger.php'; ?>
</form>

<script src="scripts/library.js"></script>

<!-- NICKED @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->


		<?php require 'includes/footer-jb.php'; ?>

</body>
</html>