window.addEventListener("DOMContentLoaded", (event) => {
  // $(".log-in").click(() => {
  //   openNavDropdown();
  // });

  // function openNavDropdown() {
  //   document.getElementById("myDropdown").classList.toggle("show");
  // }

  // // Close the dropdown if the user clicks outside of it
  // window.onclick = function (event) {
  //   if (!event.target.matches(".log-in")) {
  //     var dropdowns = document.getElementsByClassName("dropdown-content");
  //     var i;
  //     for (i = 0; i < dropdowns.length; i++) {
  //       var openDropdown = dropdowns[i];
  //       if (openDropdown.classList.contains("show")) {
  //         openDropdown.classList.remove("show");
  //       }
  //     }
  //   }
  // };

  let topicSliderA = document.querySelector(".topic-slider");
  let topicSlider = $(".topic-slider");
  let slider = document.querySelector(".slider");
  var maxScrollLeft = topicSliderA.scrollWidth - topicSliderA.clientWidth;
  topicSlider.scrollLeft(maxScrollLeft / 2);
  topicSlider.scroll(function () {
    console.log(
      "Scroll Left: " +
        topicSlider.scrollLeft() +
        "Total Width: " +
        maxScrollLeft
    );
    if (topicSlider.scrollLeft() < maxScrollLeft * 0.2) {
      topicSlider.scrollLeft(maxScrollLeft * 0.9);
    } else if (topicSlider.scrollLeft() >= maxScrollLeft * 0.901) {
      topicSlider.scrollLeft(maxScrollLeft * 0.201);
    }
  });

  let isDown = false;
  let startX;
  let scrollLeft;
  topicSliderA.addEventListener("mousedown", (e) => {
    isDown = true;
    topicSliderA.classList.add("active");
    startX = e.pageX - topicSliderA.offsetLeft;
    scrollLeft = topicSliderA.scrollLeft;
  });
  topicSliderA.addEventListener("mouseleave", () => {
    isDown = false;
    topicSliderA.classList.remove("active");
  });
  topicSliderA.addEventListener("mouseup", () => {
    isDown = false;
    topicSliderA.classList.remove("active");
  });
  topicSliderA.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - topicSliderA.offsetLeft;
    const walk = (x - startX) * 3; //scroll-fast
    topicSliderA.scrollLeft = scrollLeft - walk;
    // console.log(walk);
  });

  $("#moveSliderLeftBtn").click(() => {
    moveLeft();
  });
  $("#moveSliderRightBtn").click(() => {
    moveRight();
  });

  function moveLeft() {
    // topicSlider.scrollLeft(topicSlider.scrollLeft() - 500);
    scrollAmount = 0;
    var slideTimer = setInterval(function () {
      topicSliderA.scrollLeft -= 10;
      scrollAmount += 10;
      if (scrollAmount >= 500) {
        window.clearInterval(slideTimer);
      }
    }, 8);
  }

  function moveRight() {
    // topicSlider.scrollLeft(topicSlider.scrollLeft() + 500);
    scrollAmount = 0;
    var slideTimer = setInterval(function () {
      topicSliderA.scrollLeft += 10;
      scrollAmount += 10;
      if (scrollAmount >= 500) {
        window.clearInterval(slideTimer);
      }
    }, 8);
  }

  $(".popularity").click(() => {
    increaseLikes();
  });

  function increaseLikes() {
    let counterCont = $(".popularity .number");
    let counter = parseInt(counterCont.text(), 10);
    counter += 1;
    counterCont.text(counter);
  }

  if (document.body.animate) {
    document.querySelector(".popularity").addEventListener("click", pop);
  }

  function pop(e) {
    // Quick check if user clicked the button using a keyboard
    if (e.clientX === 0 && e.clientY === 0) {
      const bbox = document.querySelector("#button").getBoundingClientRect();
      const x = bbox.left + bbox.width / 2;
      const y = bbox.top + bbox.height / 2;
      for (let i = 0; i < 30; i++) {
        // We call the function createParticle 30 times
        // We pass the coordinates of the button for x & y values
        createParticle(x, y);
      }
    } else {
      for (let i = 0; i < 30; i++) {
        // We call the function createParticle 30 times
        // As we need the coordinates of the mouse, we pass them as arguments
        createParticle(e.clientX, e.clientY);
      }
    }
  }

  function createParticle(x, y) {
    const particle = document.createElement("particle");
    document.body.appendChild(particle);

    // Calculate a random size from 5px to 25px
    const size = Math.floor(Math.random() * 20 + 5);
    particle.style.width = `${size}px`;
    particle.style.height = `${size}px`;
    // Generate a random color in a blue/purple palette
    particle.style.background = `hsl(${Math.random() * 90 + 180}, 50%, 40%)`;

    // Generate a random x & y destination within a distance of 75px from the mouse
    const destinationX = x + (Math.random() - 0.5) * 2 * 75;
    const destinationY = y + (Math.random() - 0.5) * 2 * 75;

    // Store the animation in a variable as we will need it later
    const animation = particle.animate(
      [
        {
          // Set the origin position of the particle
          // We offset the particle with half its size to center it around the mouse
          transform: `translate(-50%, -50%) translate(${x}px, ${y}px)`,
          opacity: 1,
        },
        {
          // We define the final coordinates as the second keyframe
          transform: `translate(${destinationX}px, ${destinationY}px)`,
          opacity: 0,
        },
      ],
      {
        // Set a random duration from 500 to 1500ms
        duration: Math.random() * 1000 + 500,
        easing: "cubic-bezier(0, .9, .57, 1)",
        // Delay every particle with a random value of 200ms
        delay: Math.random() * 200,
      }
    );
  }

  // FIX OPTIONS BAR TO TOP ON SCROLL
  $(window).scroll(function () {
    let $elementHorizontal = $(".options-bar-horizontal");
    let $elementVertical = $(".options-bar-vertical");
    let $feed = $(".feed");
    let isFixed = $elementHorizontal.css("position") == "fixed";
    if ($(this).scrollTop() > 320 && !isFixed) {
      $elementHorizontal.css({
        position: "fixed",
        top: "0",
        // left: "1em",
        width: "fit-content",
        background: "#0060ce",
      });
      // $elementVertical.css({
      //   position: "fixed",
      //   top: "0",
      // });
      // $feed.css({
      //   transform: "translateX(50%)",
      //   // // left: "1em",
      //   // width: "fit-content",
      //   // background: "#0060ce",
      // });
    }
    if ($(this).scrollTop() < 280 && isFixed) {
      $elementHorizontal.css({
        position: "static",
        background: "#020202",
        width: "100%",
      });
    }
    // console.log($(this).scrollTop());
  });
});
