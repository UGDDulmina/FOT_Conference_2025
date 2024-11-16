<?php
//navbar.php
?>

<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
   
    <a class="navbar-brand" href=""><img src="assets/images/Logo_with_name.png">
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./about.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./schedule.php">SHEDULE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./team.php">TEAM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./submit-paper.php">SUBMISSION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./contact.php">CONTACT</a>
        </li>
      </ul>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav> -->
<nav class="ui-nav">
  <div class="ui-left">
  <img src="assets/images/Logo_with_name.png">
  </div> 
  <ul class="nav-area">
    <li class="nav-item"><a class="nav-link active" href="./index.php">HOME</a></li>
    <li class="nav-item"><a class="nav-link" href="./about.php">ABOUT</a></li>
    <li class="nav-item"><a class="nav-link" href="./schedule.php">SCHEDULE</a></li>
    <li class="nav-item"><a class="nav-link" href="./team.php">TEAM</a></li>
    <li class="nav-item"><a class="nav-link" href="./submit-paper.php">SUBMISSION</a></li>
    <li class="nav-item"><a class="nav-link" href="./contact.php">CONTACT</a></li>
    <li class="nav-item"><a class="nav-link" href="./contact.php">GALLERY</a></li>
  </ul>
<button class="ui-toggle" onclick="toggleMenu()">☰</button>
</nav>

<script>
  function toggleMenu() {
    const menu = document.querySelector('.nav-area');
    menu.classList.toggle('show');
  }
</script>


