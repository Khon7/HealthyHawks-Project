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
        ?>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Master.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <title>Healthy Hawks </title>
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
                <a href="register.php">Login</a>
            </li>
        </ul>
    </nav>
</div>
  <div class="hero">
    <h1>Exercises</h1>
  </div>
  <div class="main">
    <div class="filters">
      <form class="filter-form">
        <fieldset>
          <legend>Filters</legend>
          <label>
            <input type="checkbox" name="chest" value="chest" class="filter-checkbox">
            Chest
          </label>
          <label>
            <input type="checkbox" name="arms" value="arms" class="filter-checkbox">
            Arms
          </label>
          <label>
            <input type="checkbox" name="back" value="back" class="filter-checkbox">
            Back
          </label>
          <label>
            <input type="checkbox" name="legs" value="legs" class="filter-checkbox">
            Legs
          </label>
        </fieldset>
      </form>
    </div>
    <section class="strength-exercises">
      <h2>Strength Exercises</h2>
      <div class="exercise-grid">
        <div class="exercise chest">
          <iframe src="https://www.youtube.com/embed/vthMCtgVtFw"  title="Athlean X Bench Press Tutorial" height="200"></iframe>
          <h3>Bench Press</h3>
          <p>The barbell bench press is a weightlifting exercise that primarly targets the chest while also targeting the shoulders, and triceps..</p>
        </div>
        <div class="exercise chest">
          <iframe src="https://www.youtube.com/embed/SHsUIZiNdeY"  title="Athlean X Bench Press Tutorial" height="200"></iframe>
          <h3>Dumbbell Incline Bench Press</h3>
          <p>The dumbbell incline bench press is a weightlifting exercise that targets the upper chest, anterior deltoids, and triceps, using dumbbells and an inclined bench.</p>
        </div>
        <div class="exercise arms">
          <iframe src="https://www.youtube.com/embed/vi1-BOcj3cQ"  title="Athlean X BW Dips Tutorial" height="200"></iframe>
          <h3>BW Dips</h3>
          <p>Bodyweight dips are a strength training exercise that primarly targets the triceps while also targeting chest, and shoulders.</p>
        </div>
        <div class="exercise arms">
          <iframe src="https://www.youtube.com/embed/yTWO2th-RIY"  title="Athlean X BW Dips Tutorial" height="200"></iframe>
          <h3>Dumbbell Curls</h3>
          <p>Dumbbell curls are a weightlifting exercise that target the biceps muscles, using dumbbells and a variety of grips and arm positions to perform the curling movement.</p>
        </div>
        <div class="exercise back">
          <iframe src="https://www.youtube.com/embed/T3N-TO4reLQ"  title="Athlean X Barbell Row Tutorial" height="200"></iframe>
          <h3>Barbell Row</h3>
          <p>The barbell row is a compound exercise that primarily targets the upper and middle back muscles, including the lats, rhomboids, traps, deltoids, and biceps</p>
        </div>
        <div class="exercise back">
          <iframe src="https://www.youtube.com/embed/qaJhYsCkX2s"  title="Athlean X Barbell Row Tutorial" height="200"></iframe>
          <h3>Lat Pulldown</h3>
          <p>
            The lat pulldown is a weightlifting exercise that targets the latissimus dorsi muscles, using a cable machine and a wide grip to pull the weight down towards the chest.</p>
        </div>
        <div class="exercise legs">
          <iframe src="https://www.youtube.com/embed/q1fCgfieNEs"  title="Athlean X Back Squat Tutorial" height="200"></iframe>
          <h3>Back Squat</h3>
          <p>The barbell back squat is a weightlifting exercise that targets the lower body muscles, including the quadriceps, hamstrings, glutes, and lower back.</p>
        </div>
        <div class="exercise legs">
          <iframe src="https://www.youtube.com/embed/_oyxCn2iSjU"  title="Athlean X Back Squat Tutorial" height="200"></iframe>
          <h3>Barbell RDL</h3>
          <p>The barbell Romanian deadlift (RDL) is a weightlifting exercise that targets the hamstrings, glutes, and lower back muscles, using a barbell and a hip hinge movement.</p>
        </div>
       
        
      </div>
    </section>
    
  </div>
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
  
  <script src="js/exercises.js">
            
  </script>
</body>
</html>