<!-- <?php
@include 'config.php';

if(isset($_POST['submit'])){

  $name =mysqli_real_escape_string($conn,$_POST['name']);
  $email =mysqli_real_escape_string($conn,$_POST['email']);
  $pass =md5($_POST['password']);
  $cpass =md5($_POST['cpassword']);
  $user_type=$_POST['user_type'];

  $select = " SELECT * FROM form WHERE email='$email' && password='$pass' ";
  $result =mysqli_query($conn ,$select);
  if(mysqli_num_rows($result)>0){
    $error[] ='user already exist!';
  }else{
    if($pass != $cpass){
        $error[]='password not matched!';
    }
    else{
        $insert="INSERT INTO form(name,email,password,user_type) VALUES('$name','$email','$pass',
        '$user_type')";
        mysqli_query($conn,$insert);
        header('location:login.php');
    }
  }
};
?> -->


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style2.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
        <div class="form-content">

    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/spiderman.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected with DREAMZ</span>
        </div>
      </div>
    </div>
    <div class="forms">
<div class="signup-form">
    <div class="title">Signup</div>
  <form action=" " method="post">
      <div class="input-boxes">
<!-- 
        <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            
            ?> -->
        <div class="input-box">
          <i class="fas fa-user"></i>
          <input type="text" name="name" required placeholder="enter your name">
        </div>
    
        <div class="input-box">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" required placeholder="enter your email">
       </div>
          <div class="input-box">
            <i class="fas fa-lock"></i>
          <input type="password" name="password" required placeholder="enter your password">
        </div>

        <div class="input-box">
            <i class="fas fa-lock"></i>
          <input type="password" name="cpassword" required placeholder="confrim your password">
        </div>
        <div class="input-box">
          <i class="fas fa-envelope-square"></i>
          &nbsp;&nbsp;&nbsp;
            <select name="user_type">
                <option value="user">user
                </option>
                <option value="admin">admin</option>
            </select>
        </div>

        <div class="button input-box">
          <input type="submit" name="submit" value="Register now">
        </div>
        <div class="text sign-up-text">Already have an account? <label for="flip"></label><a href="login.php" >Sign in</label></a></div>

</form>

</div>
          </div>
          </div>
  </div>
          </body>
          </html>