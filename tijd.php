<?php
($argv);
$mystring = $argv[1];
$findme   = s;
$pos = strpos($mystring, $findme);
$slice = (int) $mystring;
if ($pos === false) {
    echo "de tijd kon niet worden bepaald";
} else {
    echo "bedoelde je " . $slice . " seconden";
}
?>