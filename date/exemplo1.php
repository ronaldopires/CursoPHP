<?php

/*echo date("d/m/Y H:i:s", 1624125847);
echo "<br>";
echo time();
echo "<br>";
*/
$ts = strtotime("2001-09-11");
echo date("l, d/m/Y", $ts);