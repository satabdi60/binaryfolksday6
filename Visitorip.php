<?php  
    function getIPAddress() {  
      
     if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
     
    elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
 
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;  
?> 
