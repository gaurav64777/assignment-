<?php
include 'gaurav_midterminfo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Escape the input data to prevent SQL injection
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password =  $_POST['password'];
  $date_of_birth = $_POST['date_of_birth'];
  $telephone = $_POST['telephone'];
  $number = $_POST['number'];
  $textarea= $_POST['textarea'];
  $gender = $_POST['gender'];
  $shift =  $_POST['shift'];
  $color = $_POST['color'];}

  // Insert the data into the users table
  $sql = "INSERT INTO users (first_name, last_name, email, password, date_of_birth, telephone, number, textarea, gender, shift, color)
          VALUES ('$first_name', '$last_name', '$email', '$password', '$date_of_birth', '$telephone', '$number', '$textarea', '$gender', '$shift', '$color')";

if(mysqli_query($con, $sql)){
    echo '<script>alert("Submitted");</script>';
}

?>

<html lang="en">
<!DOCTYPE html>
<html>
<head>
  <title>User Signup Form</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div id="signup-outer-div">
  <h1>User Signup Page</h1>
    <div class="signup-form-body">
      <form action="#" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>

        <label for="telephone">Telephone:</label>
        <input type="tel" id="telephone" name="telephone" required>

        <label for="number">Number:</label>
        <input type="text" id="number" name="number">

        <label for="textarea">TextArea:</label>
        <textarea id="textarea" name="textarea" rows="4" cols="50"></textarea>

        <label for="gender">Gender:</label>
        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="Female" required>

        <label for="shift">Shift:</label>
        <label for="day_shift">Day Shift</label>
        <input type="radio" id="day_shift" name="shift" value="Day" required>
        <label for="night_shift">Night Shift</label>
        <input type="radio" id="night_shift" name="shift" value="Night" required>

        <label for="color">Color:</label>
        <select id="color" name="color" required>
          <option value="">Select a color</option>
          <option value="Red">Red</option>
          <option value="Blue">Blue</option>
          <option value="Green">Green</option>
          <option value="Yellow">Yellow</option>
          <option value="Purple">Purple</option>
          <option value="Orange">Orange</option>
          <option value="Pink">Pink</option>
          <option value="Brown">Brown</option>
          <option value="Black">Black</option>
          <option value="White">White</option>
          <option value="Gray">Gray</option>
        </select>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
      </form>
    </div>
  </div>


</body>
</html>