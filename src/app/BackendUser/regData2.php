<?php

header ('Access-Control-Allow-Origin: *');
header ('Access-Control-Allow-Headers: *');
header ('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');

$servername = "localhost";
$username = "root";
$password = "";
$database = "dataStorage";
// Connect with the database.
$conn= new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }else

  $id = $_POST['id'];
  $date = $_POST['date'];
  $data1 = $_POST['data1'];
  $data2 = $_POST['data2'];
  $data3 = $_POST['data3'];
  $data4 = $_POST['data4'];
  $data5 = $_POST['data5'];
  $data6 = $_POST['data6'];
  $data7 = $_POST['data7'];
  $data8 = $_POST['data8'];
  $data9 = $_POST['data9'];
  $data10 = $_POST['data10'];
  
  $sql = "INSERT into dataset2 (id,date,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10)
  VALUES (
    '$id',
    '$date',
    '$data1',
    '$data2',
    '$data3',
    '$data4',
    '$data5',
    '$data6',
    '$data7',
    '$data8',
    '$data9',
    '$data10')";
  $result = $conn->query($sql);
    if($result===TRUE){
      echo json_encode(['data' => 'Data Registered']);
    }else
      echo json_encode(['data' => 'Error']);
$conn->close();

exit();
?>

