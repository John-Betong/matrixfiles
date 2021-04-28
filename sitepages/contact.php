<?php declare(strict_types=1);

# HAVE CONTACT DETAILS BEEN POSTED
		if( $_GET ) :
				$tmp = '
							This is the data that has just been submitted 
							<br> 
									and 
							<br> 
									wants sanitizing, etc
				';
				echo "<h2> $tmp </h2>";
			
				$ok = validate_get_parameters($_GET);
				if( $ok ) :
						require 'includes/form-success.php';
				else:		
						require 'includes/form-problems.php';
				endif;
	else:
			require 'includes/form-contact.php';
	endif;


//=====================================================
function validate_get_parameters($aVals) : bool 
{
		echo '<pre>'; print_r($_GET); echo '</pre>';
		echo '<h3>Dated: ' .date('l, dS F Y - H:i:s') .'</h3>';
		
		return (bool) mt_rand(0,2);
}


