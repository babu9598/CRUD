<?php
$connection=mysqli_connect("localhost","root","",);
$db= mysqli_select_db($connection,"crud");
if(isset($_POST['submit']))
{
   
    $Name=$_POST['name'];
    $Address=$_POST['address'];
    $Mobileno=$_POST['mobileno'];
    $sql="insert into crudopp(name,address,mobileno)values('$Name','$Address','$Mobileno')";
    if(mysqli_query($connection,$sql)){
        echo'<script>location.replace("index.php")</script>';
    }
    else{
        echo"Something error". $connection->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-9">
        <div class="card">
        <div class="card-header">Enter the Update Queries</div>
        <div class="card-body">

            <form action="add.php" method="post">

                
                <div class="form-group">
                <label>Name</label>
                <input type="text"name="name" class="form-control"  placeholder="Enter Name">
                </div><br><br>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control"  placeholder="Enter Address">
                </div><br><br>
                <div class="form-group">
                    <label>MobileNo</label>
                    <input type="number" name="mobileno" class="form-control"  placeholder="Enter Mobileno">
                </div><br><br>
                <input type="submit" class="btn btn-primary" name="submit" value="Register"></input>
                </form>
  </div>
        </div>
        </div>
    </div>
</body>
</html>