<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blood Request Form | CodingNepal</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>


    <div class="center">
      <h1>Blood Request Form</h1>
      <form method="post" action="core2.php">
        <div class="txt_field">
          <input type="text" name='name' required>
          <span></span>
          <label>Patient Name*</label>
        </div>
        

        

        <br><label for="BG"><font color="#2691d9">Blood Group:</font></label>

          <select id="BG" name="BG" required>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          </select><hr>
        <div class="txt_field">
          <input type="number"name='Mob'required >
          <span></span>
          <label>Mobile no*</label>
        </div>
        <div class="txt_field">
          <input type="text"name='Cname'required >
          <span></span>
          <label>City/Village name*</label>
        </div>
        <input type="submit" onclick="" value="Request">
        
      </form>
    </div>



  </body>
</html>
    