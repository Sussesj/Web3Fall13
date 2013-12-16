
<?php

function timer($limit){
    if(!isset($_SESSION['start'])){
    $_SESSION['start']=time();
    }else if(isset($_SESSION['start'])){
    $timeleft=time()-$_SESSION['start'];
    }
    if($timeleft>=$limit){
    $_SESSION['start']=time();
    }
return $timeleft;
}
echo timer(5); //Counts to 5 and then restarts

?>

<!DOCTYPE html>
<html>
    <head>
    	<title> timer test </title> 
    </head>
    <body>
    	<p>This is how long the timer has sleept ,yay! </p> 
    </body>

</html>