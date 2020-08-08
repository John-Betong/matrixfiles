<?php declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'true');
	
require 'assets/includes/functions.php';


?><!DOCTYPE html><html lang="en">
<head lang="en">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">

<link rel="shortcut icon" href="//matrixfiles.com/favicon.ico">

<title> Matrix Files </title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
  media="screen"
>
<link rel="stylesheet" href="assets/css/style-001.css" media="screen">
<link rel="stylesheet" href="assets/css/style-tla.css" media="screen">

</head>

<body>

	<div class="fll">	
		<?php require 'assets/includes/sidebar.php'; ?>
	</div>	

	<div class="w88 mga">
		<img 
			src="assets/images/matrix2.jpg" 
			width="971" height="139"
			alt="#"
		>

		<ul id="menu-top" class="fll bg0 fss tac">
			<?php
				require 'sitepages/_MENUTOP.php'; 
				echo menutop($aLinks, $PAGE);
			?>		
		</ul>

		<div class="bgo">
			<?php if(file_exists($conSub) ) : ?>
				<ul id="menu-left" class="fll bg0 p42 lh2 fss">
					<?php 
						require($conSub); 
						echo menuLeft($aSubs);
					?>
				</ul>	
			<?php endif; ?>	
			<?php require $content ?>
		</div><!-- div class="fll dib bgo bgl  -->	

		<div class="clb w88 fgd fsS tac">
			<?php require 'assets/includes/waiver.php'; ?>
		</div>
	</div><!-- div class="w88 mga tdn tal" -->


	<?php require 'assets/includes/footer.php'; ?>

</body>
</html>