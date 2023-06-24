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
      <script defer src="js/form.js"></script>
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
                  <a href="login.php">Login</a>
              </li>
          </ul>
      </nav>
  </div>
    <div class="form" id="access-code-section">

          <form action="regisDB.php" target="_self" id="access-code-form" method="POST">
              <h1>Access</h1>

              <label for="access-code">Access Code:</label>
              <input type="text" id="access-code" name="accessCode" required>

              <button type="submit" name="submitCode" id="submit-btn">Register</button>
          </form>
    </div>

    <div class="form" id="regis-form-section"> <!--style="display:none;">-->
      <form action="regisDB.php" target="_self"  id="regis-form" method="POST"> <!--style="display:none;">-->
          <h1>Register</h1>
          <label for="firstName">First Name</label>
          <input type="text" id="firstName" name="firstName"  required placeholder="John">

          <label for="lastName">Last Name</label>
          <input type="text" id="lastName" name="lastName" required placeholder="Doe">

          <label for="email">Email</label>
          <input type="text" id="email" name="email" required placeholder="@hartwick.edu">

          <label for="password">Password</label>
          <input type="text" id="password" name="password" required>
          
    
  
          <button type="submit" name="submit">Register</button>
          <p>Already have an account? <a href="login.php">Login Here</a></p>
      </form>
    </div>
  </body>
</html>