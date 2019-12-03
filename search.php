<?php

$p=$_POST;

$id=$p['id'];

$search=$p['search'];

    if(isset($search)&&isset($id)){
        
        $myfile = fopen($id.".php","r") or die("Unable to open file!");
        echo fread($myfile,filesize($id.".php"));
        fclose($myfile);
}
    else{
        echo "Wrong ID!!!";
    }
    echo "<br><br><br>";
	 echo "<a href=\"index.html\">
				<input type=\"submit\" Value=\"TRY AGAIN\" style=\"font-size: 30px; border-radius: 10px; background-color:aqua;\"/>
			</a>";

?>
