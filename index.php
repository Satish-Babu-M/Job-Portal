<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c572f23746.js" crossorigin="anonymous"></script>
<style>
    body {
      margin: 0;
      padding: 0;
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
      padding-top: 2px;
      justify-content: space-around;
      list-style-type: none;
    }
    .nav_side a {
      text-decoration: none;
      font-weight: bold;
      font-size: 18px;
      transition: all 0.8s ease;
    }
    .center {
      display: flex;
      width: 65%;
      margin:auto;
      margin-top:35px;
      justify-content: space-around;
      list-style-type: none;
    }
    .center a {
      text-decoration: none;
      font-weight: bold;
      font-size: 18px;
      transition: all 0.8s ease;
    }
    .button1 {
      background-color: white;
      width: 120px;
      padding: 10px;
      border-radius: 10px;
      border:1px solid #000066;
      text-align: center;
      transition: 0.4s ease;
    }
    .button1 a {
      text-decoration: none;
      font-weight: bold;
      font-size: 20px;
      color:#000066 ;
    }
    .button1:hover {
      transition: 0.2s ease;
      background-color: #000066;
      color : white ;
    }
    .button2 {
      background-color: #000066;
      width: 120px;
      padding: 10px;
      border-radius: 10px;
      text-align: center;
      transition: 0.4s ease;
      color : white ;
    }
    .button2 a {
      text-decoration: none;
      font-weight: bold;
      font-size: 20px;
      color : white ;
    }
    .button2:hover {
      transition: 0.2s ease;
      background-color: white;
      border:1px solid #000066;
      color : #000066 ;
    }
    .btn {
      background-color: white;
      width: 120px;
      padding: 10px;
      border-radius: 10px;
      border:1px solid #000066;
      margin-left: 45%;
      margin-right: 45%;
      margin-top: 30px;
      text-align: center;
      transition: 0.4s ease;
    }
    .btn a {
      text-decoration: none;
      font-weight: bold;
      font-size: 20px;
      color:#000066 ;
    }
    .btn:hover {
      transition: 0.2s ease;
      background-color: #000066;
    }
    .btn:hover a {
        color : white ;
    }
    .highlights {
      width: 100%;
      height: 250px;
      margin-top: 50px;
      background-color: #f2f3f4;
    }
    .highlights h2 {
      text-align: center;
      font-size: 35px;
      padding: 20px 0 10px 0;
      opacity: 0.8;
    }
    .highlights img {
      margin: 10px;
    }
    .disp {
        margin-top: 50px;
      width: 100%;
      height: 180px;
      background: #ada996;
      background: -webkit-linear-gradient(
        to right,
        #eaeaea,
        #dbdbdb,
        #f2f2f2,
        #ada996
      );
      background: linear-gradient(to right, #eaeaea, #dbdbdb, #f2f2f2, #ada996);
      display: flex;
    }
    .disp .disp1 {
      width: 350px;
      height: 100px;
      border: 1px solid black;
      text-align: center;
      border-radius: 10px;
      margin: 40px;
    }
    .disp .disp1:hover {
      box-shadow: 0.1px 0.1px 10px black;
    }
    .disp .disp1 h2 {
      font-size: 35px;
    }
    .disp .disp2 {
      width: 350px;
      height: 100px;
      border: 1px solid black;
      text-align: center;
      border-radius: 10px;
      margin: 40px;
    }
    .disp .disp2:hover {
      box-shadow: 0.1px 0.1px 10px black;
    }
    .disp .disp2 h2 {
      font-size: 35px;
    }
    .disp .disp3 {
      width: 350px;
      height: 100px;
      border: 1px solid black;
      text-align: center;
      border-radius: 10px;
      margin: 40px;
    }
    .disp .disp3:hover {
      box-shadow: 0.1px 0.1px 10px black;
    }
    .disp .disp3 h2 {
      font-size: 35px;
    }
    footer {
      width: 100%;
      height: 250px;
      margin-top: 25px;
      background-color: #424949;
    }
    footer .links {
      display: flex;
    }
    footer .links .pages {
      width: 33.33%;
      text-align: center;
    }
    footer .links .pages h3 {
      color: #b3b6b7;
      font-size: 25px;
    }
    footer .links .pages a {
      color: #b3b6b7;
      padding: 5px;
      font-size: 20px;
      transition: all 0.4s ease;
      text-decoration: none;
    }
    footer .links .pages a:hover {
      color: #ff5733;
      transition: all 0.8s ease;
      text-decoration: none;
    }
    footer .links .documents {
      width: 33.33%;
      text-align: center;
    }
    footer .links .documents h3 {
      color: #b3b6b7;
      font-size: 25px;
    }
    footer .links .documents a {
      color: #b3b6b7;
      padding: 5px;
      font-size: 20px;
      transition: all 0.4s ease;
      text-decoration: none;
    }
    footer .links .documents a:hover {
      color: #ff5733;
      transition: all 0.8s ease;
      text-decoration: none;
    }
    footer .links .social-media {
      width: 33.33%;
      text-align: center;
    }
    footer .links .social-media h3 {
      color: #b3b6b7;
      font-size: 25px;
    }
    footer p {
      color: #b3b6b7;
      text-align: center;
      font-size: 20px;
    }
    footer .social-media a {
      font-size: 30px;
      color: #b3b6b7;
      text-decoration: none;
      padding: 20px;
      transition: all 0.4s ease;
    }
    footer .social-media a:hover {
      color: #ff5733;
      transition: all 0.8s ease;
    }
    footer .foot {
      text-align: right;
      font-size: 17px;
      padding-right: 10%;
      padding-bottom: 5px;
    }

</style>
    <title>TECH JOBS</title>
</head>
<body>
<nav>
        <div class="nav_logo">
            <a href="index.php"><img src="logo.jpg" alt="logo" width="150px" ></a>
        </div>
        <ul class="nav_side">
        <li><a href="index.php" class="button2">HOME</a></li>
        <li><a href="contact.php" class="button1">CONTACT</a></li>
           <li><a href="about.php" class="button1">ABOUT</a></li>
           </ul>
    </nav>
<div >
<img src="career3.jpg" alt="Banner" width="100%" height="500px" style="margin-top:70px;">
</div> 
<ul class="center">
           <li><a href="career.php" class="button1">APPLY FOR JOB</a></li>
           <li><a href="login.php" class="button2">POST JOB</a></li>
    </ul>

     <div class="highlights">
        <h2>OUR CLIENTS</h2>
        <img src="cts.jpeg" alt="company-1" width="200px">
        <img src="tcs.jpeg" alt="company-2" width="200px">
        <img src="wipro.jpeg" alt="company-3" width="200px">
        <img src="byjus.jpeg" alt="company-4" width="200px">
        <img src="lti.jpeg" alt="company-5" width="200px">
        <img src="virtusa.jpeg" alt="company-6" width="200px">
    </div>

    <div class="disp">
    <h2 style="  text-align: center; font-size: 35px; padding: 20px 0 10px 0; opacity: 0.8;">STEPS FOR SUCCESS</h2><br>
        <div class="disp1">
            <h2>01. APPLY</h2>
        </div>
        <div class="disp2">
            <h2>02. GET JOB</h2>
        </div>
        <div class="disp3">
            <h2>03. EARN BIG</h2>
        </div>
    </div>
    <div class="btn">
        <a href="career.php">Apply Now</a> 
     </div> 

     <footer>
        <div class="links">
            <div class="pages">
                <h3>PAGES</h3>
                <a href="Contact.php">CONTACT</a><br>
                <a href="about.php">ABOUT</a><br>
            </div>
            <div class="documents">
                <h3>DOCUMENTS</h3>
                <a href="#" >Terms Of Use</a><br>
                <a href="#" >Privacy Policy</a><br>
            </div>
            <div class="social-media">
                <h3>Social Media</h3>
                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/signup" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div> 
        </div>
        <hr style="margin-left: 10%; margin-right: 10%; color:white;">
        <p>&copy; Copyright 2021 . All rights reserved.</p>
        <p class="foot">+91 9876543215 | techjobs@protonmail.in</p>
    </footer>

</body>
</html>