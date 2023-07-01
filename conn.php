<?php

$cona =mysqli_connect("localhost","root","","web_site_me");
if(mysqli_connect_error()){
    echo "Error In Connaction Database".$cona->connect_error;
}else{
    return $cona;
}




?>