<?php

@include '../components/connect.php';

session_start();

if(isset($POST['submit'])) {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING)
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body style="padding-left: 0;">

    <!-- admin login section starts -->
    <section class="form-container">
        <form action="" method="POST">
            <h3>login now</h3>
            <p>default username = <span>admin</span> & password = <span>test</span></p>
            <input type="text" class="box" placeholder="Enter your username" name="name" oninput="this.value = this.value.replace(/\s\g, '')" maxlength="20" required>
            <input type="password" class="box" placeholder="Enter your password" name="pass" oninput="this.value = this.value.replace(/\s\g, '')" maxlength="20" required>
            <input type="submit" name="submit" class="btn" value="login now">
        </form>
    </section>


    <!-- admin login section ends -->














    <!-- custom js file link -->
    <script src="../js/admin_script.js">
    </script>
</body>
</html>