<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <!-- <link rel="stylesheet" href="admin_s.css"> -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url("assets/img/back.jpg");
    background-size: cover;
    background-position: center;
  }

  .user{
    color:black;
  }
  .wrapper{
    width: 420px;
    background: transparent;
    border: 3px solid rgba(3, 3, 3, 0.2);
    backdrop-filter: blur(9px);
    color: black;
    border-radius: 12px;
    padding: 30px 40px;
  }
  .wrapper h1{
    font-size: 36px;
    text-align: center;
  }
  .wrapper .input-box{
    position: relative;
    width: 100%;
    height: 50px;
  
    margin: 30px 0;
  }
  .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: black;
    padding: 20px 45px 20px 20px;
  }
  .input-box input::placeholder{
    color: black;
  }
  .input-box i{
    position: absolute;
    right: 20px;
    top: 30%;
    transform: translate(-50%);
    font-size: 20px;
  
  }
  .wrapper .remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
  }
  .remember-forgot label input{
    accent-color: black;
    margin-right: 3px;
  
  }
  .remember-forgot a{
    color: #fff;
    text-decoration: none;
  
  }
  .remember-forgot a:hover{
    text-decoration: underline;
  }
  .wrapper .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
  }
  .wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
  
  }
  .register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
  }
  .register-link p a:hover{
    text-decoration: underline;
  }
  </style>
</head>
<body>
  <div class="wrapper">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <h1>Admin Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" required name="username">
        <a class="user"><i class='bx bxs-user'></i></a>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required name="password">
        <a class="user"><i class='bx bxs-lock-alt' ></i></a>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="Login">Login</button>
      
    </form>
  </div>
</body>
</html>

<?php
include'db.php';
if(isset($_POST['Login']))
{
 $query="select * from admin where loginid='".$_POST['username']."' and password='".$_POST['password']."'";
 $res=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
      {
            $row=mysqli_fetch_array($res);
            extract($row);
            session_start();
            $_SESSION['adminname']=$row['adminname'];
            $_SESSION['adminid']=$row['adminid'];
            $_SESSION['loginid']=$row['loginid'];
               
            echo "<script>";
            echo "alert('Login Successfully');";
            echo "window.location.href='dashboard/admin_dashboard.php'";
            echo "</script>";
        
        
      }
     else
     {
          echo "<script>";
          echo "alert('Email  or Password is Invalid');";
          //echo "window.location.href='index.php';";
          
          echo "</script>";
    }
}
?>