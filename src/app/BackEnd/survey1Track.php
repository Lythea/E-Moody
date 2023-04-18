<?php
header ('Access-Control-Allow-Origin: *');
header ('Access-Control-Allow-Headers: *');
header ('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');

$servername = "localhost";
$username = "root";
$password = "";
$bsu = "bsu";
$ub = "ub";
$lpu = "lpu";
// Connect with the database.
$company = $_POST['company'];
if ($company == 'BSU'){
  $conn= new mysqli($servername, $username, $password,$bsu);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}


  $id = $_POST['id'];
  $date = $_POST['date'];

  $sql = "SELECT id,date,q1,q1,q3,q4,q5,q6,q7,q8,q9,q10 FROM dailysurvey1 WHERE id= '$id' and date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $data = $result->fetch_all(MYSQLI_ASSOC);
      echo json_encode(['data' => $data]);
    } else {
      echo json_encode(['data'=> 'Not Found!']);
  }
  $conn->close();
  exit();


}else if($company == 'UB'){

  $conn= new mysqli($servername, $username, $password,$ub);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

    $id = $_POST['id'];
    $date = $_POST['date'];

    $sql = "SELECT id,date,q1,q1,q3,q4,q5,q6,q7,q8,q9,q10 FROM dailysurvey1 WHERE id= '$id' and date = '$date'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode(['data' => $data]);
      } else {
        echo json_encode(['data'=> 'Not Found!']);
    }
    $conn->close();
    exit();

}else if($company == 'LPU'){

  $conn= new mysqli($servername, $username, $password,$lpu);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}


  $id = $_POST['id'];
  $date = $_POST['date'];

  $sql = "SELECT id,date,q1,q1,q3,q4,q5,q6,q7,q8,q9,q10 FROM dailysurvey1 WHERE id= '$id' and date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $data = $result->fetch_all(MYSQLI_ASSOC);
      echo json_encode(['data' => $data]);
    } else {
      echo json_encode(['data'=> 'Not Found!']);
  }
  $conn->close();
  exit();

}

?>

