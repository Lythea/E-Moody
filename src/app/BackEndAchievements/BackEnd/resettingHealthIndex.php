<?php
header ('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type: application/json, X-Auth-Token, Authorization, Origin');
header ('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');
header('Content-Type: application/json');
$servername = "preast.iad1-mysql-e2-17b.dreamhost.com";
$port = "3306";
$username = "pph_moody";
$password = "PPH_Student@2023";
$db="moody";
// Create connection
$conn = new mysqli($servername, $username, $password,$db,$port);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

      $id = $_POST['id'];
      $date1 = $_POST['date1'];
      $date2 = $_POST['date2'];
      $companyname = $_POST['company'];
      $sql = "DELETE FROM healthindex WHERE id= '$id' and Year = '$date1' and Month ='$date2' and companyname ='$companyname'";
      $result = $conn->query($sql);
        if ($result=== TRUE) {
          echo json_encode(['data' => 'Deleted Successfully!']);
      } else {
          echo json_encode(['data' => 'Error deleting record: ']);
      }
      $conn->close();
      exit();

?>

