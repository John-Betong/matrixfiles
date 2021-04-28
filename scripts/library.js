/*
   IIFE so we isolate scope and can move "document" up scope
   and type less. Also EASIER than "modern" JavaScript "import"
   or "module" crap since on deployment we can copypasta
   multiple scripts (if desired) to a single file. 
*/

(function(d) {

  /*** grab the elements we need to trap first ***/
  
    var
      // yes, VAR, there is no LET in IE
      menuAnchors = d.querySelectorAll('#mainMenu a'),
      toggles = d.getElementsByClassName('toggle'),
      toggle_mainMenu = d.getElementById('toggle_mainMenu');
    
  /*** event handlers ***/

    function menuClick(e) {
      toggle_mainMenu.checked = false;
    } // menuClick
    
    function keys(e) {
      if (e.keyCode == 27) {
        for (var i = 0, toggle; toggle = toggles[i]; i++) {
          if (toggle.checked) {
            toggle.checked = false;
            return; // don't keep looping if we don't have to 
          }
        }
        /*
          The return above also prevents "breaking" hash links
          if inside a checkbox driven modal
        */
        if (window.location.hash.length > 1) {
          window.location.hash = '#';
        }
      }
    } // keys
  
  /*** attach out handlers ***/
  
    // Hash links in main menu are on-page, so close the modal
    for (var i = 0, a; a = menuAnchors[i]; i++) {
      if (a.getAttribute('href')[0] == '#') {
        a.addEventListener('click', menuClick, false);
      }
    }
    
    // add "escape" key to modal close
    window.addEventListener('keydown', keys, false);
  
})(document);