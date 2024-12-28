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

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    
</head>
<body>

<?php include './common/navbar.php'; ?>


<div class="super"> 
 
 <div class="banner">

 <!-- Landing Page -->

  <div id="text-wrapper">
          
    <div  class="particles-container"><div id="particles-container1"><div class="shape1"></div></div></div>
    <div id="particles-container2" class="particles-container"><div class='shape2'></div></div>
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
            localStorage.removeItem("targetDate"); 
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

       <h1 id="more">..More</h1>

       <div class="landing-text">
        <p id='para1'>International Conference on Emerging Technologies (ICET) 2025</p> 
        <p id='para2' >"Technology for sustainable future"</p>
        <p id='para'><img src="./assets/icons/calendar-check (1).png"> 2<sup>nd</sup> April 2025 </p>
        <p id='para'><img src="./assets/icons/map (1).png"> Faculty of Technology, Sabaragamuwa University of Sri Lanka </p>
      </div>
        <img id='logo' src="./assets/images/Logo_with_name.png" alt="Conference Logo">
        
        
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
    </div>

<!-- <div class="custom-shape-divider-bottom-1734881515">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
    </svg>
</div> -->

    <div class="tracks">

        <h1 id="dropdown-title">6 Tracks</h1>
 
       

<div class="box-container">

    <div class="box">
        <img src="./assets/images/Advances in Emerging Sciences.png" alt="">
        <p>Advances in Emerging Sciences</p>
        <a href="./advancesInEmergingSciences.php" class="btn">Read more</a>
    </div>

    <div class="box">
        <img src="./assets/images/Bioenergy and Bio fuel Generation Technology.jpg" alt="">
        <p>Bioenergy and Bio Fuel Generation Technology</p>
        <a href="./bioenergyAndBioFuelGenerationTechnology.php" class="btn">Read more</a>
    </div>

    <div class="box">
        <img src="./assets/images/Applied Biotechnology and Microbiology.jpg" alt="">
        <p>Applied Biotechnology and Microbiology</p>
        <a href="./appliedBiotechnologyAndMicrobiology.php" class="btn">Read more</a>
    </div>

    <div class="box">
        <img src="./assets/images/Mechanical Engineering Technology.jpg" alt="">
        <p>Mechanical Engineering Technology</p>
        <a href="./mechanicalEngineeringTechnology.php" class="btn">Read more</a>
    </div>

    <div class="box">
        <img src="./assets/images/Electrical and Electronic Engineering Technology.png" alt="">
        <p>Electrical and Electronic Engineering Technology</p>
        <a href="./electricalAndElectronicEngineeringTechnology.php" class="btn">Read more</a>
    </div>

    <div class="box">
        <img src="./assets/images/Drug Discovery and Development.jpg" alt="">
        <p>Drug Discovery and Development</p>
        <a href="./drugDiscoveryAndDevelopment.php" class="btn">Read more</a>
    </div>

</div>



    </div>

    
    <div class="dropdown-container" style="position: relative;">
    <span class="dropdown-icon">&#x25BC;</span>
    <div class="dropdown-menu">
    <a href="./advancesInEmergingSciences.php">Advances in Emerging Sciences</a>
    <a href="./bioenergyAndBioFuelGenerationTechnology.php">Bioenergy and Bio Fuel Generation Technology</a>
    <a href="./appliedBiotechnologyAndMicrobiology.php">Applied Biotechnology and Microbiology</a>
    <a href="./mechanicalEngineeringTechnology.php">Mechanical Engineering Technology</a>
    <a href="./electricalAndElectronicEngineeringTechnology.php">Electrical and Electronic Engineering Technology</a>
    <a href="./drugDiscoveryAndDevelopment.php">Drug Discovery and Development</a>
    </div>
</div>

    <script>
     const title = document.getElementById('dropdown-title');
     const menu = document.getElementById('dropdown-menu');

   title.addEventListener('click', () => {
    // Toggle dropdown visibility
     menu.classList.toggle('hidden');
   menu.classList.toggle('visible');
   })

  // Optional: Close dropdown when clicking outside
    document.addEventListener('click', (event) => {
  if (!title.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.add('hidden');
            menu.classList.remove('visible');
    }
  });

   </script>
 
  <div class="key">
    <h1>Keynote Speaker</h1>
    <a href="https://www.ims.ac.jp/en/research/prof/kera.html" id="key">
    <div class="speakers" >
	<div class="card-borders">
		<div class="border-top"></div>
		<div class="border-right"></div>
		<div class="border-bottom"></div>
		<div class="border-left"></div>
	</div>
	<div class="card-content">
		<img src="./assets/images/Satoshi KERA..jpg" class="avatar" />
		<p class="designation">Professor Satoshi Kera</p>
		<p class="bio">Department of Photo-Molecular Science, Photo-Molecular Science III, Institute for Molecular Science,<br> Myodaiji, Okazaki, Japan </p>
	</div>
</div> 
</a>
   
    </div>

    <div class="key" >
    <h1>Plenary Speaker</h1>
    <a href="https://www.tus.ac.jp/ridai/doc/ji/RIJIA01Detail.php?act=pos&kin=ken&diu=6b37&pri=en" id="key">
    <div class="speakers" >
	<div class="card-borders">
		<div class="border-top"></div>
		<div class="border-right"></div>
		<div class="border-bottom"></div>
		<div class="border-left"></div>
	</div>
	<div class="card-content">
		<img src="./assets/images/plenary.jpg" class="avatar" id="ava" />
		<p class="designation">Associate Professor Nakayama Yasuo</p>
		<p class="bio">Faculty of Science and Technology,<br> Department of Pure and Applied Chemistry,<br> Tokyo University of Science
    </p>
	</div>
</div> 

</a>

</div>
<div class="sample">
 
    <h1>Spotlight on Excellence
    </h1>
    <div class="card-container">
    <a href="https://www.kindai.ac.jp/science-engineering/english/education/teachers/detail/07_tanaka_senku.html" id="key">
    <div class="speakers1"  >
	<div class="card-borders">
		<div class="border-top"></div>
		<div class="border-right"></div>
		<div class="border-bottom"></div>
		<div class="border-left"></div>
	</div>
	<div class="card-content">
		<img src="./assets/images/Senku TANAKA.jpg" class="avatar" />
		<p class="designation" >Associate Professor Tanaka Senku </p>
		<p class="bio">Faculty of Science and Engineering, Graduate School of Science and Engineering, KINDAI University, Japan
    </p>
	</div>
</div> 

</a>
<a href="https://uom.lk/staff/Narayana.M" id="key">
    <div class="speakers1"  >
	<div class="card-borders">
		<div class="border-top"></div>
		<div class="border-right"></div>
		<div class="border-bottom"></div>
		<div class="border-left"></div>
	</div>
	<div class="card-content">
		<img src="./assets/images/Mahinsasa Narayana.jpg" class="avatar" />
		<p class="designation" >Prof. Mahinsasa Narayana </p>
		<p class="bio">Professor, Department of Chemical and Process Engineering, Faculty of Engineering, University of Moratuwa
    </p>
		
	</div>
</div> 

</a>
<a href="https://theorg.com/org/codegen-international/org-chart/dr-prasanga-gayanath-mantilaka" id="key">
    <div class="speakers1">
	<div class="card-borders">
		<div class="border-top"></div>
		<div class="border-right"></div>
		<div class="border-bottom"></div>
		<div class="border-left"></div>
	</div>
	<div class="card-content">
		<img src="./assets/images/Prasanga Mantilaka.jpg" class="avatar" />
		<p class="designation" >Dr. Prasanga Mantilaka</p>
		<p class="bio">Director, Scientific Research And<br> Innovation, <br>CodeGen International</p>
		
	</div>
</div> 

</a>
<a href="https://www.sab.ac.lk/staff-directory/351" id="key">
    <div class="speakers1"  >
	<div class="card-borders">
		<div class="border-top"></div>
		<div class="border-right"></div>
		<div class="border-bottom"></div>
		<div class="border-left"></div>
	</div>
	<div class="card-content">
		<img src="./assets/images/Hasintha Wijesekara.jpg" class="avatar" />
		<p class="designation" >Dr. Hasintha Wijesekara</p>
		<p class="bio">Senior Lecturer,Faculty of Applied Sciences, Sabaragamuwa University of Sri Lanka

    </p>
		
	</div>
</div> 

</a>
<a href="https://www.sab.ac.lk/staff-directory/440" id="key">
    <div class="speakers1"  >
	<div class="card-borders">
		<div class="border-top"></div>
		<div class="border-right"></div>
		<div class="border-bottom"></div>
		<div class="border-left"></div>
	</div>
	<div class="card-content">
		<img src="./assets/images/Eranga Wimalasiri.jpg" class="avatar" />
		<p class="designation" >Dr. Eranga Wimalasiri</p>
		<p class="bio">Head/ Department of Export Agriculture, Faculty of Agricultural Sciences, Sabaragamuwa University of Sri Lanka
    </p>
		
	</div>
</div> 

</a>

 
</div>
</div>

 <div class="sam"></div>
  <div class="team">
    <h1 id='title'>Key Members</h1> 
    <a href="https://www.sab.ac.lk/staff-directory/466" id="link">
    <div class="sectors">
    <div class="sector">
      <div class="imgbox">
        <img src="./assets/images/1694871986410.jpeg" alt="profile" />
      </div>
      <div class="intro-text">
        <h1> Dr. MDKM Gunasena </h1>
      </div>
      <span>Conference Chair</span>
      <div class="social-links">
      
      </div>
    </div>
  </a> 
  <a href="https://www.sab.ac.lk/staff-directory/474" id="link">
    <div class="sector">
      <div class="imgbox">
        <img src="./assets/images/A.M.P.C.Amarasinghe.png " alt="profile" />
      </div>
      <div class="intro-text">
        <h1>Mr. AMPC Amarasinghe </h1>
      </div>
      <span>Conference Co-chair</span>
      <div class="social-links">
      </div>
    </div>
  </a>
  <a href="https://www.sab.ac.lk/staff-directory/339" id="link">
    <div class="sector">
      <div class="imgbox">
        <img src="./assets/images/ERJMDDP Wijesekara.png " alt="profile" />
      </div>
      <div class="intro-text">
        <h1>Mr. ERJMDDP Wijesekara </h1>
        
      </div>
      <span>Conference Secretory</span>
      <div class="social-links">
      </div>
    </div>
  </a>
  
    <div class="sector">
      <div class="imgbox">
        <img src="./assets/images/Abeysinghe Shakya photo.jpg" alt="profile" />
      </div>
      <div class="intro-text">
        <h1>Dr. SS Abeysinghe </h1>
      </div>
      <span>Conference Co-secretory</span>
      <div class="social-links">
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
      </div>
    </div>
   
    </div>
    
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
