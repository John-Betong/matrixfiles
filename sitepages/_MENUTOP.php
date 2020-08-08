<?php declare(strict_types=1);


$leftUrl = 'http://matrixfiles.com/sitepages/downtherabbithole.php';
$leftImg	= '<img 
							id="rabbit" 
							src="assets/images/wr2.png" 
							alt="Down the Rabbit Hole we go!"
						>';

$rightUrl = 'http://matrixfiles.com/sitepages/donations.php';
$rightImg = '<img 
							id="dollar_sign" 
							class="flr"
							src="assets/images/dollar-sign2.png" 
							width="6"
							alt="The almighty Dollar Sign!" 
							>';	

$aLinks = [
	$leftImg		=> $leftUrl,
  'home' 			=> 'home',				
  'about' 		=> 'about',				
  'computers' => 'computers',				
  'finance' 	=> 'finance',				
  'forum' 		=> 'http://matrixfiles.com/hgnb/viewforum.php?f=5',				
  'health' 		=> 'health',				
  'law' 			=> 'law',				
  'radio' 		=> 'http://matrixfilesradio.com',				
  'mirrors' 	=> 'mirrors',
  'research' 	=> 'research',				
  'tech' 			=> 'tech',				
  'contact' 	=> 'contact',				
  $rightImg 	=> $rightUrl,
];


