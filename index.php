<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICET 2025</title>
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.png">
   
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./vendor/css/styles.css">
    
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
 
 <div class="wrapper banner">

 <!-- Landing Page -->

   <div id="text-wrapper">
          
        <div id="particles-container1" class="particles-container"><div class='shape1' ></div></div>
        <div id="particles-container2" class="particles-container"><div class='shape2'></div></div>
        
        <!-- <img src="./assets/icons/1.gif" alt="" id='gif1'>
        <img src="./assets/icons/2.gif" alt="" id='gif2'>
        <img src="./assets/icons/3.gif" alt="" id='gif3'>
        <img src="./assets/icons/4.gif" alt="" id='gif4'> -->
       
        <p id='para1'>International Conference on Emerging Technologies (ICET) 2025</p> 
        <p id='para2' >"Technology for sustainable future"</p>
        <p id='para'><img src="./assets/icons/calendar-check (1).png"> 1<sup>st</sup> May 2025 </p>
        <p id='para'><img src="./assets/icons/map (1).png"> Faculty of Technology, Sabaragamuwa University of Sri Lanka </p>
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

<div class="wrapper ">
   
  <div class="tracks">
    
  <h1>Tracks</h1>
    <!-- Infinite Scroll -->

   <div class="Infinite-wrapper">
    <div class="item item1"><div class="inner inner1"></div></div>
    <div class="item item2"><div class="inner inner2"></div></div>
    <div class="item item3"><div class="inner inner3"></div></div>
    <div class="item item4"><div class="inner inner4"></div></div>
   </div>
  </div>
</div>
<div class="wrapper">
  <div class="key">
    <h1>Keynote Speaker</h1> 
    <div class='box'>
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
    </div>
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
  </div>
</div>
<div class="wrapper ">
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
  
</div>
<div class="wrapper ">
  <div class="gallary">
    <h1>Gallary</h1>
     
  </div>
</div>
<div class="wrapper ">
  <div class="sponsers">
    <h1>Sponsers</h1>
     
  </div>
</div>


    
  <!-- Hero Section -->

    <!-- <section class="hero">
        <p class="main-text" id="animated-text">“ Technology for sustainable future ”</p>
        <p class="sub-text">International Conference on Emerging Technologies (ICET) 2025</p>
        <p class="sub-text-1"><img src="./assets/icons/calendar.png"> 1<sup>st</sup> May 2025 </p>
        <p class="sub-text-1"><img src="./assets/icons/placeholder.png"> Faculty of Technology, Sabaragamuwa University of Sri Lanka </p>
      <div class="content">
          <img src="./assets/images/Logo_with_name.png" alt="Conference Logo">
          <div class="text-box">
          <p>International Conference on Emerging Technologies (ICET) is an annual/biennial conference organized by the Faculty of Technology, Sabaragamuwa University of Sri Lanka. It is an open forum for academics, researchers, undergraduates and postgraduate students and industry professionals, to present their research findings in the discipline of science and technology.</p>
         </div> 
         <div >
               <button class="button">Registration</button>
         </div>
      </div>
   </section>
   <script>
      document.addEventListener("DOMContentLoaded", () => {
      const textElement = document.getElementById("animated-text");
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

   </script> -->

   <!-- <section class="demo">
    <div class="super">
       

    </div>

   </section> -->

  <!-- Infinite Scroll -->

   <!-- <div class="wrapper">
    <div class="item item1"></div>
    <div class="item item2"></div>
    <div class="item item3"></div>
    <div class="item item4"></div>
   </div> -->

  <!-- Objective Section -->

   <!-- <section class="Object">
     <div class="container reveal">
       <h2>Our Objectives</h2>
         <div class="cards">
         <div class="text-card">
          <h3>Promote Research and Innovation</h3>
          <p>Provide a platform for academics, researchers, and students to present their research findings in science and technology, encouraging innovation and advancements in these fields.</p>
         </div>
         <div class="text-card">
          <h3>Bridge Academia and Industry</h3>
          <p>Strengthen the connection between academia and industry by encouraging the application of research to real-world technological challenges and innovations, fostering impactful industry solutions.</p>
         </div>
         <div class="text-card">
          <h3>Foster Collaboration</h3>
          <p>Facilitate networking and collaboration between professionals, academics, and industry leaders at both national and international levels, promoting partnerships for future projects and technological development.</p>
         </div>
      </div>
     </div>
   </section> -->
    

   <!-- <script type="text/javascript">
    window.addEventListener('scroll', reveal);

    function reveal(){
      var reveals = document.querySelectorAll('.reveal');

      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight -revealpoint){
          reveals[i].classList.add('active');
        }
        else{
          reveals[i].classList.remove('active');
        }
      }
    }
   </script>
    -->
    

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
