<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/3587c640f5.js" crossorigin="anonymous"></script>

    <title>Perfect Touch</title>
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
        
        <div class="social">
            <div class="button">
                <div class="icon"><a href="https://www.linkedin.com/company/perfect-touch-qatar/?viewAsMember=true" target="_blanck"><i class="fa-brands fa-linkedin-in"></i></a></div>
                <span>LinkedIn</span>
            </div><br>
            
            <div class="button">
                <div class="icon"><a href="https://www.youtube.com/channel/UCj4p_lrl5e05eTPHSQPYy4A" target="_blanck"><i class="fa-brands fa-youtube"></i></a></div>
                <span>youtube</span>
            </div><br>
            <div class="button">
                <div class="icon"><a href="https://www.instagram.com/perfecttouchqatar/?hl=en" target="_blanck"><i class="fa-brands fa-instagram"></i></a></div>
                <span>instagram<span>
            </div><br>
            <div class="button">
                <div class="icon"><a href="https://web.whatsapp.com/send?phone=+974 30203028" target="_blanck"><i class="fa-brands fa-whatsapp"></i></a></div>
                <span>WhatsApp</span>
            </div>
        </div>
        </div>
        <div id="btnScrollToTop">
            <img class="btnScrollToTop" src="images/up-arrow.png">
        </div>
        <script>
            const btnScrollToTop = document.querySelector('.btnScrollToTop');

            btnScrollToTop.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    letf: 0,
                    behavior: "smooth"
                });

            });
        </script>
    </section>
    <video muted  autoplay loop>
        <source src="videos/websit1.mp4">
    </video>
    <section>
        <a name="aboutus"></a>
            <div class="para">
                <div class="para1">

                   
                    
                    <div class="abtuspara">
                    <h1>About us</h1>
                    <p id="text"><span>Perfect Touch</span> is a full service event management firm based in Doha, Qatar that was created by pairing together our passion for business and events. We bring a fresh, unique approach to the event management industry. Our team understands that a properly executed event can be leveraged to support an organization’s strategic vision, incorporated into a company’s marketing plan, or used to build networks and client loyalty.</p>
                    <a href="aboutus.html"><button name="aboutus"><svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                      </svg>
                      <span>More</span></button></a>     
                </div>       
                </div>

            </div>
            
        
        

    </section>
    <section class="events">
        <a name="events"></a>
       
        <div class="event-container">
           
            <div class="swiper" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(event1/Event\ Management\ -\ Tarsheed\ Carnival\ Kids\ Activities\ run.jpg);" data-swiper-parallax="-23%">
                        <div class="slide-content">
                            <div class="parallax-bg">
                                <h1>TARSHEED CARNIVAL 2022</h1>
                                <a href="eventgallery.html#event1" calss="galary-button" target="_blank"><span>Explore Event</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(event2/Event\ Water\ Park\ \ Event\ KAHRAMAA\ Awareness\ Park\ Qatar\ Top\ View.png);" data-swiper-parallax="-23%">
                        <div class="slide-content">
                            <div class="parallax-bg">
                                <h1 >HIGH TECH SMART INSTALLATION - KAHRAMAA AWARENESS PARK</h1>
                                <a href="eventgallery.html#event2" calss="galary-button" target="_blank"><span>Explore Event</span></a>
                            </div>
                        </div>
                    </div>
                    
                 
                    <div class="swiper-slide" style="background-image: url(event5/slide.png);">
                        <div class="slide-content">
                            <div class="parallax-bg">
                                <h1>Tarsheed Carnival 2022 </h1>
                                <a href="eventgallery.html#event5" calss="galary-button" target="_blank"><span>Explore Event</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(event10/slide.jpg);">
                        <div class="slide-content">
                            <div class="parallax-bg">
                                <h1>HUAWEI</h1>
                                <a href="eventgallery.html#event10" calss="galary-button" target="_blank"><span>Explore Event</span></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="javascript3.js"></script>

    </section>
    <a name="services"></a>
   <!--<section id="cards">
        

           <h1>OUR SERVICES</h1>
            <div class="card-container">
                
                <div class="card">
                    <div class="card_inner">
                        <div class="face face1 ">
                            <h2>Brand Activation</h2>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <div class="card_header">
                                    <img src="images/Brand Activation Services in Qatar .png">
                                    <h3>Brand Activation</h3>
                                </div>
                                <div class="card_body">
                                    <div class="card_para">
                                        <p>We expertise in new technologies and trends, to develop integrated activation strategies and then implement creative and dynamic customer engagements.</p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card_inner">
                        <div class="face face1">
                            <h2>3D Production</h2>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <div class="card_header">
                                    <img src="images/3D production Services in Qatar.png">
                                    <h3>3D Production</h3>
                                </div>
                                <div class="card_body">
                                    <div class="card_para">
                                        <p>We develop, 2D & 3D render, designs, and produce creative high quality 3D production for different types of projcts.</p>
                                    </div>
                                    <div class="card_more">
                                        <a href="3dproduction.html">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card_inner">
                        <div class="face face1">
                            <h2>Corporate & Social Events</h2>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <div class="card_header">
                                    <img src="images/corporate and social events services in qatar.png">
                                    <h3 style="font-size: 18px;">Corporate / Social Events</h3>
                                </div>
                                <div class="card_body">
                                    <div class="card_para">
                                        <p>We Handle the overall logistics of the event, working with staff, and conducting project management of the event as a whole.</p>
                                    </div>
                                    <div class="card_more">
                                        <a href="eventgallery.html">More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card_inner">
                        <div class="face face1">
                            <h2>Gift Items</h2>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <div class="card_header">
                                    <img src="images/Luxuary Gifts Items in Qatar .png">
                                    <h3>Gift Items</h3>
                                </div>
                                <div class="card_body">
                                    <div class="card_body">
                                        <div class="card_para">
                                            <p>We provide Luxury corporate gifts that create the touch point for impressing or showing that supreme level of service our to clients "Concerts, Conferences, Summits".</p>
                                        </div>
                                        <div class="card_more">
                                            <a href="https://html5.dcatalog.com/?docid=3188c1f6-9540-4010-9cba-97ef926375cb&page=118">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            
    </section>
   --> 
    <section id="service-icons">
        <h1>OUR SERVICES</h1>
        <div class="is-container">
            <div class="is-wrap">
              <div class="is"><a href="brand.html"><div class="icon"><img src="images/brand-positioning.png"></div>
                    
                    <div class="service-name"><label>Brand Activation</label></div>
                </a></div>
                <div class="is"><a href="3dproduction.html">
                    <div class="icon"><img src="images/ar.png"></div>
                    <div class="service-name"><label>2D/3D Production</label></div>
                </a></div>
                <div class="is"><a href="eventgallery.html">
                    <div class="icon"><img src="images/red-carpet.png"></div>
                    <div class="service-name"><label>Corporate and Social Events</label></div>
                </a></div>
                <div class="is"><a href="https://html5.dcatalog.com/?docid=3188c1f6-9540-4010-9cba-97ef926375cb&page=118">
                    <div class="icon"><img src="images/gift-box-with-a-bow.png"></div>
                    <div class="service-name"><label>Gift Items</label></div>
                </a></div>
            </div>
        </div>
    </section>
    <div class="clients">
        <h1>OUR CLIENTS</h1>
        <img src="images/Untitled-1ف.jpg" alt="not found" >
    </div>
    <section class="contact-container">
        <a name="contactus"></a>
        <div class="content">

            <h2>Contact Us</h2>
            <p></p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=25.319258795759%2C51.527963992256" target="_blanck" name="location"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></a>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Lusail Marina Twin Tower A, level 23<br>Doha,Qatar</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+974 3020 3028</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <a href="mailto: info@perfect-touch.qa"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>info@perfect-touch.qa</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" required="required" name="name">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" required="required" name="email">
                        <span>Email</span></span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="message"></textarea>
                        <span>Type your Message... </span></span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send" class="btnsubmit" name="submit">

                    </div>
                </form>
                
            </div>
        </div></a>
    </section>
    <footer>
        <div class="footer-container">
            <h2>Perfect Touch</h2>
            <p>WE SEEK PERFECTION ON EACH LEVEL </p>
            <ul class="footer-social">
                <li><a href="https://www.facebook.com/perfecttouchqatar/" target="_blanck"><i class="fa fa-facebook"></i></a></li>
                <li><a href="mailto:info@perfect-touch.qa"><i class="fa fa-envelope"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCj4p_lrl5e05eTPHSQPYy4A" target="_blanck"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/perfecttouchqatar/?hl=en" target="_blanck"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://web.whatsapp.com/send?phone=+974 30203028" target="_blanck"><i class="fa fa-whatsapp"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 perfectTouch.</p>
        </div>
    </footer>
</body> 
<?php require "config.php";
                if (isset($_POST["submit"])) {
                    $fullname = $_POST['name'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                }

                function test_input($data)
                {
                    $data = trim($data);
                    $data = Stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (
                        empty($_POST['name'])
                        || empty($_POST['email'])
                        || empty($_POST['message'])
                    ) {
                ?>
                        <script>
                            window.alert("Please enter all information.");
                        </script>

                        <?php
                    } else {
                        $fullname = test_input($_POST["name"]);
                        $email = test_input($_POST["email"]);
                        $message = test_input($_POST["message"]);
                        if (!preg_match("/[a-zA-Z-]$/", $fullname)) {
                        ?>

                            <script>
                                window.alert("Please enter a valide name");
                            </script>

                            <?php
                        } else {
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            ?>
                                <script>
                                    window.alert("Please enter a valide email");
                                </script>

                                <?php
                            } else {
                                $query = "INSERT INTO contactus(name,email,message) VALUES('$fullname','$email','$message')";
                                if (mysqli_query($con, $query)) {
                                ?>
                                    <script>
                                        window.alert("Your message was sent successfully. ");
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
               ?> 
            
</html>