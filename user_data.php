<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="userdata">
  <input type="submit"> <br><br>

  Email: <input type="text" name="userdata.csv">
  <input type="submit"> <br><br>

  Date of Birth: <input type="text" name="userdata.csv">
  <input type="submit"> <br><br>

  Gender: <input type="text" name="userdata">
  <input type="submit">  <br><br>

  Country: <input type="text" name="userdata">
  <input type="submit">  <br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['submit'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>