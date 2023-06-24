// get all the filter checkboxes
const checkboxes = document.querySelectorAll(".filter-checkbox");

// get all the exercise items
const exercises = document.querySelectorAll(".exercise");

// add an event listener to each filter checkbox
checkboxes.forEach(function (checkbox) {
  checkbox.addEventListener("change", function () {
    // array to store the class names of the checked checkboxes
    const checkedFilters = [];

    // loop through all the checkboxes and add the class name of checked ones to the array
    checkboxes.forEach(function (checkbox) {
      if (checkbox.checked) {
        checkedFilters.push(checkbox.value);
      }
    });

    // if no filters are checked, show all exercises
    if (checkedFilters.length === 0) {
      exercises.forEach(function (exercise) {
        exercise.style.display = "block";
      });
    } else {
      // loop through all the exercises and check if their class matches with the checked filters
      exercises.forEach(function (exercise) {
        const classList = exercise.classList;
        let showExercise = false;

        checkedFilters.forEach(function (filter) {
          if (classList.contains(filter)) {
            showExercise = true;
          }
        });

        // show or hide the exercise based on the checked filters
        if (showExercise) {
          exercise.style.display = "block";
        } else {
          exercise.style.display = "none";
        }
      });
    }
  });
});

hamburger = document.querySelector(".hamburger");
            hamburger.onclick = function() {
            navBar = document.querySelector(".site-traverse");
            navBar.classList.toggle("active");
            }
