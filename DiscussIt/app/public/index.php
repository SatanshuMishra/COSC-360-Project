<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logoDarkBlue.png">
  <!-- EXTERNAL CSS -->
  <link rel="stylesheet" href="css/index.css">
  <!-- EXTERNAL SCRIPTS -->
  <script src="https://kit.fontawesome.com/ec7e0e3eb8.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.js"
integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  <title>Home of Discussions</title>
</head>
<body>
  <nav class="nav-bar">
    <img class="logo" src="images/logoDarkBlue.png" alt="img">
    <form>
      <input type="text" class="nav-search" placeholder="Search">
    </form>
    <div class="dropdown">
      <button class="log-in">
        <i class="fa-regular fa-user"></i> &nbsp;<i class="fa-solid fa-angle-down"></i>
      </button>
      <div id="myDropdown" class="dropdown-content">
        <a href="#"><i class="fa-solid fa-circle-info"></i> &nbsp;Terms & Policies</a>
        <!-- DISPLAY WHEN LOGGED IN -->
        <!-- <a href="#"><i class="fa-solid fa-gear"></i> &nbsp;Settings</a> -->
        <a href="#"><i class="fa-regular fa-circle-question"></i> &nbsp;Log In / Sign Up</a>
      </div>
    </div>
  </nav>

  <div class="topics-container">
    <div class="topic-slider">
      <div class="slider">
        <a class="slider-item" href="#">
          <div class="item-container space">
            <span>SPACE</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container qna">
            <span>Q&A</span>
          </div>
        </a>
        <a class="slider-item">
          <div class="item-container gaming">
            <span>GAMING</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container cooking">
            <span>COOKING</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container sports">
            <span>SPORTS</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container positivity">
            <span>POSITIVITY</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container news">
            <span>NEWS</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container space">
            <span>SPACE</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container qna">
            <span>Q&A</span>
          </div>
        </a>
        <a class="slider-item">
          <div class="item-container gaming">
            <span>GAMING</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container cooking">
            <span>COOKING</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container sports">
            <span>SPORTS</span>
          </div>
        </a>
        <a class="slider-item" href="#">
          <div class="item-container news">
            <span>NEWS</span>
          </div>
        </a>
      </div>
    </div>
    <div class="slider-controls">
        <button class="slider-control-btn" id="moveSliderLeftBtn"><i class="fa-solid fa-left-long"></i></button>
        <button class="slider-control-btn" id="moveSliderRightBtn"><i class="fa-solid fa-right-long"></i></button>
    </div>
  </div>
  <div class="dashboard">
    <div class="options-container">
      <div class="options-bar-horizontal fixed">
        <button class="start-discussion">Start Discussion</button>
        <div class="filter-options">
          <div class="top">
            <i class="fa-solid fa-ranking-star"></i>
            <span>Top</span>
          </div>
          <div class="new">
            <i class="fa-solid fa-hourglass-start"></i>
            <span>New</span>
          </div>
        </div>
      </div>
    </div>
    <div class="options-bar-vertical">
      <button class="start-discussion">Start Discussion</button>
      <div class="filter-options">
        <div class="top">
          <i class="fa-solid fa-ranking-star"></i>
          <span>Most Popular</span>
        </div>
        <div class="new">
          <i class="fa-solid fa-hourglass-start"></i>
          <span>Most Recent</span>
        </div>
      </div>
    </div>
    <div class="feed">
      <div class="discussion">
        <div class="header">
          <h1>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</h1>
          <button class="more-options"><i class="fa-solid fa-ellipsis"></i></button>
        </div>
        <div class="info">
          <div class="user-info">
            <!-- <img src="" alt=""> -->
            <span style="font-size: 50px;"><i class="fa-regular fa-circle-user"></i></span>
            <div class="details">
              <p class="name">Satanshu Mishra</p>
              <p class="date">15h ago</p>
            </div>
          </div>
          <div class="topics">
            <div class="pill space">
              <span class="name">Space</span>
            </div>
            <div class="pill qna">
              <span class="name">Q&A</span>
            </div>
          </div>
        </div>
        <div class="body">
          <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et tellus et purus accumsan fringilla nec ac nunc. Vivamus ac nibh nec erat sagittis bibendum eget vitae ipsum. Proin rhoncus pharetra orci, a luctus nisi pulvinar a. Nam ut risus eget mi egestas aliquet. Donec blandit tellus a purus euismod mattis ut interdum leo. In id ipsum sed elit volutpat maximus. Integer nunc nulla, aliquam ut elit at, sollicitudin egestas turpis. Nulla a magna varius, mattis nibh et, suscipit arcu.</p>
        </div>
        <div class="footer">
          <div class="comments">
            <i class="fa-regular fa-comment-dots"></i>
            <span class="number">90</span>
          </div>
          <div class="popularity">
            <i class="fa-regular fa-heart"></i>
            <span class="number">90</span>
          </div>
        </div>
      </div>
      <div class="discussion">
        <div class="header">
          <h1>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</h1>
          <button class="more-options"><i class="fa-solid fa-ellipsis"></i></button>
        </div>
        <div class="info">
          <div class="user-info">
            <!-- <img src="" alt=""> -->
            <span style="font-size: 50px;"><i class="fa-regular fa-circle-user"></i></span>
            <div class="details">
              <p class="name">Satanshu Mishra</p>
              <p class="date">15h ago</p>
            </div>
          </div>
          <div class="topics">
            <div class="pill space">
              <span class="name">Space</span>
            </div>
            <div class="pill qna">
              <span class="name">Q&A</span>
            </div>
          </div>
        </div>
        <div class="body">
          <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et tellus et purus accumsan fringilla nec ac nunc. Vivamus ac nibh nec erat sagittis bibendum eget vitae ipsum. Proin rhoncus pharetra orci, a luctus nisi pulvinar a. Nam ut risus eget mi egestas aliquet. Donec blandit tellus a purus euismod mattis ut interdum leo. In id ipsum sed elit volutpat maximus. Integer nunc nulla, aliquam ut elit at, sollicitudin egestas turpis. Nulla a magna varius, mattis nibh et, suscipit arcu.</p>
        </div>
        <div class="footer">
          <div class="comments">
            <i class="fa-regular fa-comment-dots"></i>
            <span class="number">90</span>
          </div>
          <div class="popularity">
            <i class="fa-regular fa-heart"></i>
            <span class="number">90</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>