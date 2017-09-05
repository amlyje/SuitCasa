<?php include 'inc/head.inc.php'; ?>
<link rel="stylesheet" href="css/style.css"> <!-- forside, login og signup -->

<header>
    <a href="index.php" class="back">Back to Frontpage</a>
    <div class="login_buttons">
        <a href="login.php"><button type="button" name="Login">Login</button></a>
        <a href="sign-up.php"><button type="button" name="Sign-up">Sign up</button></a>
    </div>
</header>

<a href="index.php"><h1 class="fp">SuitCasa</h1></a>
<section class="login">
    <input type="text" name="username" value="" placeholder="username">
    <input type="text" name="password" value="" placeholder="password">
    <button type="button" name="login">login</button>
</section>

<section class="background"></section>


<?php include 'inc/footer.inc.php'; ?>
