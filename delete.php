<?php

$id = $_POST['id'];


$connectionAuxiliary = new mysqli('remotemysql.com', 'TGOhJ1gk0h', 'KLAwS8PITW');
$sql = " DELETE FROM TGOhJ1gk0h.`collectted_data`   WHERE   `collectted_data`.id = '$id'; ";

/*SET @num := 0;
         UPDATE TGOhJ1gk0h.`collectted_data` SET id = @num := (@num+1);
         ALTER TABLE TGOhJ1gk0h.`collectted_data` AUTO_INCREMENT = 1; */

$result = $connectionAuxiliary->query($sql);
echo $result;

if ($result === TRUE) printf("stergere ok \n");
else printf("nu stergerere ok\n");

//$sql2 = " update TGOhJ1gk0h.`collectted_data` set `collectted_data`.id=`collectted_data`.id-1 where `collectted_data`.id > '$id';";
$sql2 = "SET @num := 0;
       UPDATE TGOhJ1gk0h.`collectted_data` SET id = @num := (@num+1);
       ALTER TABLE TGOhJ1gk0h.`collectted_data` AUTO_INCREMENT = 1;";


$result2 = $connectionAuxiliary->multi_query($sql2);
if ($result2 === TRUE) printf("tabel rearanjat\n");
else printf("nu tabel rearanjat\n");
