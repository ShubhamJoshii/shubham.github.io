<?php
    $servername="localhost:3307";
    $username="root"; 
    $password="";
    $dbname="portfolio";

    if(isset($_POST['submit']))
    {
      $emotes=$_POST['emotes'];
      $fcategory=$_POST['fcategory'];
      $feedback=$_POST['feedback'];
  
    }




    // $emotes=$_POST['emotes'];
    // $fcategory=$_POST['fcategory'];
    // $feedback=$_POST['feedback'];

    echo"$emotes $fcategory $feedback";
    $conn=mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
      die("Connection Failed: ".mysqli_connect_error());
    }
    else{
      echo"<br> Connection Successfully";
    }

    $sql="INSERT INTO feedback(emotes, fcategory, feedback) value( '$emotes', '$fcategory', '$feedback')";

    echo"<br>";
    if(mysqli_query($conn,$sql)){
      echo"New Record Created";
    }else{
      echo"Error Found ".$sql."<br>".mysqli_error($conn);
      ;
    }

    mysqli_close($conn);
    

?>

