<html>
    
<body>
<center> <h1>My Registration Form</h1></center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit"> <br><br>

  Email: <input type="text" Email="fname">
  <input type="submit"> <br><br>

  DOB: <input type="number" Email="fnumber">
  <input type="submit"> <br><br>

  Gender: <input type="text" Gender="fname">
  <input type="submit">  <br><br>

  Country: <input type="text" Country="fname">
  <input type="submit">  <br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}{
  $email = $_POST['fname'];
  if (empty($email)) {
    echo "Email is empty";
  } else {
    echo $email;
  }
}{
  $dob = $_POST['fnumber'];
  if (empty($dob)) {
    echo "Date of Birth is empty";
  } else {
    echo $dob;
  }
  }
}
?>
<center><a href="userdata.csv?subject=PHP&web=http://localhost/xampptest/php/user_data.php">Submit $GET</a>
</center>
<?php
echo "submit" . $_GET['userdata'] . " at " . $_GET['fname'];
?>
</body>
</html>