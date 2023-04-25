
<?php
 
// a function that echo a text
function thanksnotice() {
   
    echo 'Thank you for visiting my store.'; 
  }
  
  // //adds my thanksforshopping function to footer
  add_action('wp_footer', 'thanksnotice');

//remove thanksnotice from footer
remove_action('wp_footer','thanksnotice');

// a function that echo a text
 function thanksforshopping() {
    echo'Thanks for shopping at labb2';
 }

//adds my thanksforshopping function to footer
 add_action('wp_footer','thanksforshopping')
 
?>
