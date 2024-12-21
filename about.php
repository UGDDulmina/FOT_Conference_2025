<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - ICET 2025</title>
    <link rel="icon" type="image/x-icon" href="assets/images/Logo.png">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./vendor/css/styles.css?v=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google-Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton+SC&family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton+SC&display=swap');
    </style>

</head>
<body>

<?php include './common/navbar.php'; ?>

<section>
    <div id="carouselExampleIndicators" class="carousel slide position-relative" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Foreground container -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3); display: flex; justify-content: center; align-items: center; z-index: 10; pointer-events: none;">
            <h1 style="color: white; font-size: 3rem; font-family: 'Oswald', sans-serif;"> ABOUT ICET 2025</h1>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/1.png" class="d-block w-100" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="assets/images/2.png" class="d-block w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="assets/images/3.png" class="d-block w-100" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="about-container-wrapper">
        <div class="about-container">

            <h1>What is ICET?</h1> <!-- Added chosen topic here -->

            <p>
                <span>International Conference on Emerging Technologies (ICET)</span> is a biennial conference organized by the Faculty of Technology, Sabaragamuwa University of Sri Lanka. It is an open forum for academics, researchers, undergraduates, postgraduate students, and industry professionals to present their research findings in the discipline of science and technology.
            </p>
            <p>
                The first International Conference on Emerging Technologies (ICET) will take place on <strong>2nd of April, 2025</strong>. The conference will feature a range of presentations on multidisciplinary research activities in science and technology, guest speeches, and keynote addresses by leading personalities in both national and international contexts. The conference will be held physically at the faculty premises under the theme of <span>“Technology for sustainable future.”</span>
            </p>
            <p>
                With a diverse array of keynote speakers, panel discussions, workshops, and networking opportunities, ICET is poised to become the premier gathering for thought leaders at the vanguard of emerging technologies. Join us as we embark on this inaugural journey to explore, collaborate, and chart the course for a future defined by innovation at the International Conference on Emerging Technologies.
            </p>
        </div>
    </div>
</section>

<?php include './common/footer1.php'; ?>

<!-- Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
