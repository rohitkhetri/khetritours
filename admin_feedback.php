<?php   
 include 'database.php';  

$que="SELECT * FROM `feedback`";
$result = mysqli_query($db, $que); 
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title></title>  
      <style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
td {
  text-align: center;
}
</style>
 </head>  
 <body>  
 
			<h1 class="heading-title"> Feedbacks </h1>
	
          <table border="5" cellspacing="5" cellpadding="5">  
           <tr class="center">  
           <th>ID</th>  
        
           <th>User Name</th>  
           <th>Email</th>  
           <th>Feedback</th>  
               
            </tr>  
            <?php   
            $i=1;  
                if ($num = mysqli_num_rows($result)>0) {  
                        while ($run = mysqli_fetch_assoc($result)) {  
                            echo "  
                                 <tr class='data'>  
                                    <td>".$i++."</td>  
                                    <td>".$run['name']."</td>
                                    <td>".$run['email']."</td>  
                                    <td>".$run['feedbk']."</td>  
                                     
                                     
                                </tr>  
                            ";  
                        }         
                    }  
            ?>  
        </table> 
  </br><a id="a6" href="admin.php" onclick="myFunction(document.getElementById(this.id))">Back</a>
 </body>  
 </html> 