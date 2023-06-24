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
      <img src="images/logohh-smallcopy.png" alt="#"> <!--This will be replaced with an logo-->
      <nav class="site-traverse">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="profile.php">Instructors</a></li>
          <li><a href="exercises.php">Exercises</a></li>
        </ul>
      </nav>
      <nav class="login-regis">
        <ul>
            <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </div>

    <div class="form" id="access-code-section">

          <form action="regisDB.php" target="_self"  id="access-code-form" method="POST">
              <h1>Access</h1>

              <label for="access-code">Access Code:</label>
              <input type="text" id="access-code" name="accessCode" required>

              <button type="submit" name="submitCode" id="submit-btn">Register</button>
          </form>
    </div>
  </body>
</html>