<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "db_conn.php";

if (isset($_POST['lat']) && isset($_POST['longt'])) {


	$lat=$_POST['lat'];
	$longt =$_POST['longt'];

			$_SESSION['lat'] = $lat;
			$_SESSION['longt'] = $longt;
    
            $user_name = $_SESSION['user_name'];
            $sql_2 = "UPDATE users
                          SET lat='$lat',longt='$longt'
                          WHERE user_name='$user_name'";
                mysqli_query($conn, $sql_2);
                
    
    
                header("Location: 3mapscreen.php");
                exit();

}else{
	header("Location: 1user.php");
	exit();
}

}else{
     header("Location: 1user.php");
     exit();
}