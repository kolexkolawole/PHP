<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Registration</title>
  <!-- <link href="index.css" rel="stylesheet" type="text/css"> -->
</head>


   <body>
   
   <a href="index.css?subject=PHP&web=http://localhost/xampptest/php/index.css"></a>
  <div class="header">
     <input type="checkbox" id="nav"> 
  <label for="nav" class="material-icons">logo
  <div class="nav" width="5" height="5">
    <center>
  <link href="user_data.php">
   <img src="https://tinyurl.com/95c6xp36" width="150" height="150px" align = "center", alt="logo">  
  <h1><b>My Registration Form</b></h1>
</center>
  
     

      <div class="column">
      
      <!-- <form action="index.css" method="post"> -->
        
        
        <fieldset>
          
          <legend><b> Your Basic Info</b></legend>
          <br>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <label for="name">First Name:</label>
          <input type="text" name="First Name">
          <input type="submit"> <br><br>

          <input type="text" id="name" name="user_name">
            <label for="name">Last Name:</label>
          <input type="text" id="name" name="user_name">


          <label>Age:</label>
          <input type="radio" id="under_18" value="under_18" name="user_age"><label for="under_18" class="light">Under 18</label><br>
          <input type="radio" id="over_18" value="over_18" name="user_age"><label for="over_18" class="light">Over 18</label>
          <p></p>


       <label for="cars">Choose Your country:</label>
  <select name="country" id="country">
    <option value="country">Nigeria</option>
    <option value="country">Sounth Africa</option>
    <option value="country">Algeria</option>
    <option value="country">united states</option>
  </select>
  <br><br <label="" for="State">State/Province:
          <input type="text" id="name" name="State/Province">

        

        
<label for="Gender">Choose Your Gender:</label>
  <select name="Gender" id="Gender">
    <option value="Male">Male</option>
    <option value="female">Female</option>
    <option value="Both">Transgender</option>
    <option value="none">Dont want to share</option>
  </select>
  <br><br>

       
  <label for="phone">Phone Number:</label><br>
  <input type="text" id="fname" name="fname" value="+234"><br>

<label for="phone">Email:</label><br>
  <input type="text" id="fname" name="fname" value="@"><br>
          
  <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
       
          <label for="password">Confirm:</label>
          <input type="password" id="password" name="user_password">
        
          
          
        </fieldset>
        <fieldset>  
        
          <legend><b> Your Profile</b></legend>
          <br><br>
          
         <label for="bio">Bio:</label>
          <textarea id="bio" name="user_bio"></textarea>
        
       
        
         <label for="job">Job Role:</label>
          <select id="job" name="user_job">
            <optgroup label="Web">
              <option value="frontend_developer">Front-End Developer</option>
              <option value="php_developer">PHP Developer</option>
              <option value="python_developer">Python Developer</option>
              <option value="rails_developer">Rails Developer</option>
              <option value="web_designer">Web Designer</option>
              <option value="wordpress_developer">Wordpress Developer</option>
            </optgroup>
            <optgroup label="Mobile">
              <option value="android_developer">Android Developer</option>
              <option value="ios_developer">IOS Developer</option>
              <option value="mobile_designer">Mobile Designer</option>
            </optgroup>
            <optgroup label="Business">
              <option value="business_owner">Business Owner</option>
              <option value="freelancer">Freelancer</option>
            </optgroup>
          </select>
          
          <label>Interests:</label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Development</label><br>
          <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Design</label><br>
          <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Business</label>
          
         </fieldset>


  <div class="button">

                 
                  <button type="button" value="submit" title="submit" id="submit" <="" button="">
                <a href="login.html" style="text-decoration: none;">SUBMIT</a>
  </button></div>
       </form>
        </div>
      
      <script src="script.js"></script>
   
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br>
    <footer>
  <div>© 2022 | Made by <a href="https://www.facebook.com/K.KOLEX" target="_blank" style="text-decoration: none;"><b>KOLEX</b></a> Twitter <a href="https://twitter.com/kolexkolawole" style="text-decoration: none;"><b>Link</b></a> | Inspired by <a href="https://training.zuri.team" target="_blank" style="text-decoration: none;"><b>Zuri</b></a> &amp; <a href="https://ingressive.org" style="text-decoration: none;"><b>I4G</b></a></div>
</footer>





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
</body></html>