<?php include 'inc/head.inc.php'; ?>

<section id="suitcasa"><section id="landing-screen">
  <header>
      <a href="index.php" class="back"></a>
      <div class="login_buttons">
          <a href="#"><button type="button" name="Login">Login</button></a>
          <a href="#"><button type="button" name="Sign-up">Sign up</button></a>
      </div>
  </header>
  <a href="index.php"><h1 class="fp animated jackInTheBox">SuitCasa</h1></a>
  <section class="intro animated zoomIn">
      <p>Get inspiration for your next travel packing list and create, save and share your own.</p>
  </section>
  <section class="frontpage-buttons">
      <a href="#" v-on:click="display_createNew"><button id="screenchange" class="dropbtn" type="button" name="Opret pakkeliste">Create your own list</button></a>
      <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Inspire me!</button>
          <div id="myDropdown" class="dropdown-content">
              <a href="#" v-on:click="display_cityHoliday">City Holiday</a>
              <a href="#" v-on:click="display_charter">Charter</a>
              <a href="#" v-on:click="display_skiing">Skiing</a>
          </div>
      </div>
  </section>
  <section class="background"></section>
</section>
</section>
<?php  include 'createnew.php' ?>
<?php  include 'skiing.php' ?>
<?php  include 'charter.php' ?>
<?php  include 'cityHoliday.php' ?>

<?php include 'inc/footer.inc.php'; ?>
