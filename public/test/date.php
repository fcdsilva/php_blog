<?php

require('./../../config.php');
require('./../../library/core.class.php');

$core = new Core();

echo date_default_timezone_get()."<br/><br/>";
echo "ISO8601<br/>".date(DATE_ISO8601)."<br/><br/>";
echo "RFC822<br/>".date(DATE_RFC822)."<br/><br/>";
echo "RFC850<br/>".date(DATE_RFC850)."<br/><br/>";
echo "RFC1036<br/>".date(DATE_RFC1036)."<br/><br/>";
echo "RFC1123<br/>".date(DATE_RFC1123)."<br/><br/>";
echo "RFC2822<br/>".date(DATE_RFC2822)."<br/><br/>";
echo "RFC3339<br/>".date(DATE_RFC3339)."<br/><br/>";
echo "RSS<br/>".date('D, d M Y G:i:s O')."<br/><br/>";
echo "ATOM<br/>".date('Y-m-d\TG:i:s\Z')."<br/><br/><br/>";




/*

$h = "3";// Hour for time zone goes here e.g. +7 or -4, just remove the + or -
$hm = $h * 60;
$ms = $hm * 60;
$gmdate = gmdate("m/d/Y g:i:s A", time()-($ms)); // the "-" can be switched to a plus if that's what your time zone is.
echo "Your current time now is :  $gmdate . ";


date_default_timezone_set('UTC');
echo date_default_timezone_get()."<br/><br/>";
echo "ISO8601<br/>".date(DATE_ISO8601)."<br/><br/>";
echo "RFC822<br/>".date(DATE_RFC822)."<br/><br/>";
echo "RFC850<br/>".date(DATE_RFC850)."<br/><br/>";
echo "RFC1036<br/>".date(DATE_RFC1036)."<br/><br/>";
echo "RFC1123<br/>".date(DATE_RFC1123)."<br/><br/>";
echo "RFC2822<br/>".date(DATE_RFC2822)."<br/><br/>";
echo "RFC3339<br/>".date(DATE_RFC3339)."<br/><br/>";
echo "RSS<br/>".date(DATE_RSS)."<br/><br/>";
echo "ATOM<br/>".date(DATE_ATOM)."<br/><br/>";


*/



?>