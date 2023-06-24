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
        <link rel="stylesheet" href="css/website.css" />
        <script src="instructorScript.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet" />
        <!-- <script defer src="js/carousel.js"></script> -->
        <title>Healthy Hawks</title>
    </head>
    <body>
        <div class="navigation-container">
            <img src="images/logohh-smallcopy.png" alt="#" /><!--This will be replaced with an logo-->
            <nav class="site-traverse">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#instructors">Instructors</a>
                    </li>
                    <li>
                        <a href="exercises.php">Exercises</a>
                    </li>
                </ul>
            </nav>
            <nav class="login-regis">
                <ul>
                    <li>
                        <a href="regCode.php">Register</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="mainInstuctorDiv">
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
                <br>
                <br>
                <button class="prevTrainer" onclick="prevT()">Previous Trainer</button>
                <hr class="half">
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
                                    window.location.reload();
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
                                    window.location.reload();
                                }
                            }
                        };
                        xhttp.open("GET", "nextTrainer.php", true);
                        xhttp.send();
                    }
                </script>
            </div>

            <!-- Trainer Bio -->
            <div class="about-me">
                <hr>

                <?php
                    echo '<h2>About Me</h2>';
                    $bio = $_SESSION['bio1'];
                    echo "<p class='aboutMeText' id='about-me-display'>$bio</p>";
                    echo '<hr class="full">';
                    echo '<textarea class="aboutMeText" id="about-me-edit" placeholder="Enter information about yourself"></textarea>';

                    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true && $_SESSION['userID'] == $_SESSION['userID1']) {
                        echo "<button id='edit-button'>Edit</button>";
                        echo "<button class='save-button' id='save-button' >Save</button>";

                    }

                ?>

                <script type="text/javascript">
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

                        const xhttp = new XMLHttpRequest();
                        xhttp.onload = function() {
                            document.getElementById("editElement").innerHTML = this.responseText;
                        }
                        xhttp.open("POST", "saveData.php?bio="+editElement.value);
                        xhttp.send();
                    });
                </script>

            </div>

            <div class="access">
                <!--Trainer Hours--> 
                <table id="table1">
                    <tr>
                        <th></th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                    <tr>
                        <td>Morning</td>
                        <?php
                            $days = $_SESSION['availabiltyM1'];
                            $day = explode( ",", $days);

                            $mon = $day[0];
                            if ($mon == 1) {
                                echo "<td id='mon-morning'>&#10004;</td>";
                            } else {
                                echo "<td id='mon-morning'>x</td>";
                            }
                            $tue = $day[1];
                            if ($tue == 1) {
                                echo "<td id='tue-morning'>&#10004;</td>";
                            } else {
                                echo "<td id='tue-morning'>x</td>";
                            }
                            $wed = $day[2];
                            if ($wed == 1) {
                                echo "<td id='wed-morning'>&#10004;</td>";
                            } else {
                                echo "<td id='wed-morning'>x</td>";
                            }
                            $thu = $day[3];
                            if ($thu == 1) {
                                echo "<td id='thu-morning'>&#10004;</td>";
                            } else {
                                echo "<td id='thu-morning'>x</td>";
                            }
                            $fri = $day[4];
                            if ($fri == 1) {
                                echo "<td id='fri-morning'>&#10004;</td>";
                            } else {
                                echo "<td id='fri-morning'>x</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <td>Afternoon</td>

                        <?php
                            $days = $_SESSION['availabiltyA1'];
                            $day = explode( ",", $days);

                            $mon = $day[0];
                            if ($mon == 1) {
                                echo "<td id='mon-afternoon'>&#10004;</td>";
                            } else {
                                echo "<td id='mon-afternoon'>x</td>";
                            }
                            $tue = $day[1];
                            if ($tue == 1) {
                                echo "<td id='tue-afternoon'>&#10004;</td>";
                            } else {
                                echo "<td id='tue-afternoon'>x</td>";
                            }
                            $wed = $day[2];
                            if ($wed == 1) {
                                echo "<td id='wed-afternoon'>&#10004;</td>";
                            } else {
                                echo "<td id='wed-afternoon'>x</td>";
                            }
                            $thu = $day[3];
                            if ($thu == 1) {
                                echo "<td id='thu-afternoon'>&#10004;</td>";
                            } else {
                                echo "<td id='thu-afternoon'>x</td>";
                            }
                            $fri = $day[4];
                            if ($fri == 1) {
                                echo "<td id='fri-afternoon'>&#10004;</td>";
                            } else {
                                echo "<td id='fri-afternoon'>x</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <td>Evening</td>

                        <?php
                            $days = $_SESSION['availabiltyE1'];
                            $day = explode( ",", $days);

                            $mon = $day[0];
                            if ($mon == 1) {
                                echo "<td id='mon-evening'>&#10004;</td>";
                            } else {
                                echo "<td id='mon-evening'>x</td>";
                            }
                            $tue = $day[1];
                            if ($tue == 1) {
                                echo "<td id='tue-evening'>&#10004;</td>";
                            } else {
                                echo "<td id='tue-evening'>x</td>";
                            }
                            $wed = $day[2];
                            if ($wed == 1) {
                                echo "<td id='wed-evening'>&#10004;</td>";
                            } else {
                                echo "<td id='wed-evening'>x</td>";
                            }
                            $thu = $day[3];
                            if ($thu == 1) {
                                echo "<td id='thu-evening'>&#10004;</td>";
                            } else {
                                echo "<td id='thu-evening'>x</td>";
                            }
                            $fri = $day[4];
                            if ($fri == 1) {
                                echo "<td id='fri-evening'>&#10004;</td>";
                            } else {
                                echo "<td id='fri-evening'>x</td>";
                            }
                        ?>
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
                    <tr>
                        <td>Morning</td>
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
                    <tr>
                        <td>Afternoon</td>
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
                    <tr>
                        <td>Evening</td>
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
                            cell.innerHTML = ""; // Checkmark symbol
                        } else {
                            cell.innerHTML = "x";
                        }
                    }
                </script>
            </div>

            <div>
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/hartwickhealthyhawks?background_color=003249&text_color=00fbff&primary_color=ffffff"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <!-- Calendly inline widget end -->
            </div>

               
        </div>
        <footer>

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/campbell1.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/hutman1.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/campbell2.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

            <script>
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
        </footer>
    </body>
</html>