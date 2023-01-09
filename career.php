<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="layout.css" />
  <link rel="stylesheet" href="media.css" />
  <link rel="stylesheet" href="career.css" />

  <script src="https://kit.fontawesome.com/3587c640f5.js" crossorigin="anonymous"></script>
  <title>perfectTouch/Careers</title>
  <link rel="icon" type="image/x-icon" href="images/Perfect Touch Qatar logo.jpeg">
</head>

<body>
  <header>

    <div class="logo"> <img class="logo1" src="images/perfect touch logo.png" alt="not found"></div>
    <div class="left">
 
     <nav class="nav-links" id="navlinks">
     <div>
         <ul class="list" id="nav-ul">
             <li><a href="index.php" >Home</a></li>
             <li><a href="index.php#aboutus">About Us</a></li>
             <li><a href="index.php#services">Services</a></li>
             <li><a href="eventgallery.html">Events</a></li>
             <li><a href="career.php">Careers</a></li>
         </ul>
     </div>
     <div class="btncontactus">
         
        <a href="index.php#contactus" >Contact Us</a>
                     
                 </div>
     
 </nav>
</div>

 <div class="burger" id="icon">
     <div class="line1"></div>
     <div class="line2"></div>
     <div class="line3"></div>
 </div>

 <script src="javascript.js"></script>
</header>
  <section>
    <div class="career-container">
      <div class="career-info">
        <div class="joinus">
          <h3>JOIN US</h3>
          <p>
            If you’re great at what you do, you might be
            just what we're looking for. Find your next role at
            <span style="color: aquamarine; font-size: 20px">Perfect Touch </span>and be a part of our most exciting chapter yet.
          </p>
        </div>

        <div class="jobselector">
          <div class="joboffers">
            <ul>
              <li class="option option1">
                <i class="fa-solid fa-magnifying-glass-arrow-right"></i>3D Specialist 
              </li>
              <li class="option option2">
                <i class="fa-solid fa-magnifying-glass-arrow-right"></i>Receptionist
              </li>
            </ul>
          </div>

          <div class="jobdescription">
            <div class="officdescription">
              <div>
                <div class="desctitle">
                  <label>3D Specialist Job Discription</label>
                </div>
                <br />
                <div class="descpara">
                  <p>
We are looking for a creative individual to join our team as a 3D artist. The responsibilities of the 3D artist include creating still and moving images using computers, creating 3D models of products, and managing multiple projects while adhering to deadlines.
To be a successful 3D artist, you should be detail-oriented, flexible, and a good team player. Ultimately, a top-notch 3D artist is creative and artistic with a strong working knowledge of color, texture, and light as well as industry-standard software.
                  </p>
                </div>
              </div>
              <div id="applynow" class="applynow">
                <a href="#careerform">Apply Now</a>
              </div>
            </div>
            <div class="researchdescription">
              <div>
                <div class="desctitle">
                  <label>Receptionist job Description</label>
                </div>
                <br />
                <div class="descpara">
                  <p>
                  We are looking for a receptionist to be responsible for greeting clients and visitors to our office. You will be in charge of giving clients directions to various parts of the office, contacting employees regarding visitors, answering phones and taking messages, and sorting and distributing mail.

To be successful in this role, you will need excellent written and verbal communication skills, as well as competency in Microsoft Office applications such as Word and Excel. Prior experience as a receptionist is also helpful.
                  </p>
                </div>
              </div>

              <div id="applynow" class="applynow">
                <a href="#careerform">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="career-form">
        <a name="careerform"></a>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="selection">
            <div class="firstone">
              <select class="title" required="required" name="title">
                <option value="Mr">Mr.</option>
                <option value="Mrs">Mrs.</option>
                <option value="Ms">Ms.</option>
                <option value="Dr">Dr.</option>
              </select>
            </div>
            <div class="secondone">
              <input class="position" name="position" type="text" required="required" placeholder="Enter" />
              <label class="positionlabel">Position</label>
            </div>
          </div>
          <div id="name">
            <div class="first">
              <h2 class="name">Name</h2>
              <input class="firstname" name="firstname" type="text" required="required" placeholder="Enter" /><br />
              <label class="firstlable">First Name</label><br />
            </div>
            <div class="second">
              <input class="lastname" name="lastname" type="text" required="required" placeholder="Enter" /><br />
              <label class="secondlable">Last Name</label>
            </div>
          </div>
          <h2 class="name">Phone</h2>
          <input class="input" type="text" required="required" placeholder="Enter" name="phone" /><br />

          <h2 class="name">Email</h2>
          <input class="input" type="email" required="required" placeholder="Enter" name="email" />

          <h2 class="name">Message</h2>
          <textarea class="massageinput" required="required" placeholder="Enter" name="message"></textarea><br />

          <div class="lastrow">

            <input class="submit" type="submit" name="submit" placeholder="submit" />
          </div>
        </form>

       <?php

        include "config.php";
        if (isset($_POST["submit"])) {
          $title = $_POST['title'];
          $jobposition = $_POST['position'];
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $message = $_POST['message'];


          function test_input($data)
          {
            $data = trim($data);
            $data = Stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }




          if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (
              empty($_POST['position'])
              || empty($_POST['email'])
              || empty($_POST['firstname'])
              || empty($_POST['lastname'])
              || empty($_POST['message'])
              || empty($_POST['phone'])
            ) {
        ?>
              <script>
                window.alert("Please enter all information.");
              </script>

              <?php
            } else {
              $jobposition = test_input($_POST["position"]);
              $email = test_input($_POST["email"]);
              $firstname = test_input($_POST["firstname"]);
              $lastname = test_input($_POST["lastname"]);
              $message = test_input($_POST["message"]);

              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              ?>

                <script>
                  window.alert("Please enter a valide email");
                </script>

                <?php
              } else {
                if (!preg_match("/[a-zA-Z-]$/", $firstname)) {
                ?>

                  <script>
                    window.alert("Please enter a valide first name");
                  </script>

                  <?php
                } else {
                  if (!preg_match("/[a-zA-Z-]$/", $lastname)) {
                  ?>

                    <script>
                      window.alert("Please enter a valide last name");
                    </script>

                    <?php
                  } else {
                    $query = "INSERT into career(title,jobposition,firstname,lastname,phone,email,message)VALUES('$title','$jobposition','$firstname','$lastname','$phone','$email','$message')";
                    if (mysqli_query($con, $query)) {
                    ?>

                      <script>
                        window.alert("Your application was sent successfully. Thank You!");
                      </script>
                    <?php
                    } else {
                    ?>

                      <script>
                        window.alert("Error message not send");
                      </script>

        <?php
                    }
                    mysqli_close($con);
                  }
                }
              }
            }
          }
        }
        ?>

      </div>

      <script src="javascript2.js"></script>
    </div>
    <script src="javascript2.js"></script>
  </section>
  <footer>
    <div class="footer-container">
      <h3>Perfect Touch</h3>
      <p>
        WE SEEK PERFECTION ON EACH LEVEL
      </p>
      <ul class="footer-social">
        <li>
          <a href="https://www.facebook.com/perfecttouchqatar/" target="_blanck"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a href="mailto:info@perfect-touch.qa"><i class="fa fa-envelope"></i></a>
        </li>
        <li>
          <a href="https://www.youtube.com/channel/UCj4p_lrl5e05eTPHSQPYy4A" target="_blanck"><i class="fa fa-youtube"></i></a>
        </li>
        <li>
          <a href="https://www.instagram.com/perfecttouchqatar/?hl=en" target="_blanck"><i class="fa fa-instagram"></i></a>
        </li>
        <li>
          <a href="https://web.whatsapp.com/send?phone=+974 30203028" target="_blanck"><i class="fa fa-whatsapp"></i></a>
        </li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>copyright &copy;2022 perfectTouch.</p>
    </div>
  </footer>
</body>

</html>