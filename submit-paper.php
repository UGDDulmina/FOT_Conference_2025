<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submissions - ICET 2025</title>
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
    <section>
        <h2>Submit Your Research Paper</h2>
        <form action="submit-paper.php" method="POST" enctype="multipart/form-data">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="paper">Upload Paper:</label>
            <input type="file" id="paper" name="paper" required><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Research Conference</p>
    </footer>

    <?php include './common/footer.php'; ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $paper = $_FILES['paper']['name'];}
    
    // Upload logic here, e.g., move file to a directory move_uploaded 

?>
