<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        session_start();

        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
            echo $_SESSION['loggedIn'];
            echo $_SESSION['userID'];
            echo $_SESSION['userEmail'];
        }
        // include("schedule.php");

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Master.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Healthy Hawks</title>
</head>
<body>
        <div class="navigation-container">
            <div>
                <img src="images/logohh-smallcopy.png" alt="#">
            </div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="site-traverse">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="profile2.php">Instructors</a>
                    </li>
                    <li>
                        <a href="exercises.php">Exercises</a>
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- welcome message -->
        <div class="main-cta">
            <h1>Welcome</h1>
            <h2>Experience a transformational fitness journey with our instructors!</h2>
        </div>
        <div class="intro">
            <div class="intro-text">
                <p>Introducing Campbell Fitness
                    <br>
                    <span>Personal Training Resources</span>
                </p>
            </div>
            <div class="intro-video">
                <iframe
                    src="https://www.youtube.com/embed/EngW7tLk6R8?autoplay=1&loop=1"
                    frameborder="0"
                    allowfullscreen
                ></iframe>
            </div>

            
        </div>
        <!-- could add functionality later & -->
        <div class="costs">
            <div class="costs-info-wrapper">
                <h2>Pricing</h2>
                <p>Each client must have a valid Hartwick College student ID (WICKit Card) or a valid Hartwick College Fitness membership card.</p>
                <p>Clients must pay for all sessions before the process begins.</p>
                <p>Clients may only pay in WICKit dollars.</p>
                <hr>
            </div>
            <div class="prices-section">
                <div class="student">
                    <h3>Students</h3>
                    <div class="price-option">
                        <h4>Individual (1)</h4>
                        <h4>$10</h4>
                    </div>
                    <div class="price-option">
                        <h4>Individual (3)</h4>
                        <h4>$25</h4>
                    </div>
                    <div class="price-option">
                        <h4>Buddy (1)</h4>
                        <h4>$15</h4>
                    </div>
                </div>
                <div class="faculty">
                    <h3>Faculty & Staff</h3>
                    <div class="price-option">
                        <h4>Individual (1)</h4>
                        <h4>$20</h4>
                    </div>
                    <div class="price-option">
                        <h4>Individual (3)</h4>
                        <h4>$50</h4>
                    </div>
                    <div class="price-option">
                        <h4>Buddy (1)</h4>
                        <h4>$30</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="instructors" id="instructors">
            <h3>Meet The Campbell
                <br>Fitness Team
            </h3>
            <p class="instructor-text">Faculty and Students that want to see you succeed!</p>
            <div class="team-section">
                <div class="team-member">
                    <div class="image-container">
                        <img src="images/spongebob.jpeg" alt="Team member 1">
                    </div>
                    <h4>Head Trainer</h4>
                    <h5>Heidi Tanner</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur.</p>
                </div>
                <div class="team-member">
                    <div class="image-container">
                        <img src="images/Jared.jpg" alt="Team member 1">
                    </div>
                    <h4>Trainer</h4>
                    <h5>Jarad Jackson</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur.</p>
                </div>
                <div class="team-member">
                    <div class="image-container">
                        <img src="images/Jason 2023.jpg" alt="Team member 1">
                    </div>
                    <h4>Trainer</h4>
                    <h5>Jason Uhlinger</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur.</p>
                </div>
                <div class="team-member">
                    <div class="image-container">
                        <img src="images/Molly 23.jpg" alt="Team member 1">
                    </div>
                    <h4>Trainer</h4>
                    <h5>Molly O'Rieilly</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur.</p>
                </div>
                <div class="team-member">
                    <div class="image-container">
                        <img src="images/9C1D828C-1BC4-455B-BFCF-A9D7CD9B75E7.jpg" alt="Team member 1">
                    </div>
                    <h4>Trainer</h4>
                    <h5>Trevor Brink</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur.</p>
                </div>
                <div class="team-member">
                    <div class="image-container">
                        <img src="images/Kristen 23 2.jpg" alt="Team member 1">
                    </div>
                    <h4>Trainer</h4>
                    <h5>Kirsten Vaccarellik</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequuntur.</p>
                </div>
            </div>
        </div>
        <div class="calendly-container">
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/hartwickhealthyhawks?background_color=003249&text_color=00fbff&primary_color=ffffff"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->
        </div>

        <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="images/Jared.jpg" style="width:100%">
                </div>
    
                <div class="mySlides fade">
                    <img src="images/Molly 23.jpg" style="width:100%">
                </div>
    
                <div class="mySlides fade">
                    <img src="images/spongebob.jpeg" style="width:100%">
                </div>
    
            </div>
            <br>
    
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        <!-- footer goes here. -->
        <footer style="background-color: #003249; color: white;">
            <div class="footer-container">
              <div class="logo-container">
                <img src="images/logohh-smallcopy.png" alt="Hartwick logo">
                <p>Campbell Fitness Center</p>
              </div>
              <div class="useful-links">
                <h3>Useful Links</h3>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="exercises.php">Exercises</a></li>
                  <li><a href="https://www.instagram.com/campbellfitnesscenter/">Instagram Page</a></li>
                </ul>
              </div>
            </div>
            <div class="copyright">
              &copy; 2023 Healthy Hawks <br> Developed by Jackson, Jared, Khon, Nasaka 
            </div>
          </footer>
        <script>
            hamburger = document.querySelector(".hamburger");
            hamburger.onclick = function() {
            navBar = document.querySelector(".site-traverse");
            navBar.classList.toggle("active");
            }

            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) { slideIndex = 1 }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        </script>
</body>
</html>