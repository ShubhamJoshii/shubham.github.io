<?php
    $emotes=$_POST['emotes'];
    $fcategory=$_POST['fcategory'];
    $feedback=$_POST['feedback'];
    

    

    //database connection

    // Database connection
    $conn = new mysqli('localhost','root','your_password','test1');
    if($conn->connect_error){
        die('Connection Failed:' .$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into registration(emotes, fcategory, feedback) values(?, ?, ?)");
        $stmt->bind_param("sss",$emotes, $fcategory, $feedback);
        $stmt->execute();   
        echo"registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>