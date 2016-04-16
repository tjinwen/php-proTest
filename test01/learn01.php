<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br />";
echo "This ","string ","was ","made";

echo "<br />#################define<br />";
define("GREETING", "Welcome to Taiwan!",true);
echo greeting;

echo "<hr /><br />";
$colors = array("red","green","blue");
foreach ($colors as $value){
    echo "$value <br />";
}

?>