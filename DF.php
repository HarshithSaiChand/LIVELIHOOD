<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Donor Form | LIVELIHOOD</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>


    <div class="center">
      <h1>Donor Form</h1>
      <form method="post" action="core.php">
       
      <div class="txt_field">
          <input type="text"name='name' required>
          <span></span>
          <label>Donor Name*</label>
        </div>

        

        <br><label for="BG"><font color="#1976D2">Blood Group:</font></label>

          <select id="BG" name="BG">
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          </select><hr><br>
        <div class="txt_field">
          <input type="number"name='Mob' required >
          <span></span>
          <label>Mobile no*</label>
        </div>
        <div class="txt_field">
          <input type="text"name='Cname' required>
          <span></span>
          <label>City/village name*</label>
        </div>

        
        


       
        
        <input type="submit" onclick="" value="submit">
        
      </form>
    </div>



  </body>
</html>
    