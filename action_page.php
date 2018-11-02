<html>
    <body>
        <?php
         echo phpinfo();
        $last_name="";
        $first_name="";
         if(isset($_POST['firstname']))
         {
             $first_name=$_POST["firstname"];
             echo $first_name;
         }

         if(isset($_POST['lastname']))
         {
             $last_name=$_POST["lastname"];
         }
        
        //   $servername = "localhost";
        //   $username = "root";
        //   $password = "123";
        //   // Create connection
        //   $conn = new mysqli($servername, $username, $password);
        //   // Check connection
        //   if ($conn->connect_error) {
        //        die("Connection failed: " . $conn->connect_error);
        //   }
       

         ?>
    </body>
</html>