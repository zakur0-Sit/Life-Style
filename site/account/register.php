<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<header>
         <a href="http://site/home/main.html" class="ico"><img src="assets/css/img/life.jpeg" class="ico"></a></h3>
</header>
<body>

    <!-- Registration form -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Name</label>
        <input type="text" name="full_name" placeholder="Enter your name">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter login">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email adress">
        <label>Profile photo</label>
        <input type="file" name="avatar" value="select">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <label>Confirm password</label>
        <input type="password" name="password_confirm" placeholder="Confirm password">
        <button type="submit">Create</button>
        <p>
            Already have an account? - <a href="http://site/account/main.php">autorisation</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>