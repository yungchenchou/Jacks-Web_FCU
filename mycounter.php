<?php
function MyCounter(){
    if (file_exists("_counter")){
        $fp=fopen("_counter","r+");
        $counter=fgets($fp);
		if(!isset($_SESSION["counted"])){
		    $counter++;
		    $_SESSION["counted"] = 0;
		}
        fseek($fp,0);
        fputs($fp,$counter);
        fclose($fp);
    }else{
        $fp=fopen("_counter","w");
        $counter=29300;
        fputs($fp,$counter);
        fclose($fp);
    }
    echo "<font color=#780B0B>".$counter."</font>";	
}
?>
