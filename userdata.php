<html>
    
<body>
<center> <h1>My Registration Form</h1></center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  name: <input type="text" name="fname">
  <input type="submit"> <br><br>

  email: <input type="text" email="fname">
  <input type="submit"> <br><br>

  dob: <input type="number" email="fnumber">
  <input type="submit"> <br><br>

  gender: <input type="text" gender="fname">
  <input type="submit">  <br><br>

  country: <input type="text" country="fname">
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
  {
    $gender = $_POST['fname'];
    if (empty($gender)) {
      echo "Male/Female is not selected";
    } else {
      echo $gender;
    }
    }
    {
        $country = $_POST['fname'];
        if (empty($country)) {
          echo "county is empty";
        } else {
          echo $country;
        }
        }
}
?>
<center><a href="userdata.csv?subject=PHP&web=http://localhost/xampptest/php/user_data.php">Getinfo $GET</a>
</center>
<?php
echo "GETinfo" . $_GET['summit'] . " at " . $_GET['button'];
$_GET['fname']
?>
</body>
</html>