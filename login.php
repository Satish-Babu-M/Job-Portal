<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
          body{
            background-image:url("bg2.jpg");
            background-repeat:no-repeat;
            background-size:cover;
            
          }
          form{
            width:550px;
            margin-top:180px;
            margin-left:425px;
            padding: 20px;
            background-color:white;
            opacity:0.9;
            border-radius:15px;
          }
          nav {
      width: 100%;
      height: 70px;
      background-color: white;
      z-index: 1;
      box-shadow: 0px 1px 64px 0px rgba(0, 0, 0, 0.5);
      position: fixed;
      display: flex;
      top: 0;
      justify-content: space-around;
      align-items: center;
    }

    .nav_side {
      display: flex;
      width: 35%;
      padding-top: 15px;
      justify-content: space-around;
      list-style-type: none;
    }
    .nav_side a {
      text-decoration: none;
      font-weight: bold;
      font-size: 18px;
      transition: all 0.8s ease;
    }
    .button1 {
      background-color: white;
      width: 120px;
      padding: 8px;
      border-radius: 10px;
      border:1px solid #000066;
      text-align: center;
      transition: 0.4s ease;
    }
    .button1  {
      text-decoration: none;
      font-weight: bold;
      font-size: 20px;
      color: #000066;
    }
    .button1:hover {
      transition: 0.2s ease;
      background-color: #000066;
      color : white ;
    }
</style>
    <title>Login</title>
</head>
<body>
<nav>
        <div class="nav_logo">
            <a href="index.php"><img src="logo.jpg" alt="logo" width="150px" ></a>
        </div>
        <ul class="nav_side">
        <li><a href="index.php" class="button1">HOME</a></li>
        <li><a href="contact.php" class="button1">CONTACT</a></li>
           <li><a href="about.php" class="button1">ABOUT</a></li>
           </ul>
    </nav>
  <form method="post">
  <h3 style="text-align:center;">Login Form</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Login</button>
  <br>
  <p style="text-align:center;"> New User / Register <a href="signup.php">SignUp</a></p>
</form>
</body>
</html>