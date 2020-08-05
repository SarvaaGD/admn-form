<!DOCTYPE html>
<html>
<head>
  <style>
  h1 {
    background-color:#E9967A;
    text-align: center;
    padding: 20px;
    font-family: "Lucida Console", Monaco, monospace;
  }
  /* The navbar container */
.topnav {
  overflow: hidden;
  background-color: #28004d ;
}

/* Navbar links */
.topnav a {
  float: left;
  display: block;
  color: #ffffff ;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.error {color: #FF0000;}

/* Links - change color on hover */
.topnav a:hover {
  background-color: #ffffff;
  color: black;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=file], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color:#ffffff;
  padding: 20px;
}
  </style>
<body style = "background-color:#E9967A;">
  <?php
  $nameErr = $ageErr = $genderErr = $emailErr = "";
  $name = $email = $gender = $age = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }

    if (empty($_POST["age"])) {
      $ageErr = "Age is required";
    } else {
      $age = test_input($_POST["age"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>


  <h1 style="text-align:center;"><b>Keena Memorial Public School</b></h1>
  <div class="topnav">
  <a href="#">Home</a>
  <a href="#">Admission</a>
  <a href="AboutUs.php">About us</a>
</div>



<table>
<form action="submission_form.php" method="post" enctype="multipart/form-data">

  <tr>
<td><b>Name :</b> <input type="text" name="name"></td>
<span class="error"> *<?php echo $nameErr,"<br>";?></span>


<td><b>Age  :</b> <input type="text" name="age"></td></tr>
<span class="error">*<?php echo $ageErr,"<br>";?></span>

<tr>
<td><b>Phone No:</b> <input type='text' name='contact'></td>


<td><b>Gender:</b>
<select name="gender" value="gender">
<option  value=""></option>
<option  value="female">Female</option>
<option value="male">Male</option>
<option  value="other">other</option></td>
<span class="error">* <?php echo $genderErr,"<br>";?></span>


<td><b><label for="email">Enter your email:</label>
  <input type="email" name="email"></td>
<span class="error">* <?php echo $emailErr,"<br>";?></span>

</tr>

<tr><td><b>Academic year:</b>
  <select name="year" value="years">
    <option  value=""></option>
  <option value="2020-2021">2020-2021</option></td>


<td><b>Class:</b> <input type="text" name="class"></td>

<td><b>Marks In 10th:</b> <input type="text" name="marks"></td></tr>

<tr><td><b>First option group:</b><br>
<select name="groups" value="groups">
<option  value=""></option>
<option value="bio">Bio maths</option>
<option value="comp">Computer Science</option>
<option value="com/m">Commerce with maths</option>
<option value="com/c">Commerce with Computer Science</option></td>

<td><b>Second option group:</b><br>
  <select name="groups1" value="groups1">
    <option  value=""></option>
<option value="bio">Bio maths</option>
<option value="comp">Computer Science</option>
<option value="com/m">Commerce with maths</option>
<option value="com/c">Commerce with Computer Science</option></td></tr>
 <tr><td><b>Your Image :</b><input type="file" name="fileToUpload"></td></tr>
<tr><td><input type="submit" value ="Submit"></td></tr>





</form>
</table>
&copy; 2019-<?php echo date("Y");?>


</body>
</html>
