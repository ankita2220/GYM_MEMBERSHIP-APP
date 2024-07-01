<?php
if(isset($_POST['name1'])) {
    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server,$username,$password);
    if(!$con) {
        die("Connection to this database is failed due to ". mysqli_connect_error());
    }
    // echo "success connect";
 
    $name = $_POST['name1'];
    $phone = $_POST['ph_no'];
    $add = $_POST['address'];
    $sex = $_POST['gender'];
    $plan = $_POST['Plan'];
    
    
    $sql = "INSERT INTO `gym`.`form` (`Name`,`MobileNO`,`Address`,`Gender`,`Service`,`D&T`) VALUES ('$name','$phone','$add','$sex','$plan',current_timestamp())";

    if ($con->query($sql)==true) {
      
       
        
        echo "HURRAY! Form is Successfully Submitted";
        
      
    }
    else {
        echo "ERROR :$sql <br> $con->error";
    }

    $con->close();








}






?>

