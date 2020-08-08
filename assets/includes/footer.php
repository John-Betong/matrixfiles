<?php 
declare(strict_types=1);

# require '/var/www/footer.js';
# exit;

  $url    = $_SERVER['REQUEST_SCHEME'] 
          . '://'
          . $_SERVER['SERVER_NAME'] 
          . $_SERVER['REQUEST_URI'] 
          ; 
  $vEnc   = urlencode ($url) ;

# FLOAT RIGHT
  $vCss   = '<a href="'
          .   'https://jigsaw.w3.org/css-validator/validator?uri='
          .     $vEnc
          .   '&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en"'
          . '>CSS: Validator'
          . '</a>'
          ;

# FLOAT LEFT
  $vHtml  = 'https://validator.w3.org/nu/?doc=' .$vEnc ;
  $vHtml  = '<a href="' .$vHtml .'"> HTML: Validator </a>' ;
  
  $msg    = '<a href="https://search.google.com/test/mobile-friendly">Moble Friendly Test </a>';

  $STYLE = '
    position: fixed; left: 0; bottom: 0; 
    width: 100%;
    text-align: center; 
    background-color: #ddd; color: #000; 
    border: solid 1px red; 
  ';

  $ftr  = <<< ____EOT
    <p> <br> <br> <br> </p>

    <div style="$STYLE">
      <b style="float: left"> $vHtml </b>
      <b style="float: right"> $vCss  </b>
      $msg
    </div>  
____EOT;

    echo $ftr;
