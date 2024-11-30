<?php
session_start();

include("dbconnection.php");

if(isset($_POST['submit']))
{
    $sql = "SELECT * FROM patient WHERE loginid='$_POST[login_id]' AND status='Active'";
    $qsql = mysqli_query($con,$sql);
    if(mysqli_num_rows($qsql) >= 1)
    {
        $rslogin = mysqli_fetch_array($qsql);
        
        $msg = "Kindly enter Login ID: $rslogin[loginid] and Password is : $rslogin[password] to login Healthcare system..";
        ?>
        <iframe style="visibility:hidden" src="http://login.smsgatewayhub.com/api/mt/SendSMS?APIKey=qyQgcDu3EEiw1VfItgv1tA&senderid=WEBSMS&channel=1&DCS=0&flashsms=0&number=<?php echo $rslogin['mobileno']; ?>&text=<?php echo $msg; ?>&route=1"></iframe>
        <?php
        echo "<script>alert('Login details sent to your registered mobile number...'); </script>";
        echo "<script>window.location='patient_panel.php';</script>";
    }
    else
    {
        echo "<script>alert('Invalid login id entered..'); </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('https://img.freepik.com/free-photo/medicine-blue-background-flat-lay_23-2149341573.jpg');
    background-size: cover;
    background-position: center;
    color: #fff;
}

.container {
    width: 400px;
    height: 300px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: transparent;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    
    
}
.container h2{
  font-size: 36px;
  text-align: center;
}

.input-box input{
    width: 80%;
    height: 15px;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
  }
  .input-box input::placeholder{
    color: #fff;
  }
  
  /* .input-box label{
    font-size:20px;
    color: #fff;
    
  } */
.container button{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 20px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form action="forgetpass.php" method="post">
          <div class="input-box">
            <!-- <label for="login_id">Login ID </label> -->
            <input type="text" id="login_id" name="login_id" required placeholder="Login ID"><br><br>

          </div>
          <button type="submit" name="submit">Reset Password</button>
        </form>
    </div>

    
    
</body>
</html>
