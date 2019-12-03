<!DOCTYPE html>

<html>
    <head>
	<meta charset=\"UTF-8\">
        <title>
            Display
        </title>
        <style>
        body{
           
            background-size:cover;
        }
            tr:nth-of-type(even){
			background-color:#f7f2f2;
		}
		tr:nth-of-type(odd){
			background-color:#e0d7d7;
		}
		table{
			width:100%;
			padding:0px 0px 10px; 0px;
		}
		 .img{
              opacity:0.5;
              filter: alpha(opacity=50);
        }
		</style>
    </head>
    <body>





<?php
session_start();
 
   function marks($mark,$credit)
{
        
      if($mark >= 80 && $mark < 101){
         return 4.00*$credit;
         $grade="A+";
      }
      else if($mark >= 75 && $mark < 80){
         return 3.75*$credit;
         $grade="A";
      }
      else if($mark >= 70 && $mark < 75){
         return 3.50*$credit;
         $grade="A-";
      }
      else if($mark >= 65 && $mark < 70){
         return 3.25*$credit;
         $grade="B+";
      }
      else if($mark >= 60 && $mark < 65){
         return 3.00*$credit;
         $grade="B-";
      }
      else if($mark >= 55 && $mark < 60){
         return 2.75*$credit;
         $grade="C+";
      }
      else if($mark >= 50 && $mark < 55){
         return 2.50*$credit;
         $grade="C";
        
      }
      else if($mark >= 45 && $mark < 50){
         return 2.25*$credit;
         $grade="C-";
      }
      else if($mark >= 40 && $mark < 45){
         return 2.00*$credit;
         $grade="D";
      }
      else if ($mark >= 0 && $mark < 40) {
         return 0;
         $grade="F";
      }
      else {
        echo "Please enter less than 100 & greater than 0 <br>"; 
      }
}

    if (isset($_GET['save'])){
        
        $mark1=$_GET['mark1'];
      $credit1=$_GET['credit1'];
      
      //echo $mark1."<br>";
      //echo "Credit = ".$credit1."<br>";
      
      $mark2=$_GET['mark2'];
      $credit2=$_GET['credit2'];
      
      //echo $mark2."<br>";
      //echo "Credit = ".$credit2."<br>";
      
      $mark3=$_GET['mark3'];
      $credit3=$_GET['credit3'];
      
      //echo $mark3."<br>";
      //echo "Credit = ".$credit3."<br>";
      
      $mark4=$_GET['mark4'];
      $credit4=$_GET['credit4'];
      
      //echo $mark4."<br>";
      //echo "Credit = ".$credit4."<br>";
      
      $mark5=$_GET['mark5'];
      $credit5=$_GET['credit5'];
      
      $tmark = $mark1 + $mark2 + $mark3 + $mark4 + $mark5;
      
      //echo $mark5."<br>";
      //echo "Credit = ".$credit5."<br>";
      
    //Course name's Data are asignning here...
      //$course = array();
      $coname1=$_GET['coname1'];
      $coname2=$_GET['coname2'];
      $coname3=$_GET['coname3'];
      $coname4=$_GET['coname4'];
      $coname5=$_GET['coname5'];
      
      //Bio--------
      
      $naam    = $_GET['naam'];
      $id      = $_GET['id'];
      $program = $_GET['program'];
      $Phname  = $_GET['Phname'];
      $Uname   = $_GET['Uname'];
      $semname = $_GET['semname'];
      
      
/*function validation($cdt){
          
    $ary=str_spilt($cdt);
    $sotto=0;
          
    for ($t=0; $t < strlen($cdt); $t++){
	
	$temp=ord($ary[$t]);
	       
	if(($temp >= 48 && $temp <= 57) || ($temp==46)){
	        
        $sotto++;
			
    }
    else{
        echo "Please enter numeric value on Credit field <br>";
    }
                    }

}
            $credit1 = validation($credit1);
            echo "Credit = ".$credit1."<br>";
            
            $credit2 = validation($credit2);
            echo "Credit = ".$credit2."<br>";
            
            $credit3 = validation($credit3);
            echo "Credit = ".$credit3."<br>";
            
            $credit4 = validation($credit4);
            echo "Credit = ".$credit4."<br>";
            
            $credit5 = validation($credit5);
            echo "Credit = ".$credit5."<br>";*/
      
        //if($sotto == strlen($cdt)){
            
        
            $marks1=marks($mark1,$credit1);
            //echo "gpa1=".$mark1."<br>";
            //echo "grade=".$grade."<br>";
            $marks2=marks($mark2,$credit2);
            //echo "gpa2=".$mark2."<br>";
            
            $marks3=marks($mark3,$credit3);
            //echo "gpa3=".$mark3."<br>";
            
            $marks4 = marks($mark4,$credit4);
            //echo "gpa4=".$mark4."<br>";
            
            $marks5=marks($mark5,$credit5);
            //echo "gpa5=".$mark5."<br>";
            
            $credit = $credit1 + $credit2 + $credit3 + $credit4 + $credit5;
			
            $mark = $marks1 + $marks2 + $marks3 + $marks4 + $marks5;
            
            //echo "Total m = ".$mark."<br>";
            //echo "Total c = ".$credit."<br>";
            
            $cgpa = ($mark/$credit);
            
           //echo "Your cgpa is = ".round($cgpa,3)."<br>";
    
        //}
    echo "<div class = \"bio\">
           <h3>Name : $naam </h3>
           <h3>ID :$id</h3> 
           <h4>Univesity Name : $Uname </h4>
           <h4>Program : $program </h4>
           <h4>Semester : $semname </h4>
           <h4>Phone No : $Phname </h4>
               
        </div>   
           <table>
                <thead>
                    <tr>
                        <td>Serial No</td>
                        <td>Course Name</td>
                        <td>Marks</td>
                        <td>Credit</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> $coname1</td>
                        <td> $mark1</td>
                        <td> $credit1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> $coname2</td>
                        <td> $mark2</td>
                        <td> $credit2</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> $coname3</td>
                        <td> $mark3</td>
                        <td> $credit3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> $coname4</td>
                        <td> $mark4</td>
                        <td> $credit4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td> $coname5</td>
                        <td> $mark5</td>
                        <td> $credit5</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td>CGPA: $cgpa</td>
                        <td> $tmark</td>
                        <td> $credit</td>
                    </tr>
                </tfoot>
           </table>";
    
    }

        $myfile = fopen($id.".php","w+") or die("Unable to open file!");
        
		fwrite($myfile,"<!DOCTYPE html>

<html>
    <head>
	<meta charset=\"UTF-8\">
        <title>
            Display
        </title>
        <style>
        body{
           
            background-size:cover;
        }
            tr:nth-of-type(even){
			background-color:#f7f2f2;
		}
		tr:nth-of-type(odd){
			background-color:#e0d7d7;
		}
		table{
			width:100%;
			padding:0px 0px 10px; 0px;
		}
		 .img{
              opacity:0.5;
              filter: alpha(opacity=50);
        }
		</style>
    </head>
    <body>
        
        
        <div class = \"bio\">
           <h3>Name : $naam </h3>
           <h3>ID :$id</h3> 
           <h4>Univesity Name : $Uname </h4>
           <h4>Program : $program </h4>
           <h4>Semester : $semname </h4>
           <h4>Phone No : $Phname </h4>
               
        </div>   
           <table>
                <thead>
                    <tr>
                        <td>Serial No</td>
                        <td>Course Name</td>
                        <td>Marks</td>
                        <td>Credit</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> $coname1</td>
                        <td> $mark1</td>
                        <td> $credit1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> $coname2</td>
                        <td> $mark2</td>
                        <td> $credit2</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> $coname3</td>
                        <td> $mark3</td>
                        <td> $credit3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> $coname4</td>
                        <td> $mark4</td>
                        <td> $credit4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td> $coname5</td>
                        <td> $mark5</td>
                        <td> $credit5</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td>CGPA: $cgpa</td>
                        <td> $tmark</td>
                        <td> $credit</td>
                    </tr>
                </tfoot>
           </table>
           
           
        
        
    </body>
</html>");
		
		
     fclose($myfile); 
	 echo "<br><br><br>";
	 echo "<a href=\"index.html\">
				<input type=\"submit\" Value=\"Once More\" style=\"font-size: 30px; border-radius: 10px; background-color:aqua;\"/>
			</a>";

?>
 </body>
</html>



