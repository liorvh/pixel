<?php
ignore_user_abort(true);

if ( function_exists( 'apache_setenv' ) ) {
  apache_setenv( 'no-gzip', 1 );
}

ini_set('zlib.output_compression', 0);

if (ob_get_level() == 0) {
  ob_start();
}

header('Content-encoding: none', true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo ' ';
} else {
  header("Content-type: image/gif");
  header("Content-Length: 42");
  header("Cache-Control: private, no-cache, no-cache=Set-Cookie, proxy-revalidate");
  header("Expires: Wed, 11 Jan 2000 12:59:00 GMT");
  header("Last-Modified: Wed, 11 Jan 2006 12:59:00 GMT");
  header("Pragma: no-cache");

  echo sprintf('%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%',71,73,70,56,57,97,1,0,1,0,128,255,0,192,192,192,0,0,0,33,249,4,1,0,0,0,0,44,0,0,0,0,1,0,1,0,0,2,2,68,1,0,59);    
}

ob_flush();
flush();
ob_end_flush();

$ip=$_SERVER['REMOTE_ADDR'];
$agent=$_SERVER['HTTP_USER_AGENT'];
$lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];

$str = "Email: ".$_GET['e']."\n"."Subject: ".$_GET['s']."\n"."IP Address: ".$ip."\n"."User Agent: ".$agent."\n"."Language: ".$lang."\n"."\n";
$myFile = "1.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, $str);
fclose($fh);
?>
