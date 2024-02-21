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
        <div class="card-header">Crud Operation in PHP </div>
        <div class="card-body">
            <button class="btn btn-success"><a href="add.php" class="text-light">Add New</a></button></br></br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">RollNo</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">MobileNo</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
  <?php
$connection=mysqli_connect("localhost","root","",);
$db= mysqli_select_db($connection,"crud");
$sql="select * from crudopp";
$run=mysqli_query($connection,$sql);
$id=1;
while($row= mysqli_fetch_array($run))
{
  $Rollno=$row['rollno'];
  $Name=$row['name'];
  $Address=$row['address'];
  $Mobileno=$row['mobileno'];



?>
<tr>
    <td> <?php  echo $Rollno ?></td>
    <td> <?php  echo $Name ?></td>
    <td> <?php  echo $Address ?></td>
    <td> <?php  echo $Mobileno ?></td>
    <td>
    <button class="btn btn-success"><a href='edit.php?edit=<?php echo $Rollno?>' class="text-light">edit</a></button> &nbsp;
    <button class="btn btn-danger"><a href='delete.php?delete=<?php echo $Rollno?>' class="text-light">delete</a></button>
    </td>
</tr>

<?php $id++;
}
?>

  </tbody>
</table>
  </div>
        </div>
        </div>
    </div>
    
</body>
</html>