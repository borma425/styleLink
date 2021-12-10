<?php

session_start();


function selectLang($lange="ar"){

global $arabic,$English;

$langType = ( $lange == "ar" ) ? $arabic : $English;

$_SESSION["addNewLang"]= $lange;

echo "<link rel='stylesheet' type='text/css' href='$langType'>";

}


if( isset($_SESSION['addNewLang']) ){

$currentLang = $_SESSION['addNewLang'] ;

if($currentLang == "ar"){

selectLang("ar");

}

else{

selectLang("en");

}



}else{

selectLang("en");

}



if(  isset(  $_POST['arabic']  )  ) {


selectLang("ar");

}elseif( isset(  $_POST['english']  )  ){

selectLang("en");

}