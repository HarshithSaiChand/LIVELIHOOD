<?php
session_start();


?>




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
      <?php
       
      
      ?>
      <h1>Sign Up</h1>
      <form method="post" action="core1.php" required>
        <div class="txt_field">
          <input type="text" name='user'>
          <span></span>
          <label>Username</label>
        </div>

        <div class="txt_field">
          <input type="text" name='Mail' required>
          <span></span>
          <label>Email</label>
        </div>

        <div class="txt_field">
        <label style="color: #2691d9;">Gender</label> <br><br>
        <select name="g" id="g">
          
        <option value="Male">Male</option>
        <option value="Female">Female</option>

        </select>
        </div>
       
        <div class="txt_field">
        <label style="color: #2691d9;">Blood Group</label> <br><br>
        <select name="BG" id="BG">
          
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        </select>
        </div>

        <div class="txt_field">
          <input type="password" name='pa' required>
          <span></span>
          <label>Password</label>
        </div>

        <div class="txt_field">
          <input type="Password" name='cp' required>
          <span></span>
          <?php
       
      
      ?>
          <label>Confirm Password</label>
        </div>

        

        <input type="submit" name="Inp"   value="Signup">
        
        <div class="signup_link">
          Already Signed Up? <a href="1.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
