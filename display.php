<?php
   $connectionAuxiliary = new mysqli('remotemysql.com', 'TGOhJ1gk0h', 'KLAwS8PITW');
   $sql = "SELECT * FROM TGOhJ1gk0h.`collectted_data`";
   $result = $connectionAuxiliary->query($sql);

   if ($result->num_rows > 0) {
       // output data of each row
       while ($row = $result->fetch_assoc()) {
           echo "name: " . $row["name"] . " - email: " . $row["email"] . " - password: " . $row["password"] . "<br>";
       }
   } else {
       echo "0 results";
   }
