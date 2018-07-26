<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "library";




   $dbconn= new mysqli($servername,$username,$password,$dbname);



   $txt = $_REQUEST["txt"];

   $sql = "select * from Books where Title like '%".$txt."%' limit 5";

   $result = $dbconn->query($sql);

   if ($txt == "") { 
       echo "<div id='txt' class='c' style='display:none;'>No Result</div>";
       
   }
   else
   {

   
   if ($result->num_rows > 0) {
       // output data of each row
       echo "<div id='txt' class='c'>";


       while($row = $result->fetch_assoc()) {
          
          
          echo "<div class='resultTab'>".$row["Title"]."</div>";

       
      
   } 
echo"</div>";
   $dbconn->close();
   
   }
}

?>