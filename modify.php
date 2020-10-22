<?php

$id = $_POST['id'];

$forModify = $_POST['message'];

$connectionAuxiliary = new mysqli('remotemysql.com', 'TGOhJ1gk0h', 'KLAwS8PITW');
$sql = " UPDATE TGOhJ1gk0h.`collectted_data`   SET  `collectted_data`.name =  '$forModify'  WHERE  `collectted_data`.id = '$id'; ";



$result = $connectionAuxiliary->query($sql);

if ($result === TRUE) printf("modificare ok \n");
else printf("nu modificare ok\n");
