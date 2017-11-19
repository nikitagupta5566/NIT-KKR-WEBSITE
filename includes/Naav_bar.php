<?php
// connecting the database
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="nit website navigation bar";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn)
    die(mysqli_connect_error());
 // else
 //    echo "Connected!!"."<br>";
$sql="SELECT box_index,box_name FROM nav_boxes";
//$result = $conn->query($sql);
//$row = $result->fetch_assoc();
$result=mysqli_query($conn,$sql);
$rows=array();
while($r=mysqli_fetch_assoc($result))
{
// echo $row["No"].$row["Name"]."<br>";
$rows[]=$r;
// echo json_encode($row["No"].$row["Name"]);
// echo json_encode("<br>") ;
}
echo json_encode($rows);
