<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - URSTech 2025</title>
    <link rel="icon" type="image/x-icon" href="assets/images/Logo 2.png">

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

    <section >

        <div id="carouselExampleIndicators" class="carousel slide position-relative" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Foreground container -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3); display: flex; justify-content: center; align-items: center; z-index: 10; pointer-events: none;">
                <h1 style="color: white; font-size: 3rem; font-family: 'Oswald', sans-serif;">CONTACT US</h1>
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



        <div class="d-flex " style="background-color: #f0f0f0;">
        <div class="p-2 col-md-6  p-4 m-4">
        <form action="process_form.php"  method="post" >
            <div class="mb-3">
            <div class="fw-semibold">
                <label for="name" class="form-label">Full Name</label>
            </div>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <div class="fw-semibold"><label for="email" class="form-label">Email Address</label></div>

                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
            <div class="fw-semibold">
                <label for="subject" class="form-label">Subject</label>
            </div>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
            </div>
            <div class="mb-3">
            <div class="fw-semibold">
                <label for="message" class="form-label">Message</label>
            </div>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        
</div>
</form>
<div>
    <div class="p-2 m-4 ">
    <div class="col" style="margin-left: 50px;">
                    <p class="subpage-paragraph">
			    Faculty of Technology,</br>
                            Sabaragamuwa University of Sri Lanka,</Br>
                            P.O. Box 02,</Br>
                            Belihuloya,</Br>
                            70140,</Br>
                            Sri Lanka
                    </p>

                    <p class="subpage-paragraph">
                        <!-- <strong>Email</strong>: <a href="mailto:icet@tech.sab.ac.lk">icet@tech.sab.ac.lk</a> <br> -->
                        <strong>Phone</strong>: Conference Chair: 0771730708 Dr. Kasundi Gunasena
                       <br> Conference Secretary: 0770812383 Mr. Dasith Wijesekara
                    </p>
                    <div class="footer-social-links" style="margin-bottom: 20px;">
                        <!-- <a href="https://www.facebook.com/apsurs.sab.ac.lk" target="_blank"><div class="social-link"><i class="fab fa-facebook-f fa-sm"></i></div></a>
                        <a href="https://www.linkedin.com/company/apsurs-2022/?viewAsMember=true" target="_blank"><div class="social-link"><i class="fab fa-linkedin-in"></i></div></a> -->
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15849.807123347699!2d80.787219!3d6.714591!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92bb8770edf29b53!2zU2FiYXJhZ2FtdXdhIFVuaXZlcnNpdHkgb2YgU3JpIExhbmthLCDgt4Hgt4rigI3gtrvgt5Mg4La94LaC4Laa4LePIOC3g-C2tuC2u-C2nOC2uOC3lOC3gCDgt4Dgt5Lgt4Hgt4rgt4Dgt4Dgt5Lgtq_gt4rigI3gtrrgt4_gtr3gtro!5e0!3m2!1sen!2slk!4v1617973850526!5m2!1sen!2slk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
    </div>

</div>
</div>
    </section>


    </section>

    <?php include './common/footer1.php'; ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
