<?php


   require('../db/weather');


   $sql = $conn->prepare("SELECT * FROM state WHERE country_id=".$_GET['id']);

   $sql->execute();
   $result = $sql->fetchAll();


   $json = [];
   foreach($result as $row){
        $json[$row['state_id']] = $row['state_name'];
   }


   echo json_encode($json);
?>