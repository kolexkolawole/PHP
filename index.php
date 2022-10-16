<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Registration</title>
  <!-- <link href="font.css" rel="stylesheet" type="text/css"> -->
</head>


   <body>   
    <center>
   <img src="https://tinyurl.com/95c6xp36" width="150" height="150px" align = "center", alt="logo">  
  <h1><b>My Registration Form</b></h1>
</center>
  
     

      
      
      <form method="POST" action="user_data.php"> 
              <fieldset>
          <legend><b> Your Basic Info</b></legend>
          <br>


          <div class="column" >
          <label for="name">First-Name:</label>
          <input type="text" name="fname" >
         <br><br><br>
         
            <label for="lname">Last-Name:</label>
          <input type="text"  name="lname">
        <br><br><br>


        <label for="age1">Age:<br></label>
          <input type="number"  value="0" name="age1" class="light">
         
           
          <!-- <input type="radio" id="age1" value="age1" name="age1" class="light"> -->
          <p></p>
        

       <label for="cars">Choose Your country:</label>
  <select name="country" id="country">
    <option value="country">Nigeria</option>
    <option value="country">Sounth Africa</option>
    <option value="country">Algeria</option>
    <option value="country">united states</option>
  </select>
  <br><br>
   <label="" for="state">State/Province:</label>
          <input type="state" id="state" name="state">

        
<br><br><br>
        
<label for="gender">Choose Your Gender:</label>
  <select name="gender" id="gender">
    <option value="Male">Male</option>
    <option value="female">Female</option>
    <option value="Both">Transgender</option>
    <option value="none">Dont want to share</option>
  </select>
  <br><br>

    <br>   
  <label for="phone">Phone Number:</label><br>
  <input type="phone" id="phone" name="phone" value="+234"><br>
<br>
<label for="email">Email:</label><br>
  <input type="email" id="email" name="email" value=""><br>
    <br>      
  <label for="password">Password:</label>
  <input type="password" id="password" name="password">
       <br><br><br><br><br>

        <fieldset>  
          <legend><b> Your Profile</b></legend>
          <br><br>
          
         <label for="bio">Bio:</label>
          <textarea id="bio" name="bio"></textarea>
        
       <br><br>
       
        
         <label for="job">Job Role:</label>
          <select id="job" name="job">
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

          <br><br>
        
          <label for="hobbies">Hobbies</label>
          <select id="hobbies" name="hobbies">
            <optgroup label="hobbies">
              <option value="reading">Reading</option>
              <option value="football">football</option>
              <option value="dancing">dancing</option>
              <option value="singing">singing</option>
              <option value="gamer">Gamer</option>
              <option value="betting">Betting</option>
            </optgroup>
          </select>
          <br><br><br>
          <center>
        <button type="submit"><b><h2>Submit</h2></b></button>
        </center>
        </form>
         
<br><br>



  <!-- <center><a href="user_data.csv?subject=PHP&web=http://localhost/xampptest/php/index.php">Getinfo $GET</a>
</center> -->

      
      <!-- <script src="script.js"></script> -->
   
    <footer>
  <div>© 2022 | Made by <a href="https://www.facebook.com/K.KOLEX" target="_blank" style="text-decoration: none;"><b>KOLEX</b></a> Twitter <a href="https://twitter.com/kolexkolawole" style="text-decoration: none;"><b>Link</b></a> | Inspired by <a href="https://training.zuri.team" target="_blank" style="text-decoration: none;"><b>Zuri</b></a> &amp; <a href="https://ingressive.org" style="text-decoration: none;"><b>I4G</b></a></div>
</footer>


</body></html>







