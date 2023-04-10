<?php 
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {echo('\nMSIE');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE){echo('\nTrident');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE){echo('\nFirefox');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE){echo('\nChrome');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE){echo('\nOpera Mini');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE){echo('\nOpera');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE){echo('\nSafari');}
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') !== FALSE){echo('\nMozilla');} // so our script or anything isn't viewable by google and all these browsers
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
fwrite($fh, ''."".$ip ."\n");
 $keys = array("w5wHbSwxAc1a","p43BemzUywLX", "q9fs5hKXyYDh", "ojID0PIvVrnv", "UsDIKou3t0l3", "Ghz9EytIQtDI", "zWZNKn8AkHYG", "aJKmUS6NMjPl", "Aif0KxZEJJsy", "0YQtweF57DKa");
 if (in_array($sub,$keys,TRUE)) {
   echo "Whitelisted"; // when the key gets accepted the checker will return Whitelisted!
 } else {
   echo "Not Whitelisted"; // else it will return not whitelisted
 }
?>