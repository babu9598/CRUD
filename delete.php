<?php
$connection=mysqli_connect("localhost","root","",);
$db= mysqli_select_db($connection,"crud");
$delete=$_GET['delete'];
$sql="delete  from crudopp where rollno='$delete'";

if(mysqli_query($connection,$sql)){
    echo'<script>location.replace("index.php")</script>';
}
else{
    echo"Something error". $connection->error;
}


?>