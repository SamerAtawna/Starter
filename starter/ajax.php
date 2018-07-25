<?php
$servername = "localhost";

            $username = "root";
            $password = "";
            $dbname = "library";


         

            $dbconn= new mysqli($servername,$username,$password,$dbname);

            $q=$_REQUEST["q"];


   
            $sql = "select * from users where Firstname like '%".$q."%'"; 
    
            $result = $dbconn->query($sql);

            if ($q !== "") {
            if ($result->num_rows > 0) {
                // output data of each row
      
     
                while($row = $result->fetch_assoc()) {
                   

                    echo "<div class=\"b\"> " . $row["Firstname"]."</div><br>";
            
                    
                }

            }
        }
                ?>