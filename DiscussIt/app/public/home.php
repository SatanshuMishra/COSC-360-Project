<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- EXTERNAL CSS -->
  <link rel="stylesheet" href="css/index.css">


  <!-- EXTERNAL SCRIPTS -->
  <script src="https://kit.fontawesome.com/ec7e0e3eb8.js" crossorigin="anonymous"></script>

  <title>Home of Discussions</title>
</head>

<body>
  <nav class="nav-bar">
    <img class="logo" src="images/logoDarkBlue.png" alt="img">
    <form>
      <input type="text" class="nav-search" placeholder="Search">
    </form>
    <div class="dropdown">
      <button onclick="myFunction()" class="log-in">
        <i class="fa-regular fa-user"></i> &nbsp;<i class="fa-solid fa-angle-down"></i>
      </button>
      <div id="myDropdown" class="dropdown-content">
        <a href="#"><i class="fa-solid fa-circle-info"></i> &nbsp;Terms & Policies</a>
        <a href="#"><i class="fa-regular fa-circle-question"></i> &nbsp;Log In / Sign Up</a>
      </div>
    </div>
  </nav>




  <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
      if (!event.target.matches('.log-in')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>

</body>

</html>