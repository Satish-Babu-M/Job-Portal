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
      .about-container {
        margin-top: 100px;
        margin-left: 5%;
        margin-right: 5%;
      }
      .about-container .about-content {
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
      }
      .about-container .about-content:hover {
        box-shadow: 0.1px 0.1px 10px black;
      }
      .about-container h2 {
        text-align: center;
        font-size: 35px;
        padding: 15px 0 5px 0;
      }
      .about-container .about-content p {
        text-align: center;
        font-size: 20px;
        padding: 30px;
      }
      .highlights {
        width: 100%;
        height: 250px;
        margin-top:60px;
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
      footer {
        width: 100%;
        height: 250px;
        margin-top: 60px;
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

<title>About Us</title>
</head>
<body>

<nav>
        <div class="nav_logo">
            <a href="index.php"><img src="logo.jpg" alt="logo" width="150px" ></a>
        </div>
        <ul class="nav_side">
        <li><a href="index.php" class="button1">HOME</a></li>
           <li><a href="contact.php" class="button1">CONTACT</a></li>
           <li><a href="about.php" class="button2">ABOUT</a></li>
           </ul>
    </nav>

    <div class="about-container">
        <h2>ABOUT US</h2>
        <div class="about-content">
            <P>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. 
                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</P>
        </div>
    </div>

    <div class="highlights">
        <h2>OUR CLIENTS</h2>
        <img src="cts.jpeg" alt="company-1" width="200px">
        <img src="tcs.jpeg" alt="company-2" width="200px">
        <img src="wipro.jpeg" alt="company-3" width="200px">
        <img src="byjus.jpeg" alt="company-4" width="200px">
        <img src="lti.jpeg" alt="company-5" width="200px">
        <img src="virtusa.jpeg" alt="company-6" width="200px">
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