<?php declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'true');
	
session_start();
# MAYBE SEMANTIC
		header('Content-type:text/html; charset=utf-8');	
		$INCLUDES = 'includes'; // DEFAULT
		if( isset($_SESSION['semantic']) && 'ON'===$_SESSION['semantic'] ) :
				$INCLUDES = 'SEMANTIC';
		endif;
		require $INCLUDES .'/functions.php';
		$PAGE = getPage(); 
		require $INCLUDES .'/hdr.php';
	 
?>
<body>

	 <?php 
	 		if('SEMANTIC'===$INCLUDES) :
	 				require $INCLUDES .'/body.php'; 
	 		else:		
	 			echo '<h2> GETTING THERE SLOWLY </h2>';
	 ?>
  <!-- DEBUG STUFF -->
      <?php require $INCLUDES .'/github.php'; ?>

  <div class="fll rad"> 
     <?php require $INCLUDES .'/sidebar.php'; ?>
  </div>  

  <div id="middle">
    <img src="images/matrix2.jpg" 
      width="971" height="139" alt="#">

    <ul id="menu-top" class="XXXbg0 fss tac">
      <?php
        require 'sitepages/_MENUTOP.php'; 
        echo menutop($aLinks, $PAGE);
      ?>    
    </ul>
    

<!-- ####################################################33 -->
    <div id="content">
      <?php if(file_exists('sitepages' . $PAGE .'-sub.php') ) : ?>
          <div id="conMenu">
            <ul id="menu-left" class="fll bg0 lh2 fss">
              <?php 
                require('sitepages' . $PAGE .'-sub.php');
                echo menuLeft($aSubs);
              ?>
            </ul> 
          </div>

          <div id="conSub" class="bdr">
              <?php require 'sitepages/' . $PAGE  .'.php' ?>
          </div>

      <?php else: ?>  
          <div class="clb bgo ">
            <?php 
              require 'sitepages/' . $PAGE  .'.php';
            ?>
          </div>  
      <?php endif; ?> 
    </div><!-- id=content --> 
<!-- #################################################### -->

	<?php endif; ?>
		<div class="w88 mga fgd fsS tac">
			<?php require $INCLUDES .'/waiver.php'; ?>
		</div>
	
	</div><!-- class="clb w88 mga bgs" -->

-->

	<?php require $INCLUDES .'/footer.php'; ?>

</body>
</html>