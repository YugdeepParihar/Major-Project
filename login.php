<!-- <?php
@include 'config.php';

session_start();
if(isset($_POST['submit'])){

  $name =mysqli_real_escape_string($conn,$_POST['name']);
  $email =mysqli_real_escape_string($conn,$_POST['email']);
  $pass =md5($_POST['password']);
  $cpass =md5($_POST['cpassword']);
  $user_type=$_POST['user_type'];

  $select = " SELECT * FROM form WHERE email='$email' && password='$pass' ";
  $result =mysqli_query($conn ,$select);
  if(mysqli_num_rows($result)>0){

    $row=mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         header('location:yug.html');
        }

        elseif($row['user_type'] == 'user'){
             $_SESSION['user_name'] = $row['name'];
             header('location:user.php');
            }
    }
    else {
        $error[] ='incorrect email or password!';
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
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected with DREAMZ</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action=" " method="post" >
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <!-- <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            
            ?> -->
                <input type="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="submit"  value="login now">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip"><a href="register.php" >  Signup now</label></a></div>
            </div>
        </form>
      </div>
        </div>
    </div>
  </div>
  
</body>
</html>
