    <?php
     $mysqli = new mysqli("localhost","root","","sorush_gym");
     
     // Check connection
     if ($mysqli -> connect_errno) {
       echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
       exit();
     }
     ?> 
