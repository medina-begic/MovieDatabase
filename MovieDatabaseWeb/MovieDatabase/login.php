<?php






$db = "users";
$user = $_POST["users"];
$password = $_POST["password"];
$host = "localhost";

$conn = mysqli_connect($host,'admin','admin' ,$db);

if($conn && !empty($user) && !empty($password)){
    $q = "select * from users where users like '$user' and password like '$password'";
    $result = mysqli_query($conn, $q);

    if(mysqli_num_rows($result)>0){
        echo"LOGIN SUCCESSFULL";
        session_start();
        $_SESSION['name'] = $user;
        header('Location: movies.html');
        
    }else{
        echo"<script type='text/javascript'>alert('LOGIN FILED!');</script>";
    }

}else{
    echo"<script type='text/javascript'>alert('NOT CONNECTED or FIELDS ARE EMPTY!');</script>";    
}


?>