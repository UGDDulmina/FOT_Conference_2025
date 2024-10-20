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

    
    
</head>
<body>
    <?php include './common/navbar.php'; ?>
    
  <!-- Hero Section -->

    <section class="hero">
        <p class="main-text" id="animated-text">“Technology for sustainable future”</p>
        <p class="sub-text"> 1<sup>st</sup> International Conference on Emerging Technologies(ICET) 2025</p>
        <p class="sub-text-1"><img src="./assets/icons/calendar.png">1<sup>st</sup> May 2025 </p>
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

   </script>

  <!-- Infinite Scroll -->

   <div class="wrapper">
    <div class="item item1"></div>
    <div class="item item2"></div>
    <div class="item item3"></div>
    <div class="item item4"></div>
   </div>

  <!-- Objective Section -->

   <section class="Object">
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
   </section>
    

   <script type="text/javascript">
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
   
   <?php include './common/footer.php'; ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
