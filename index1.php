<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <!-- <div id="nav">
        <h1>TT</h1>
        <h4>TRAVEL</h4>
        <h4>FEEL LOVE</h4>
        <h4>DEVOTION</h4>
        <h4>REFUEL</h4>
        <h4>Joy</h4>
    </div> -->

    <header class="navbar" id="home">
        <nav class="nav">
            <div class="logo"><img src="Assests2/logo.png"></div>
            <div class="portfolio">Tech Ti<span>tans.</span></div>
            <div class="navlink"><a href="#home" class="togelbtn">Home</a>
                <a href="#about" class="togelbtn">About</a>
                <a href="#travel" class="togelbtn">Travel</a>
                <a href="#Gellary" class="togelbtn">Gallery</a>
                <a href="#contact" class="togelbtn">Contact</a></div>
            <!-- <div class="togelbtn"><i class="fa fa-bars"></i></div> -->
        </nav>
    </header>
    <div id="cursor"></div>
    <div id="cursor-blur"></div>
    <video autoplay loop muted src="./Assests2/video.mp4"></video>
    <div id="main">
        <div id="page1">
            <h1>EAT. DRINK. PLAY.</h1>
            <h2>WELCOME TO TT SERVICES</h2>
            <p>FEELING LOW!! COME JOIN US FOR OUR NEXT TOUR TO RECHARGE.</p>
        </div>
        <div id="page2">
            <div id="scroller">
                <div id="scroller-in">
                    <h4>TRAVEL</h4>
                    <h4>FEEL LOVE</h4>
                    <h4>DEVOTION</h4>
                    <h4>REFUEL</h4>
                    <h4>Joy</h4>
                </div>

                <div id="scroller-in">
                    <h4>TRAVEL</h4>
                    <h4>FEEL LOVE</h4>
                    <h4>DEVOTION</h4>
                    <h4>REFUEL</h4>
                    <h4>Joy</h4>
                </div>

            </div>
           
            <div class="about-us" id="about">
                <img src="./Assests2/krishna1.jpeg" alt="">
                <div id="about-us-in">
                    <h3>ABOUT US</h3>
                    <p>Welcome to Tech Titans Travel, your gateway to an unbroken 15-year record of unforgettable trips to Mathura & Vrindavan, offered once every week. As our honored guest, we guarantee unparalleled service—where we become your trusted travel companion, ensuring your journey to heaven is seamless and memorable.

                    </p>

                </div>
                <img src="./Assests2/krishna2.jpeg" alt="right">
            </div>
            <div id="cards-container">
                <div class="card" id="card1">
                    <div class="overlay">
                        <h4>Prem Mandir</h4>
                        <p>Prem Mandir in Vrindavan is like a dazzling love story carved in marble, showcasing Radha and Krishna's love with stunning beauty and charm."</p>

                    </div>
                </div>
                <div class="card" id="card2">
                    <div class="overlay">
                        <h4>Keerti Mandir</h4>
                        <p>Keerti Mandir in Vrindavan is a cozy haven echoing with the teachings of Sri Chaitanya Mahaprabhu, where you can soak up the spirit of devotion and find inner peace in the midst of life's hustle.</p>

                    </div>
                </div>
                <div class="card" id="card3">
                    <div class="overlay">
                        <h4>Pramanand Ji Maharaj</h4>
                        <p>Pramanand Ji Maharaj, a beloved spiritual guide in Vrindavan, radiates wisdom and compassion, offering solace and inspiration to all seekers on their journey of self-discovery.</p>

                    </div>
                </div>
            </div>
        
            <div id="green-div">
                <img src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/dots-side.svg" alt="">
                <h4>JOIN US TO FEEL EXISTANCE & LOVE OF  SHREE KRISHNA.</h4>
                <img src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/dots-side.svg" alt="">

            </div>
        </div>
        <div id="page3">
            <p>Discover the enchanting realms of Mathura and Vrindavan with us, where every corner brims with stories of love and faith. Join us as we lead you through the vibrant streets, ancient temples, and timeless traditions, creating memories that resonate with the soul.</p>
            <img id="colon1" src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/quote-left.svg"
                alt="">
            <img id="colon2" src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/quote-right.svg"
                alt="">
        </div>
        <section id="travel">
        <div id="page4">
            <h1>WHAT ARE YOU WAITING FOR?</h1>
            <div class="elem">
                <h2>Available Vehicle</h2>
                <img src="https://i.ytimg.com/vi/ByncK7bTPGQ/maxresdefault.jpg"
                    alt="">
            </div>

            <div class="elem">

                <h2>TT Travels</h2>
                <img src="https://s3-media2.fl.yelpcdn.com/bphoto/bvmGW_SY5TNCXN68RRM1SA/o.jpg"
                    alt="">
            </div>

            <div class="elem">

                <h2>Service Provoider</h2>
                <img src="https://i.ytimg.com/vi/xhJ3eZwHl4A/maxresdefault.jpg" alt="">
            </div>
        </div>
    </section>

        <div id="footer">
            <h1>Team Members</h1>
            <div class="images">
              <div> <img src="./Assests2/me.jpeg" alt="" class="img img1"><h3>Nishant Gupta</h3></div>
                <div><img src="./Assests2/Pranshu.jpeg" alt="" class="img img2"><h3>Pranshu Mishra</h3></div>
                <div><img src="./Assests2/sonu.jpeg" alt="" class="img img3"><h3>Son Pratap</h3></div>
              <div>  <img src="./Assests2/ritesh.jpeg" alt="" class="img img4"><h3>Ritesh Singh</h3></div>        
            </div>
        </div>
       
    </div>

    <!-- galleery section  -->
<section>
    <div class="slider" id="Gellary">
        <div class="slides">
            <div class="slide"><img src="Assests2/keerti.jpeg" alt="Image 1"></div>
            <div class="slide"><img src="Assests2/keerti.jpeg" alt="Image 2"></div>
            <div class="slide"><img src="Assests2/krishna1.jpeg" alt="Image 3"></div>
            <!-- Add more slides as needed -->
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>
</section>

   <!-- contect form  -->

   <section class="contact" id="contact">
    <div class="contact">
        <h2>Contact Us</h2>
        <p>Contect me, you can send the massege. I will must reply your massege. Please share my website.<span></span></p>
    </div>
    <div class="containerinfo">
        <div class="contactinfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address.</h3>
                    <P>Kanpur,
                        <br>UttarPradesh</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <div class="text">
                    <h3>Phone.</h3><br>
                    <p>8303255391</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email.</h3><br>
                    <p>sonpratap244@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form method="POST" action="index.php">
                <h2>Send Message</h2>
                <div class="inputbox"><input type="text" name="name" required="required"><span>Full Name</span></div>
                <div class="inputbox"><input type="text" name="email" required="required"><span>Email</span></div>
                <div class="inputbox"><input type="textarea" name="message" required="required"><span>Type your Message...</span></div>
                <div class="inputbox"><input type="submit" name="submit" value="Send"></div>
            </form>
        </div>
    </div>
</section>

<!-- footer code  -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
        integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js" defer></script>
</body>

</html>

