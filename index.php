<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICET 2025</title>
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.png">
   
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./vendor/css/styles.css?v=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font-Awesome --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
    <!-- Google-Font --> 
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton+SC&family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton+SC&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton+SC&family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton+SC&family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    
    
</head>
<body>

<?php include './common/navbar.php'; ?>

<div class="super"> 
 
 <div class="banner">

 <!-- Landing Page -->

   <div id="text-wrapper">
          
        <div id="particles-container1" class="particles-container"></div><div class='shape1' ></div><div class='shape3' ></div><div class='shape4' ></div>
        <div id="particles-container2" class="particles-container"></div><div class='shape2'></div><div class='shape6'></div><div class='shape7'></div>
         <div class="timer">
         <div id="timer">
            <div class="counter">
                    <div class="box1">
                        <span id="days"></span>
                        <p id="tag">Days</p>
                    </div>
                    <div class="box1">
                        <span id="hours"></span>
                        <p id="tag">Hours</p>
                    </div>
                    <div class="box1">
                        <span id="minutes"></span>
                        <p id="tag">Minutes</p>
                    </div>
                    <div class="box1">
                        <span id="seconds"></span>
                        <p id="tag">Seconds</p>
                    </div>
             </div>
          </div>
        </div>
        <script>
    var timer;

    // Check if a target date is already stored in localStorage
    var storedDate = localStorage.getItem("targetDate");
    var compareDate;

    if (storedDate) {
        // If a date exists in localStorage, use it
        compareDate = new Date(storedDate);
    } else {
        // Otherwise, set a new target date and store it
        compareDate = new Date();
        compareDate.setDate(compareDate.getDate() + 10);
        localStorage.setItem("targetDate", compareDate);
    }

    timer = setInterval(function () {
        timeBetweenDates(compareDate);
    }, 1000);

    function timeBetweenDates(toDate) {
        var now = new Date();
        var difference = toDate.getTime() - now.getTime();

        if (difference <= 0) {
            clearInterval(timer);
            localStorage.removeItem("targetDate"); // Clear storage when the timer ends
        } else {
            var seconds = Math.floor(difference / 1000);
            var minutes = Math.floor(seconds / 60);
            var hours = Math.floor(minutes / 60);
            var days = Math.floor(hours / 24);

            hours %= 24;
            minutes %= 60;
            seconds %= 60;

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
        }
    }
</script>

       <div class="landing-text">
        <p id='para1'>International Conference on Emerging Technologies (ICET) 2025</p> 
        <p id='para2' >"Technology for sustainable future"</p>
        <p id='para'><img src="./assets/icons/calendar-check (1).png"> 1<sup>st</sup> May 2025 </p>
        <p id='para'><img src="./assets/icons/map (1).png"> Faculty of Technology, Sabaragamuwa University of Sri Lanka </p>
      </div>
        <img id='logo' src="./assets/images/Logo_with_name.png" alt="Conference Logo">
        <button class="button">Registration</button>
        
        <script src='./vendor/js/particles.js'></script>
        <script src='./vendor/js/app.js'></script>
        <script>
         document.addEventListener("DOMContentLoaded", () => {
         const textElement = document.getElementById("para2");
         const text = textElement.innerText;  
         textElement.innerHTML = ""; 

        let delay = 0; 

       
        for (let letter of text) {
         setTimeout(() => {
             textElement.innerHTML += letter;  
             textElement.style.opacity = 1;  
         }, delay);
        delay += 100;  
       }
      });

   </script>

  </div>
</div>

<!-- <div class="custom-shape-divider-bottom-1734881515">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
    </svg>
</div> -->
   
  <div class="tracks">
 
  <h1 id="dropdown-title">6 Tracks</h1>
    <div id="dropdown-menu" class="dropdown hidden">
        <ul>
            <li><a href="./advancesInEmergingSciences.php">Advances in Emerging Sciences</a></li>
            <li><a href="./bioenergyAndBioFuelGenerationTechnology.php">Bioenergy and Bio Fuel Generation Technology</a></li>
            <li><a href="./appliedBiotechnologyAndMicrobiology.php">Applied Biotechnology and Microbiology</a></li>
            <li><a href="./mechanicalEngineeringTechnology.php">Mechanical Engineering Technology</a></li>
            <li><a href="./electricalAndElectronicEngineeringTechnology.php">Electrical and Electronic Engineering Technology</a></li>
            <li><a href="./drugDiscoveryAndDevelopment.php">Drug Discovery and Development</a></li>
        </ul>
    </div>

    <script>
      const title = document.getElementById('dropdown-title');
      const menu = document.getElementById('dropdown-menu');

     title.addEventListener('click', () => {
     // Toggle dropdown visibility
     menu.classList.toggle('hidden');
     menu.classList.toggle('visible');
     });

    // Optional: Close dropdown when clicking outside
     document.addEventListener('click', (event) => {
     if (!title.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.add('hidden');
        menu.classList.remove('visible');
     }
     });

    </script>
     

    
    <!-- Infinite Scroll -->

   <div class="Infinite-wrapper">
    <div class="item item1"><a href="./advancesInEmergingSciences.php" ><div class="inner inner1"><p>Advances in Emerging <br> Sciences</p></div></a></div>
    <div class="item item2"><a href="./bioenergyAndBioFuelGenerationTechnology.php"><div class="inner inner2"><p>Bioenergy and Bio fuel<br> Generation Technology</p></div></a></div>
    <div class="item item3"><a href="./appliedBiotechnologyAndMicrobiology.php"><div class="inner inner3"><p>Applied Biotechnology and <br> Microbiology</p></div></a></div>
    <div class="item item4"><a href="./mechanicalEngineeringTechnology.php"><div class="inner inner4"><p>Mechanical Engineering <br> Technology</p></div></a></div>
    <div class="item item5"><a href="./electricalAndElectronicEngineeringTechnology.php"><div class="inner inner5"><p>Electrical and Electronic <br> Engineering Technology</p></div></a></div>
    <div class="item item6"><a href="./drugDiscoveryAndDevelopment.php"><div class="inner inner6"><p>Drug Discovery and <br> Development</p></div></a></div>
   </div>
</div> 
 
  <div class="key">
    <h1>Keynote Speaker</h1> 
    <!-- <div class='box'>
      <ul class='list'>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div> -->
    <div class="profile">
        <div class="user-card">
            <div class="user-card-img">
              <img src="./assets/images/man.jpeg" alt="">
            </div>
            <div class="user-card-info">
              <h2>Jason Walker</h2>
              <p><span>Email:</span> example@example.com</p>
              <p><span>Location:</span> London, United Kingdom</p>
              <p><span>Occupation:</span> Web Developer</p>
              <p><span>About me:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
  <h2 id="speaker1">Regular Speaker</h2>               
    <div class="profile1">
        <div class="user-card1">
            <div class="user-card-img1">
              <img src="./assets/images/man.jpeg" alt="">
            </div>
            <div class="user-card-info1">
              <h2>Jason Walker</h2>
              <p><span>Email:</span> example@example.com</p>
              <p><span>Location:</span> London, United Kingdom</p>
              <p><span>Occupation:</span> Web Developer</p>
              <p><span>About me:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
  <h2 id="speaker2">Plenary Speaker </h2>
    <div class="profile2">
        <div class="user-card2">
            <div class="user-card-img2">
              <img src="./assets/images/man.jpeg" alt="">
            </div>
            <div class="user-card-info2">
              <h2>Jason Walker</h2>
              <p><span>Email:</span> example@example.com</p>
              <p><span>Location:</span> London, United Kingdom</p>
              <p><span>Occupation:</span> Web Developer</p>
              <p><span>About me:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
    </div>

  <div class="team">
    <h1 id='title'>Key Members</h1>
    <div class="sectors">
    <div class="sector">
      <div class="imgbox">
        <img src=" " alt="profile" />
      </div>
      <div class="intro-text">
        <h1> Dr. MDKM Gunasena </h1>
      </div>
      <span>Conference Chair</span>
      <div class="social-links">
        <a href="https://www.sab.ac.lk/staff-directory/466">
          <button>
          <img src="./assets/images/link.png" alt="">
        </button>
      </a>
      </div>
    </div>
    <div class="sector">
      <div class="imgbox">
        <img src=" " alt="profile" />
      </div>
      <div class="intro-text">
        <h1>Mr. AMPC Amarasinghe </h1>
      </div>
      <span>Conference Co-chair</span>
      <div class="social-links">
        <a href="https://www.sab.ac.lk/staff-directory/474">
          <button>
          <img src="./assets/images/link.png" alt="">
        </button>
      </a>
      </div>
    </div>
    <div class="sector">
      <div class="imgbox">
        <img src=" " alt="profile" />
      </div>
      <div class="intro-text">
        <h1>Mr. ERJMDDP Wijesekara </h1>
        
      </div>
      <span>Conference Secretory</span>
      <div class="social-links">
        <a href="https://www.sab.ac.lk/staff-directory/339">
          <button>
          <img src="./assets/images/link.png" alt="">
        </button>
      </a>
      </div>
    </div>
    <div class="sector">
      <div class="imgbox">
        <img src="./assets/images/Abeysinghe Shakya photo.jpg" alt="profile" />
      </div>
      <div class="intro-text">
        <h1>Dr. SS Abeysinghe </h1>
      </div>
      <span>Conference Co-secretory</span>
      <div class="social-links">
        <a href=" ">
          <button>
          <img src="./assets/images/link.png" alt="">
        </button>
      </a>
      </div>
    </div>
    <div class="sector">
      <div class="imgbox">
        <img src="./assets/images/Dr.(Ms).H.G.N Rajapaksha.png" alt="profile" />
      </div>
      <div class="intro-text">
        <h1>Dr. HGN Rajapaksha </h1>
      </div>
      <span>Conference Treasurer</span>
      <div class="social-links">
        <a href=" ">
          <button>
          <img src="./assets/images/link.png" alt="">
        </button>
      </a>
      </div>
    </div>
   
    </div>
 <div class="blob"></div>
    
  </div>
  

  <div class="sponsers">
    <h1>Sponsers</h1>
    
  </div>

  <div class="foot">
      
     <?php include './common/footer1.php'; ?>
  </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
