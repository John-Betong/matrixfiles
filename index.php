<?php declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'true');
	
require 'assets/includes/functions.php';

?><!DOCTYPE html><html lang="en">
<head lang="en">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
	  media="screen">
	<link rel="stylesheet" href="assets/css/style-001.css" media="screen">
<!--
-->
<link rel="stylesheet" href="assets/css/style-tla.css" media="screen">
<link rel="shortcut icon" href="//matrixfiles.com/favicon.ico">
<title> Matrix Files - <?= $title ?> </title>

</head>

<body>
	<div class="flr bgl rad p42">
		<a href="https://github.com/John-Betong/matrixfiles.git">
			<span> GitHub Source </span>
		</a>
	</div>

	<div class="fll">	
		<?php require 'assets/includes/sidebar.php'; ?>
	</div>	

	<div id="middle">
		<img src="assets/images/matrix2.jpg" 
			width="971" height="139" alt="#">

		<ul id="menu-top" class="XXXbg0 fss tac">
			<?php
				require 'sitepages/_MENUTOP.php'; 
				echo menutop($aLinks, $PAGE);
			?>		
		</ul>
		

<!-- ####################################################33 -->
		<div id="content">
			<?php if(file_exists($conSub) ) : ?>
					<div id="conMenu">
						<ul id="menu-left" class="fll bg0 lh2 fss">
							<?php 
								require($conSub);
								echo menuLeft($aSubs);
							?>
						</ul>	
					</div>

					<!-- div class="fll dib XXXw99 XXXbgs" style=" " -->
					<div id="conSub">
							<?php require $content ?>
					</div>

				<?php else: ?>	
					<div class="clb bgo ">
						<?php # echo file_get_contents($content); ?>
						<?php # $content ?>
						<?php require $content ?>
					</div>	
				<?php endif; ?>	
			</div><!-- id=content -->	
<!-- ####################################################33 -->

		<div class="XXXclb w88 mga fgd fsS tac">
			<?php require 'assets/includes/waiver.php'; ?>
		</div>
	
	</div><!-- class="clb w88 mga bgs" -->


	<?php require 'assets/includes/footer.php'; ?>

</body>
</html>