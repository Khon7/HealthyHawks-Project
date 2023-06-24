<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
          // Unset all of the session variables.
          $_SESSION = array();


          // If it's desired to kill the session, also delete the session cookie.
          // Note: This will destroy the session, and not just the session data!
          if (ini_get("session.use_cookies")) {
              $params = session_get_cookie_params();
              setcookie(session_name(), '', time() - 42000,
                  $params["path"], $params["domain"],
                  $params["secure"], $params["httponly"]
              );
          }
          //session_destroy();

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
                  <a href="register.php">Login</a>
              </li>
          </ul>
      </nav>
  </div>
          
      
      <div class="form" id="login-form-section">
        <form action="#" target="_self" id="login-form" method="post">
            <h1>Login</h1>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" required placeholder="@hartwick.edu">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Password">
            
            <button type="submit" id="submitBtn">Login</button>
            <p>Don't have an account? <a href="register.php">Register Here</a></p>
        </form>
      </div>

      </div>
  </body>
</html>