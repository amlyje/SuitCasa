<?php include 'inc/head.inc.php'; ?>

<header>
    <a href="index.php" class="back">Back to Frontpage</a>
    <div class="login_buttons">
        <a href="login.php"><button type="button" name="Login">Login</button></a>
        <a href="sign-up.php"><button type="button" name="Sign-up">Sign up</button></a>
    </div>
</header>

<a href="index.php"><h1 class="fp">SuitCasa</h1></a>
<section class="sign-up">
    <input type="text" name="username" value="" placeholder="Name">
    <input type="text" name="password" value="" placeholder="Password">
    <input type="email" name="email" value="" placeholder="Email">
    <button type="button" name="login">Click here to sign up!</button>
</section>

<section class="background"></section>


<?php include 'inc/footer.inc.php'; ?>
