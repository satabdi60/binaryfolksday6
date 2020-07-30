<?php 
  
// PHP code to illustrate the working 
//  of ob_start() Function  
  
function callback($buffer){ 
    // Return Everything in CAPS. 
    return (strtoupper($buffer)); 
} 
  
ob_start("callback"); 
echo "Hello World!"; 
ob_end_flush(); 
  
?>
