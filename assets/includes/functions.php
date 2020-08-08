<?php declare(strict_types=1);

// GET $PAGE, TITLE, $content and $conSub
	$PAGE = strrchr($_SERVER['REQUEST_URI'], '/');
	$PAGE = str_replace('.php', '', $PAGE);
	$title = substr($PAGE, 1);

	if( strlen($PAGE) < 2 ) :
		$PAGE 		= '/home';
		$content 	= 'sitepages/home.php'; 
		$conSub 	= 'sitepages/home-sub.php'; 
	else:	
		$content 	= 'sitepages/' . $PAGE 	.'.php'; 
		$conSub 	= 'sitepages/' . $title .'-sub.php'; 
	endif;	

# PREVENT WARNING IF FILE DOES NOT EXIST
	if( @file_get_contents($content) ) :
		# echo $content;die;	# 
	else:	
		$content = 'sitepages/missing-file.php';
	endif;

	$title = ucFirst($title);


//==============================================================
function menutop(array $aLinks=[], string $PAGE='')	
: string 
{
	$result ='';
# var_dump($aLinks);
	foreach($aLinks as $key => $item) :

		$URL = $item;

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
					<a href="$URL"> 
							$tmp
					</a>
				</li>
____EOT;

	endforeach;
# @cho $links;

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

