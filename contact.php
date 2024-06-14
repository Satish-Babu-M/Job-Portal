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
    .contact-container {
      margin-top: 120px;
      margin-left: 25%;
      margin-right: 25%;
    }
    .contact-container .contact-content {
      background: #ada996;
      background: -webkit-linear-gradient(
        to right,
        #eaeaea,
        #dbdbdb,
        #f2f2f2,
        #ada996
      );
      background: linear-gradient(to right, #eaeaea, #dbdbdb, #f2f2f2, #ada996);
      border-radius: 10px;
      text-align: center;
      vertical-align: middle;
      height: 80px;
    }
    .contact-container .contact-content:hover {
      box-shadow: 0.1px 0.1px 10px black;
    }
    .contact-container h2 {
      text-align: center;
      font-size: 35px;
      padding: 15px 0 5px 0;
    }
    .contact-container .contact-content a {
      font-size: 70px;
      color: #999999;
      text-decoration: none;
      padding: 70px;
      transition: all 0.4s ease;
    }
    .contact-container .contact-content a:hover {
      color: #404040;
      transition: all 0.8s ease;
    }
    .follow-container {
      padding-top: 20px;
      margin-left: 25%;
      margin-right: 25%;
    }
    .follow-container .follow-content {
      background: #ada996;
      background: -webkit-linear-gradient(
        to right,
        #eaeaea,
        #dbdbdb,
        #f2f2f2,
        #ada996
      );
      background: linear-gradient(to right, #eaeaea, #dbdbdb, #f2f2f2, #ada996);
      border-radius: 10px;
      text-align: center;
      vertical-align: middle;
      height: 80px;
    }
    .follow-container .follow-content:hover {
      box-shadow: 0.1px 0.1px 10px black;
    }
    .follow-container h2 {
      text-align: center;
      font-size: 35px;
      padding: 15px 0 5px 0;
    }
    .follow-container .follow-content a {
      font-size: 70px;
      color: #999999;
      text-decoration: none;
      padding: 70px;
      transition: all 0.4s ease;
    }
    .follow-container .follow-content a:hover {
      color: #404040;
      transition: all 0.8s ease;
    }
    .map {
      width: 50%;
      margin-left: 25%;
      margin-right: 25%;
      padding-top: 20px;
      height: 450px;
      border-radius: 10px;
    }
    .map iframe:hover {
      box-shadow: 0.1px 0.1px 10px black;
    }
    .map h2 {
      text-align: center;
      font-size: 35px;
      padding: 15px 0 5px 0;
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

<title>Contact Us</title>
</head>
<body>

<nav>
        <div class="nav_logo">
            <a href="index.php"><img src="logo.jpg" alt="logo" width="150px" ></a>
        </div>
        <ul class="nav_side">
        <li><a href="index.php" class="button1">HOME</a></li>
        <li><a href="contact.php" class="button2">CONTACT</a></li>
           <li><a href="about.php" class="button1">ABOUT</a></li>
           </ul>
    </nav>
    <div class="contact-container">
        <h2>CONTACT US</h2>
        <div class="contact-content">
            <a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-mobile" aria-hidden="true"></i></a>
            <a href="https://outlook.live.com/owa/"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="follow-container">
        <h2>FOLLOW US</h2>
        <div class="follow-content">
            <a href="https://www.facebook.com/" target="_blank" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/signup" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/" target="_blank" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="map">
        <h2>LOCATION</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.651666043832!2d80.16867811433438!3d12.994117217900763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525e1f5da86397%3A0x21092f216ee26e47!2sChennai%20International%20Airport!5e0!3m2!1sen!2sin!4v1629195140369!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" ></iframe>
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