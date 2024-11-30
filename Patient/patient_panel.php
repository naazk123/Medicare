
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Login</title>
  <link rel="stylesheet" href="admin_style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="patient_panel2.php" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="loginid" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="forgetpass.php">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="submit">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="patient_reg.php">Sign up</a></p>
      </div>
    </form>
	
  </div>
</body>
</html>
