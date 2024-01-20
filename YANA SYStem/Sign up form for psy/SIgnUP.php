<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YANA signup</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/mental.png" type="img/x-icon">
</head>
<body>
   
<form action="" method="" enctype="">
    <div class="container">
    <h3>YANA</h3>
    <br>
    <br>
    <br>
    <p>Create account</p>
      
    <table>
        <thead>
            <tr>
                <th><label>First name: </label></th>
                <th> <label>Last name: </label></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="text" name="text" id="text" required></td>
                <td> <input type="text" name="text" id="text" required></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th><label>Email: </label></th>
                <th> <label>Date Of Birth: </label></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="email" name="email" id="email" required></td>
                <td><input type="date" name="date" id="date" required></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th><label>Password:</label></th>
                <th> <label>Confirm password:</label></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="password" name="password" id="password" required></td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
        </tbody>
    </table>
    <div class="wrapper">
  <div class="container-1">
    <img src="img/Frame 45.png">
    <h1>Upload certificate</h1>
    <div class="upload-container">
      <div class="border-container">
        <div class="icons fa-4x">
          <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
          <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
          <i class="fas fa-file-pdf" data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
        </div>
        <!--<input type="file" id="file-upload">-->
        <p>Drag and drop files here, or 
          <a href="#" id="file-browser">browse</a> your computer.</p>
      </div>
    </div>
    <label>Registration: </label>
  </div>
</div>


    <div class="btn">
    <button onclick="document.location='http://localhost:3000/sign%20up%20form%20for%20client/signup.php'" class="btn1">I am a Client/Patient</button>
    <br>
    <br>
    <button class="btn2">Create account</button>
    </div>
</div>
</form>

    <div class="container-1">
    <div class="what">
           <p>"What lies behind you and what lies in front of you, 
            pales in<br> comparison to what lies inside of you."</p>

            <p1>Ralph Waldo Emerson</p1>
           </div>
        <div class="bg">
         <img src="img/BG.png">
        </div>
      
        <img src="img/img.png">
    </div>
    <div class="already">
        <p>Already Have an Account?<a href="sign-in.php">Log In</a></p>
    </div>

    <div class="line1">
    <img src="img/Line 1.png">
</div>
<div class="line2">
    <img src="img/Line 1.png">
</div>

<div class="continue">
    <p>Continue with</p>
</div>

<div class="icon">
    <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ASKXGp3uhf0viNz4owDwpUzdAV_9l0DmGRM689VPWHce44W-W6gxeZeUL5exFtoFVZCqfgHvoMbn&theme=glif&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
<img src="img/Google.png">
</a>
<a href="https://www.facebook.com/">
<img src="img/Facebook.png">
</a>
</div>

<div class="checkbox">
<input type="checkbox"   >
  <label > Remember me</label><br>
  <input type="checkbox" >
  <label>I agree to all the<a href=""> Terms </a> and <a href="">Privacy policy </label><br>
</div>
</body>
</html>