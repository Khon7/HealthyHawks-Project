<!DOCTYPE html>
<html lang="en">
    <head>
        <?php

            session_start();

            if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && isset($_SESSION['default']) == false) {
                $server = 'database-1.cvzlflgjxjpj.us-east-1.rds.amazonaws.com';
                $con = new mysqli($server, 'admin', 'HealthyHawks', 'instructorProfile', '3306');


                $id = $_SESSION['userID'];
                $sql = "SELECT * FROM Profile WHERE id = '$id'";

                // Send the query to the database
                $rs = mysqli_query($con, $sql);

                // Check if the query was successful and if a row was returned
                if ($rs && mysqli_num_rows($rs) > 0) {
                    $row = mysqli_fetch_assoc($rs);

                    $_SESSION['fullName'] = $row['fullName'];
                    $_SESSION['bio'] = $row['bio'];
                    $_SESSION['availabiltyM1'] = $row['availabilityM'];
                    $_SESSION['availabiltyA1'] = $row['availabilityA'];
                    $_SESSION['availabiltyE1'] = $row['availabilityE'];
                    $_SESSION['picture'] = $row['picture'];

                    $_SESSION['default'] = true;
                    $_SESSION['userID1'] = $row['id'];
                    $_SESSION['fullName1'] = $row['fullName'];
                    $_SESSION['bio1'] = $row['bio'];
                    $_SESSION['availabiltyM1'] = $row['availabilityM'];
                    $_SESSION['availabiltyA1'] = $row['availabilityA'];
                    $_SESSION['availabiltyE1'] = $row['availabilityE'];
                    $_SESSION['picture1'] = $row['picture'];
                }


            } elseif (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && isset($_SESSION['default']) == true) {
                // Placeholder
            } elseif (isset($_SESSION['default']) == true && $_SESSION['default'] == true) {
                // Placeholder

            } else {
                $_SESSION['default'] = true;

                $server = 'database-1.cvzlflgjxjpj.us-east-1.rds.amazonaws.com';
                $con = new mysqli($server, 'admin', 'HealthyHawks', 'instructorProfile', '3306');

                $sql = "SELECT *
				          FROM Profile
				          WHERE id = 1";


                // Send the query to the database
                $rs = mysqli_query($con, $sql);

                // Check if the query was successful and if a row was returned
                if ($rs && mysqli_num_rows($rs) > 0) {
                    $row = mysqli_fetch_assoc($rs);

                    $_SESSION['userID1'] = $row['id'];
                    $_SESSION['fullName1'] = $row['fullName'];
                    $_SESSION['bio1'] = $row['bio'];
                    $_SESSION['availabiltyM1'] = $row['availabilityM'];
                    $_SESSION['availabiltyA1'] = $row['availabilityA'];
                    $_SESSION['availabiltyE1'] = $row['availabilityE'];
                    $_SESSION['picture1'] = $row['picture'];

                }


                mysqli_close($con);
            }




        ?>

        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/Master.css"/>
        <script src="instructorScript.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet" />
        <!-- <script defer src="js/carousel.js"></script> -->
        <title>Healthy Hawks</title>
        
        <style>
            @media only screen and (max-width:900px) {

            .mainInstuctorDiv {
                border: none;
            }
            .pic-name-change-trainer{
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                background-image: linear-gradient(var(--darkblue),var(--grey));
                padding: 40px 0;
            
            }
            .picName {
                padding: 30px 20px;
                background-color: var(--blue);
                border-radius: 30px;
                border: 2px solid var(--grey);
                margin-bottom: 15px; 
                
            }
            .profPic {
                display: flex;
                flex-direction: column;
                justify-content: space-around;
            }

            .profile-picture {
                margin: 30px auto 0px;
            }
            .profileName {
                margin: 20px auto 10px;
                font-size: 20px;
                color: white;
            }

            .changeTrainer {
                align-self: center;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                width: 300px;
            }
            .changeTrainer button {
                padding: 20px;
                border-radius: 20px;
                background: var(--blue);
                color: white;
                border: 2px solid var(--grey);
            }
            .about-me {
                background-color: var(--grey);
                float: left;
                width: 100%;
                padding-bottom: 50px;
            }
            .access {
                float: left;
                width: 100%;
            }

            .access table {
                margin: 50px auto;
                padding: 50px 0px;
                background-color: var(--darkblue);
                border-radius: 30px;
                width: 100%
            }

            .access table tbody {
                color: white;
                max-width: 420px;

            }
            #table1 .table-heading th{
                text-align: center;
                font-size: 26px;
            }

            #table1 th {
                padding: 10px 2px;
                border: 2px solid var(--grey);
            }

            #table1 th:first-child {
                border: none;
            }

            #table1 .row td {
                border: 2px solid var(--grey);
                padding: 10px 0;
                text-align: center;
            }

            #table1 .row td:first-child {
                text-align: left;
                padding-left: 5px;
            }
            #table2 th {
                padding: 10px 15px;
                border: 2px solid var(--grey);
            }

            #table2 th:first-child {
                border: none;
            }

            #table2 .row td {
                border: 2px solid var(--grey);
                padding: 10px 0;
                text-align: center;
            }

            #table2 .row td:first-child {
                text-align: left;
                padding-left: 5px;
            }

            .mainInstuctorDiv .calendly-container {
                float: left;
                width: 100%;
                background-color: var(--darkblue);
            }

            .mainInstuctorDiv .footer-container {
                float: left;
                width: 100%;
            }

        }
        </style>
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

        <div class="mainInstuctorDiv">
            <div class="pic-name-change-trainer">
                <div class="picName">
                    <div class="profPic">
                        <div class="profile-picture">
                            <?php
                                $pic = $_SESSION['picture1'];
                                echo "<img class='profilePic' src='$pic' id='profile-img' alt='Profile Picture' />";

                            ?>
                            <br />
                        </div>

                        <!-- Trainer Name -->
                        <div class="profileName">
                            <?php
                            if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && $_SESSION['userID'] == $_SESSION['userID1']) {
                                $fullName = $_SESSION['fullName'];
                                print "<h1 id='name'>$fullName</h1>";

                            } else {
                                $fullName = $_SESSION['fullName1'];
                                print "<h1 id='name'>$fullName</h1>";
                            }

                            ?>
                        </div>
                    </div>
                </div>


                <div class="changeTrainer">
                   
                    <button class="prevTrainer" onclick="prevT()">Previous Trainer</button>
                    <button class="nextTrainer" onclick="nextT()">Next Trainer</button>


                    <script>
                        function prevT() {
                            // Send an AJAX request to a PHP file to fetch the next trainer details
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    // Handle the response from the PHP file
                                    var response = this.responseText;
                                    if (response.trim() === 'success') {
                                        // Redirect to the profile.php page
                                        window.location.href = 'profile.php';
                                    }
                                }
                            };
                            xhttp.open("GET", "prevTrainer.php", true);
                            xhttp.send();
                        }

                        function nextT() {
                            // Send an AJAX request to a PHP file to fetch the next trainer details
                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    // Handle the response from the PHP file
                                    var response = this.responseText;
                                    if (response.trim() === 'success') {
                                        // Redirect to the profile.php page
                                        window.location.href = 'profile.php';
                                    }
                                }
                            };
                            xhttp.open("GET", "nextTrainer.php", true);
                            xhttp.send();
                        }
                    </script>
                </div>
            </div>

            

            <!-- Trainer Bio -->
            <div class="about-me">

                <h2>BIO</h2>
                <p class="aboutMeText" id="about-me-display">Enter information about yourself</p>
                <textarea class="aboutMeText" id="about-me-edit" placeholder="Enter information about yourself"></textarea>

                <?php
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && $_SESSION['userID'] == $_SESSION['userID1']) {
                    print "<button id='edit-button'>Edit</button>";
                    print "<button class='save-button' id='save-button' onclick=''>Save</button>";

                }
                function update() {}


                ?>

                <script>
                const displayElement = document.getElementById('about-me-display');
                const editElement = document.getElementById('about-me-edit');
                const editButton = document.getElementById('edit-button');
                const saveButton = document.getElementById('save-button');

                // Show the edit textarea and hide the display paragraph on edit button click
                editButton.addEventListener('click', () => {
                    displayElement.style.display = 'none';
                    editElement.style.display = 'block';
                    editElement.value = displayElement.textContent; // Set the initial textarea value to the displayed text
                });

                // Save the edited text and switch back to display mode on save button click
                saveButton.addEventListener('click', () => {
                    displayElement.textContent = editElement.value;
                    displayElement.style.display = 'block';
                    editElement.style.display = 'none';
                });
                </script>

            </div>

            <div class="access">
                <!--Trainer Hours--> 
                <table id="table1">
                    <tr class="table-heading">
                        <th colspan="6"> Trainer Availbility</th>
                    </tr>   
                    <tr>
                        <th></th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                    <tr class="row">
                        <td>M</td>
                        <td id="mon-morning">x</td>
                        <td id="tue-morning">x</td>
                        <td id="wed-morning">x</td>
                        <td id="thu-morning">x</td>
                        <td id="fri-morning">x</td>
                    </tr>
                    <tr class="row">
                        <td>A</td>
                        <td id="mon-afternoon">x</td>
                        <td id="tue-afternoon">x</td>
                        <td id="wed-afternoon">x</td>
                        <td id="thu-afternoon">x</td>
                        <td id="fri-afternoon">x</td>
                    </tr>
                    <tr class="row">
                        <td>E</td>
                        <td id="mon-evening">x</td>
                        <td id="tue-evening">x</td>
                        <td id="wed-evening">x</td>
                        <td id="thu-evening">x</td>
                        <td id="fri-evening">x</td>
                    </tr>
                </table>

                <table id="table2" style="display: none;">
                    <tr>
                        <th></th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                    <tr class="row">
                        <td>M</td>
                        <td>
                            <input type="checkbox" id="mon-morning-checkbox" onchange="updateAvailability('mon-morning')" />
                        </td>
                        <td>
                            <input type="checkbox" id="tue-morning-checkbox" onchange="updateAvailability('tue-morning')" />
                        </td>
                        <td>
                            <input type="checkbox" id="wed-morning-checkbox" onchange="updateAvailability('wed-morning')" />
                        </td>
                        <td>
                            <input type="checkbox" id="thu-morning-checkbox" onchange="updateAvailability('thu-morning')" />
                        </td>
                        <td>
                            <input type="checkbox" id="fri-morning-checkbox" onchange="updateAvailability('fri-morning')" />
                        </td>
                    </tr>
                    <tr class="row">
                        <td>A</td>
                        <td>
                            <input type="checkbox" id="mon-afternoon-checkbox" onchange="updateAvailability('mon-afternoon')" />
                        </td>
                        <td>
                            <input type="checkbox" id="tue-afternoon-checkbox" onchange="updateAvailability('tue-afternoon')" />
                        </td>
                        <td>
                            <input type="checkbox" id="wed-afternoon-checkbox" onchange="updateAvailability('wed-afternoon')" />
                        </td>
                        <td>
                            <input type="checkbox" id="thu-afternoon-checkbox" onchange="updateAvailability('thu-afternoon')" />
                        </td>
                        <td>
                            <input type="checkbox" id="fri-afternoon-checkbox" onchange="updateAvailability('fri-afternoon')" />
                        </td>
                    </tr>
                    <tr class="row">
                        <td>E</td>
                        <td>
                            <input type="checkbox" id="mon-evening-checkbox" onchange="updateAvailability('mon-evening')" />
                        </td>
                        <td>
                            <input type="checkbox" id="tue-evening-checkbox" onchange="updateAvailability('tue-evening')" />
                        </td>
                        <td>
                            <input type="checkbox" id="wed-evening-checkbox" onchange="updateAvailability('wed-evening')" />
                        </td>
                        <td>
                            <input type="checkbox" id="thu-evening-checkbox" onchange="updateAvailability('thu-evening')" />
                        </td>
                        <td>
                            <input type="checkbox" id="fri-evening-checkbox" onchange="updateAvailability('fri-evening')" />
                        </td>
                    </tr>
                </table>

                <?php
                    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && $_SESSION['userID'] == $_SESSION['userID1']) {
                        print "<button id='editButton' onclick='toggleTables()'>Edit</button>";
                        print "<button onclick='updateAvailability()' style='display: none;'>Save</button>";

                    }
                ?>
                
                <script>
                    // Show the save button when checkboxes are checked
                    var checkboxes = document.querySelectorAll("#table2 input[type='checkbox']");
                    checkboxes.forEach(function(checkbox) {
                        checkbox.addEventListener("change", function() {
                            var saveButton = document.querySelector("button");
                            saveButton.style.display = "block";
                        });
                    });


                    function toggleTables() {
                        var table1 = document.getElementById("table1");
                        var table2 = document.getElementById("table2");
                        var editButton = document.getElementById("editButton");
                        var saveButton = document.getElementById("saveButton");

                        if (table1.style.display === "none") {
                            table1.style.display = "table";
                            table2.style.display = "none";
                            editButton.innerHTML = "Edit";
                            saveButton.style.display = "none";
                        } else {
                            table1.style.display = "none";
                            table2.style.display = "table";
                            editButton.innerHTML = "Save";
                            saveButton.style.display = "block";
                        }
                    }

                    function updateAvailability(id) {
                        var checkbox = document.getElementById(id + "-checkbox");
                        var cell = document.getElementById(id);

                        if (checkbox.checked) {
                            cell.innerHTML = "&#10004;"; // Checkmark symbol
                        } else {
                            cell.innerHTML = "x";
                        }
                    }
                </script>
            </div>

            <div class="calendly-container">
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/hartwickhealthyhawks?background_color=003249&text_color=00fbff&primary_color=ffffff"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <!-- Calendly inline widget end -->
            </div>

               
        </div>
        
        <footer>
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

        </script>
    </body>
</html>