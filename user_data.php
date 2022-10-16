<?php
$name = $_POST['fname'];
$lname = $_POST['lname'];
$age1 = $_POST['age1'];
$country = $_POST['country'];
$state = $_POST['state'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$bio = $_POST['bio'];
$job = $_POST['job'];
$hobbies = $_POST['hobbies'];

echo "First Nmae: " . $name . "<br>"; 
echo "Last Name: " . $lname . "<br>";
echo "AGE: " . $age1 . "<br>";
echo "Your Country: " . $country . "<br>";
echo "Your State: " . $state . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Phone Number: " . $phone . "<br>";
echo "Email: " . $email . "<br>";
echo "Password: " . $password . "<br>";
echo "About You: " . $bio . "<br>";
echo "Profession: " . $job . "<br>";
echo "User_Intetest: " . $hobbies . "<br>";


$file = "./user_data.csv";



?>