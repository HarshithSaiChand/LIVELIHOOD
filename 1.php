<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form | CodingNepal</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="2.php"  >
        <div class="txt_field">
          <input type="text" name='Mail' required>
          <span></span>
          <label>Mail</label>
        </div>
        <div class="txt_field">
          <input type="password" name='pass' required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
       
        <input type="submit" onclick="" value="Login">
        
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
