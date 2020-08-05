<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  $age = $_POST['age'];
  $phoneno = $_POST['contact'];
  $academicyr = $_POST['year'];
  $class = $_POST['class'];
  $marks = $_POST['marks'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $firstopt = $_POST['groups'];
  $secondopt = $_POST['groups1'];
  $selectimg = $_POST['fileToUpload'];
  echo "Name:",$name,"<br>";
  echo "Age:",$age,"<br>";
  echo "Phone number:",$phoneno,"<br>";
  echo "Email:" ,$email,"<br>";
  echo "Gender",$gender,"<br>";
  echo "Academic Year:",$academicyr,"<br>";
  echo "Class:",$class,"<br>";
  echo "Marks in 10th:",$marks,"<br>";
  echo "First option in group:",$firstopt,"<br>";
  echo "Second option in group:",$secondopt,"<br>";
  echo "Your Image:",$selectimg,"<br>";
}
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$servername = "localhost";
$username = "admin";
$password = "Mozhi2102";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql="INSERT INTO admnForm (Name, Age, Standard, Phone_no, Email, Gender, AcademicYear, Marks_in_10th, First_Option_group, Second_Option_group, Fileupload)
VALUES ('$name', '$age', '$class', '$phoneno','$email', '$gender', '$academicyr', '$marks', '$firstopt', '$secondopt', '$selectimg')";



if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
