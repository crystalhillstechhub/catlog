<?php

    require('connection.php');

    if(isset($_POST['signup'])){

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
            // We'll be outputting a PDF
            header('Content-type: application/pdf');

            // It will be called Catlog.pdf
            header('Content-Disposition: attachment; filename="catlog.pdf"');

            // The PDF source is in original.pdf
            readfile('file/catlog.pdf');
           
        }
        else{
            echo "Error Saving Information";
        }
    }

?>