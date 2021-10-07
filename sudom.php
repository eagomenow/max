<?php

$subdom = array_shift(explode(".",$_SERVER['HTTP_HOST'])); 

echo($subdom);


?>