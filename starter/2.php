<?php
session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "library";


         

            $dbconn= new mysqli($servername,$username,$password,$dbname);



            if(isset($_POST['submit']))

            {

   
            $sql = "select * from users where Username='".$_POST['username']."' and Password='".$_POST['password']."'";
    
            $result = $dbconn->query($sql);


            if ($result->num_rows > 0) {
                // output data of each row
             
                $red = $_POST['username'];
     
                while($row = $result->fetch_assoc()) {
                   

                    echo "Hello " . $row["Firstname"]."<br>";
                    echo "Login Success, Redirecting....";
                    $_SESSION["Username"]=$row["Username"];
                    $_SESSION["Firstname"]=$row["Firstname"];
                    $_SESSION["Lastname"]=$row["Lastname"];
                    header("Location: admin.php");
                   
                    
                }
               
            } else {
                echo "Invalid Credintials, try again";
            }
     
            $dbconn->close();





            }

            ?>
