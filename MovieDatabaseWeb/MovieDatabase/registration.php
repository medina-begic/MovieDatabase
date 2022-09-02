<?php



$db = "users";
$user = $_POST["users"];
$password = $_POST["password"];
$host = "localhost";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];


$conn = mysqli_connect($host,'admin','admin' ,$db);

if($conn && !empty($user) && !empty($password) && !empty($firstname) && !empty($lastname)){
    $q = "select * from users where users ='$user'";
    $result = mysqli_query($conn, $q);

    if(mysqli_num_rows($result)>0){
        echo "<script type='text/javascript'>alert('USER ALREADY EXIST');</script>";
        
        
    }else{
        $insert = "INSERT INTO users(users, password, firstname, lastname) VALUES('$user', '$password', '$firstname','$lastname')";
        if(mysqli_query($conn,$insert)){
        
            echo "<script type='text/javascript'>alert('NEW USER REGISTERED!');</script>";
            header('Location: movies.html');


        }else{
            echo "Error: " . $insert . "" . mysqli_error($conn);
        }
    }

}else{
    echo"<script type='text/javascript'>alert('NOT CONNECTED or FIELDS ARE EMPTY!');</script>";    
}


?>