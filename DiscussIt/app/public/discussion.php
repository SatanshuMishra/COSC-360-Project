<!DOCTYPE html>
<html lang= "en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="css/discussion.css">


  <!-- Script -->
  <script src="https://kit.fontawesome.com/ec7e0e3eb8.js" crossorigin="anonymous"></script>

  <title>Create a Discussion</title>
</head>
<body>
<nav class = "nav-bar">
    <img src = "images/logoDarkBlue.png" class = "logo">
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
<div class = "container">
<div class = "circle">
    1
</div>
<div class = "circle2">
    2
</div>
<div class = "circle2">
    3
</div>

</div>
<h1>Choose Your Topics</h1>

<div class = "scroll-bar">
    <div class = "topic" onclick = "addTopic(this)" style="background-color: blue;">Space</div>
    <div class = "topic" onclick = "addTopic(this)" style="background-color: red;">AI</div>
    <div class = "topic" onclick = "addTopic(this)" style="background-color: green;">Comedy</div>
    <div class = "topic" onclick = "addTopic(this)" style="background-color: gray;">Q&A</div>
    <div class = "topic" onclick = "addTopic(this)" style="background-color: purple;">Sports</div>
    <div class = "topic" onclick = "addTopic(this)" style="background-color: orange;">Food</div>
     
</div>
<div class = "text-box">
    Selected Topics:
    <ul id = "selected-topics"></ul>
</div>

<div class = "buttons">
    <div class = "remove-button">
    <button class = "remove" onclick = "removeTopic(this)">Remove</button>
</div>
</div>



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
    function addTopic(element){
       const ul = document.querySelector('ul');
       const numberOfItems = ul.querySelectorAll('li').length;
       if(numberOfItems < 2){
        var topicText = element.innerText;
        var listItem = document.createElement("li");

        listItem.innerText = topicText;
        document.getElementById("selected-topics").appendChild(listItem);

       }else
       alert('You can have a maximum of two topics');
        
    }
    function removeTopic(element){
        const ul = document.querySelector('ul');
       ul.removeChild();
        

    }
  </script>

</body>


</html>