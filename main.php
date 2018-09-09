<?php
session_start();

    $regNumber = "";
    $fullName = "";
    $email = "";
    $phone = "";
    $errors = array();

// connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'student information');
 // REGISTER USER
        if (isset($_POST['submit'])) {
            $regNumber = mysqli_real_escape_string($db, $_POST['regNumber']);
            $fullName = mysqli_real_escape_string($db, $_POST['fullName']);
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $phone = mysqli_real_escape_string($db, $_POST['phone']);
            $facebook = mysqli_real_escape_string($db, $_POST['facebook']);
            $instagram = mysqli_real_escape_string($db, $_POST['instagram']);

// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array      
            if (empty($regNumber)) {
                array_push($errors, "Registration Number is required" );
            }
            if (empty($fullName)) {
                array_push($errors, "Fullname is required" );
            }
            if (empty($email)) {
                array_push($errors, "Email is required" );
            }
            if (empty($phone)) {
                array_push($errors, "Phone Number is required" );
            }

            $user_check_query = "SELECT * FROM users WHERE regNumber ='$regNumber' OR fullName = '$fullName' OR email='$email' OR phone = '$phone' LIMIT 1";
            $result = mysqli_query($db, $user_check_query);
            $user = mysqli_fetch_assoc($result);

            if($user) {
                if($user['regNumber'] === $regNumber) {
                    array_push($errors, "Registration Number already Exists! <b>Kindly contact: 08158576171 to make any changes</b>" );
                }

                if($user['fullName'] === $fullName) {
                    array_push($errors, "Fullname already Exists" );
                }

                if($user['email'] === $email) {
                    array_push($errors, "Email already Exists" );
                }

                if($user['phone'] === $phone ) {
                    array_push($errors, "Phone already Exists" );
                }
            }

            if(count($errors) === 0) {
                $sql =  "INSERT INTO users (regNumber, fullName, email, phone, facebook, instagram) 
  			        VALUES('$regNumber','$fullName','$email', '$phone','$facebook','$instagram')";
                    mysqli_query($db,$sql);
                    array_push($errors, "You have Successfully Registered!");
                    echo "<span class='form-error'>You have Successfully Registered!</span>";
                    header('location: index.php');
                    exit();
            }             
  }

?>