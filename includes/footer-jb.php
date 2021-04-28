<?php DECLARE(STRICT_TYPES=1);
# Usage:
#     require '/var/www/footer.js';
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
  

// PHP STRINGS HEREDOC Syntax
  $msg  = 'Wonderful place for a footer';

# Greta Thunberg
  $wiki = 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=6&ved=2ahUKEwjvwq2e0LHkAhVBRY8KHRwQAYwQFjAFegQIARAB&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FGreta_Thunberg&usg=AOvVaw21NdejsloklvSuGIIpDL-U';
  $title = 'Greta Thunberg'; // '<img src="/var/www/ci2/cdn/great-thunberg.jpg" alt="Great Thunberg" />';
  $msg  = 'Support: <a href="' .$wiki .'" title="' .$title .'"> <b>Greta Thunberg </b> </a>';

# Captain Tom Moore
  $wiki = 'https://www.bbc.com/news/uk-england-beds-bucks-herts-52333127';
  $title = 'Coronavirus: Captain Tom Moore';
  $msg  = 'Support: <a href="' .$wiki .'" title="' .$title .'"> <b>Captain Tom Moore  </b> </a>';


# Google Mobile Friendly Test this web-page URL
  $title  = 'Google Mobile Friendly Test ';
  $gmf    = 'https://search.google.com/test/mobile-friendly?url=' 
          . $vEnc ;
  $msg  = '<a href="' .$gmf .'"><b>'.$title .'</b></a>';

  $STYLE = '
    position: fixed; left: 0; bottom: 0; 
    width: 100%;
    text-align: center; font-size: medium; 
    background-color: #ddd; color: #000; 
    border: solid 1px red; 
  ';

  $ftr  = <<< ____EOT
    <p> <br> <br> <br> </p>

    <div style="$STYLE">
      <a 
        href="https://www.codingforum.net/forum/client-side-development/general-web-building/2424853-for-judgedredd-homepage-rewrite?p=2432288#post2432288"
        style="float:left;"
        >
        <b> Forum </b>
      </a>
      <a 
        href="https://github.com/John-Betong/judgedredd-002"
        style="float:right;"
        >
        <b> GitHub Source </b>
      </a>

      <br>

      <b style="float: left"> $vHtml </b>
      <b style="float: right"> $vCss  </b>
      $msg
    </div>  
____EOT;
  echo $ftr;
