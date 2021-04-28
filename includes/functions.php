<?php declare(strict_types=1);


//==============================================================
function getPage() :string 
{
	$PAGE = strrchr($_SERVER['REQUEST_URI'], '/');
	$PAGE = str_replace('.php', '', $PAGE);

	$PAGE = '/'===$PAGE  ? 'home' : $PAGE;
	if('/'===substr($PAGE, 0,1)):
			$PAGE = substr($PAGE, 1);
	endif;		
	$PAGE = 'index'===$PAGE ? 'home' : $PAGE;
 
# MAYE REMOVE CONTACT.php MAY HAVE $_GET PARAMETERS
 	if( strpos( $PAGE , '?') ):
 			$PAGE = strstr($PAGE , '?', TRUE);
		endif;
 
	if( file_exists('sitepages/' . $PAGE .'.php')) :
			#
	else:
			$PAGE = 'missing-file';
	endif;

	return $PAGE;
}

//==============================================================
function menutop(array $aLinks=[], string $PAGE='')	
: string 
{
	$result ='';

	foreach($aLinks as $key => $item) :
		$CLR = 'fgr'; 
		$tmp = ucfirst( (string) $key ) ;

		$CLR = 'fgd';
		$title = substr($PAGE, 1);
		if( substr($PAGE,1) === $item):
			$CLR = 'fgl fwb txU';
		endif;
		$tmp = '<span class="' .$CLR .'">' .$tmp .'</span>';

		$result .= <<< ____EOT
			<li>
				<a href="$item"> 
						$tmp
				</a>
			</li>
____EOT;

	endforeach;

	return $result;
}



//==============================================================
function menuLeft
(
	array $aLinks 		=	[], 		// set in sitepages/$title-sub.php
	bool  $lNotReady 	= FALSE 
):string 
{
$links = '';
	foreach($aLinks as $key => $item) :

		$item = str_replace(' ', '-', $item);

		if( $lNotReady && '*'===substr($item,0,1) ):
			$URL = 'index.php?page=' .$item;
    else:  
  		$links .= '<li> 
                     <a href="' .$item .'">' .ucfirst( (string) $item ) 
                .   '</a> 
                 </li>';
    endif;  

	endforeach;
	
	return $links;
}	

