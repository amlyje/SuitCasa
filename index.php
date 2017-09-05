<?php include 'inc/head.inc.php'; ?>
<link rel="stylesheet" href="css/style.css"> <!-- forside, login og signup -->

<!-- FORSLAG TIL MERE -->
<!-- 1. Autocomplete -->
<!-- 2. Add new list -->

<header>
    <a href="index.php" class="back"></a>
    <div class="login_buttons">
        <a href="login.php"><button type="button" name="Login">Login</button></a>
        <a href="sign-up.php"><button type="button" name="Sign-up">Sign up</button></a>
    </div>
</header>

<a href="index.php"><h1 class="fp">SuitCasa</h1></a>
<section class="intro">
    <p>Get inspiration for your next travel packing list and create, save and share your own.</p>
</section>
<section class="frontpage-buttons">
    <a href="#"><button class="dropbtn" type="button" name="Opret pakkeliste">Create your own list</button></a>
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#">Kategori 1 - Amalie</a>
            <a href="charter.php">Charter - Amanda</a>
            <a href="#">Kategori 3 - Søren</a>
            <a href="skiing.php">Skiing - Carsten</a>
        </div>
    </div>
</section>
<section class="background"></section>


<script src="js/frontpage.js" charset="utf-8"></script>
<?php include 'inc/footer.inc.php'; ?>
