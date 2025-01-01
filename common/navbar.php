<?php
//navbar.php
?>
<nav class="ui-nav">
  <div class="ui-left">
  <a href="index.php">
  <img src="assets/images/Logo_with_name.png">
</a>
  </div> 
  <ul class="nav-area">
    <li class="nav-item"><a class="nav-link active" href="./index.php">HOME</a></li>
    <li class="nav-item"><a class="nav-link" href="./about.php">ABOUT</a></li>
    <li class="nav-item"><a class="nav-link" href="./schedule.php">SCHEDULE</a></li>
    <li class="nav-item"><a class="nav-link" href="./team.php">TEAM</a></li>
    <li class="nav-item"><a class="nav-link" href="./submit-paper.php">SUBMISSION</a></li>
    <li class="nav-item"><a class="nav-link" href="./contact.php">CONTACT</a></li>
    <li class="nav-item"><a class="nav-link" href="./gallery.php">GALLERY</a></li>
  </ul>
<button class="ui-toggle" onclick="toggleMenu()">☰</button>
</nav>

<script>
  function toggleMenu() {
    const menu = document.querySelector('.nav-area');
    menu.classList.toggle('show');
  }
</script>


