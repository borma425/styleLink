<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <?php

$arabic = "style_ar.css";
$English = "style_en.css";

include './check.php';

?>
</head>
<body>

<form method="post"> 
		<input type="submit" name="english"
				value="english"/> 
		
		<input type="submit" name="arabic"
				value="arabic"/> 
	</form> 




<script>

if ( window.history.replaceState ) {

window.history.replaceState( null, null, window.location.href );

}

</script>


</body>
</html>