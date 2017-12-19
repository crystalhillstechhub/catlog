<?php

    require('coonection.php');

    if(isset($_POST['download'])){

        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $sex = "M";

        // query
        $sql = "INSERT INTO customer (First_Name,Email,Phone,sex) VALUES (:fullName,:email,:phoneNumber,:sex)";
        $q = $db->prepare($sql);
        $result = $q->execute(array(':fullName'=>$fullName,':email'=>$email,':phoneNumber'=>$phoneNumber,':sex'=>$sex));

        if($result){
            echo "Information Saved.... Catlog downloading........";
        }
        else{
            echo "Error Saving Information";
        }
    }

?>