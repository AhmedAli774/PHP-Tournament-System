<?php
@include 'config.php';


if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT *  FROM user_form WHERE email = '$email' &&  password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already  excit!';

    }else{
        if($pass != $cpass){
            $error[] = 'Password Not Matched!'; 
        }else{
            $insert = "insert into user_form(name , last , phone , email , password , cpassword) value('$name','$last','$phone','$email','$pass','$cpass')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');

        }

    }

};
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>register form</title>
    
</head>
<body>
    
<div class="form-container">     

    <form action="" method="POST">
        <h3>Register Now</h3>
        <?php 
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="name" placeholder="Enter Your Name" required>
        <input type="text" name="last" placeholder="Enter Your Last Name" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="password" name="password" placeholder="Enter Your Password" >
        <input type="password" name="cpassword"  required placeholder="Enter Your Confirm Password">
    
        <input type="submit" name="submit" value="Register Now" class="form-btn">
        <p>already heve an account? <a href="login_form.php">Login Now</a></p>
    </form>

</div>


















</body>
</html>