<?php
if(isset($_POST['contact_btn'])){
   $name=$_POST['firstname'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $msg=$_POST['message'];
   $to="parmardevanshu07@gmail.com";
   $header="from:email";
   if(mail($to,$subject,$msg,$header)){
     $msg1=" Message submitted successfully";
   }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>portfolio</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <div class="uper">
  <body class="body">
    <div class="topnav">
      <div class="name">
        <a href="">DEVANSHU PARMAR</a>
      </div>
      <div class="resume"><a href="Devanshu's Resume (2).pdf">Resume</a></div>
    </div>

    <div class="wrapper">
      <div class="maininfo">
        <p class="my-name-is"><span>-</span> My name is</p>
        <p class="name-dev">Devanshu Parmar</p>
        <p class="info-1">I build web for people,</p>

        <p class="info-2">
          I am pursuing computer engineering.Currently, i am focus on learning
          new technologies and always curious to learn something new this.
        </p>
        <br />
      </div>
      <div class="imgf">
        <img src="github.png" alt="image" />
      </div>
    </div>
    <br /><br />
    <div class="tech">
      <p>Known Things</p>
      <br />
      <div class="img"><img src="dev logo.png" alt="image" /></div>
    </div>
    <div class="edu">
      <u>Education</u>
      <b><h4>Bachelor's of Engineering in Computer Engineering</h4></b>
      <h5>shree swaminarayan institute of technology<br />2020-2024</h5>
    </div>
  </div>
    <div class="footer">
    
      <div class="container">
        <div class="row">
          <div class="column">
              <form method=POST>
                <strong>
                  <?php if(!empty($msg1)){
                     echo $msg1;
                  }?>
                
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
              <label for="ename">Email</label>
              <input type="email" id="email" name="email" placeholder="Your email..">
              <label for="subject">subject</label>
              <input type="text" id="subject" name="subject" placeholder="Write subject..">
              <label for="message">message</label>
              <textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>
             
              <button name="contact_btn">submit</button>
            </form>
          </div>
        </div>
      </div>

      <div class="images">
        <div class="photo">
          <a href="https://www.linkedin.com/in/devanshu-parmar/"
            ><img src="5.png" alt=""
          /></a>
        </div>

        <div class="photo">
          <a href="https://github.com/Devanshu046"
            ><img src="github.png " alt=""
          /></a>
        </div>

        <div class="photo">
          <a href="https://www.instagram.com/devanshuu_4/"
            ><img src="4.png" alt=""
          /></a>
        </div>
      </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="arrow-removebg-preview.png" alt="" height="15px" width="20px"></button>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="js1.js"></script>
  </body>
</html>
