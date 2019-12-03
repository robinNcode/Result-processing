<!DOCTYPE html>

<html>
    <head>
	<meta charset="UTF-8">
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
        
        <form>
        <div class = "bio">
           <h3>Name : <?php echo MsM Robin; ?></h3>
           <h3>ID No : <?php echo CSE1901016113?></h3> 
           <h4>Univesity Name : <?php echo Sonargaon University; ?></h4>
           <h4>Program : <?php echo B.Sc in CSE; ?></h4>
           <h4>Semester : <?php echo Fall; ?></h4>
           <h4>Phone No : <?php echo 01318515718; ?></h4>
               
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
                        <td><?php echo EEE;?></td>
                        <td><?php echo 70;?></td>
                        <td><?php echo 3;?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><?php echo CSE;?></td>
                        <td><?php echo 67;?></td>
                        <td><?php echo 3;?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><?php echo MAth;?></td>
                        <td><?php echo 79;?></td>
                        <td><?php echo 3;?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo English2;?></td>
                        <td><?php echo 74;?></td>
                        <td><?php echo 3;?></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><?php echo CSEsessional;?></td>
                        <td><?php echo 89;?></td>
                        <td><?php echo 3;?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td>CGPA:<?php echo 3.6; ?></td>
                        <td><?php echo 379; ?></td>
                        <td><?php echo 15; ?></td>
                    </tr>
                </tfoot>
           </table>
           
           
        </form>
        
    </body>
</html>