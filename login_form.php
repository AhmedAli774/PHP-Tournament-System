<?php
@include 'config.php';

session_start();


if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    // $cpass = md5($_POST['cpassword']);

    $select = " SELECT *  FROM user_form WHERE email = '$email' &&  password = '$pass' ";

    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);

    if ($row) {

        $_SESSION['admin_name'] = $row['name'];
        header("location:admin_page.php");
      }	
      else{
        $error[] = 'incorect email or password!';
      }

   

    // if(mysqli_num_rows($result) > 0){
    //     // $row = mysqli_fetch_array($result);
        
    //     // if($row){
    //     //     header('location:user_page.php');
    //     // }

    //     // if($row['user_form'] == 'admin'){

    //     //     $_SESSION['admin_name'] = $row['name'];
    //     //     header('location:admin_page.php');

    //     // }elseif($row['user_type'] == 'user'){

    //     //     $_SESSION['user_form'] = $row['name'];
    //     //     header('location:user_page.php');

    //     // }

    // }else{
    //     $error[] = 'incorect email or password!';
    // }

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<div class="form-container">
    <form action="" method="POST">
        <h3>Login Now</h3>
        <?php 
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <div id="type_pass">
          <input type="password" id="password" name="password"placeholder="Enter Your Password" required >
        <span id="toggleBtn"><i class="fa-solid fa-eye"></i></span>
       </div>
       
        <input type="submit" name="submit" value="Login Now" class="form-btn">
        <p>don't heve an account? <a href="register_form.php">Register Now</a></p>
    </form>

</div>










<script>


    var pass = document.getElementById('password');
    var togglebtn = document.getElementById('toggleBtn');

    togglebtn.onclick = function(){
        if (pass.type === 'password'){
            pass.setAttribute('type', 'text');
        } else {
            pass.setAttribute('type', 'password');   
        }
    }

</script>







</body>
</html>