<?php if (isset($_SESSION)) {
  if ($_SESSION['sex'] == "Homme") {
    $_SESSION['mrms'] = "Mr";
  }
  elseif ($_SESSION['sex'] == "Femme") {
    $_SESSION['mrms'] = "Mme";
  }
  else {
    $_SESSION['mrms'] = "On sais pas ce que vous etes !";
  }
} ?>

<header>
  <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand" href="
      <?php echo (isset($_SESSION)) ? "index.php?page=membre_controller" : "index.php"; ?>">
        <img src="View/image/images.png" width="30" height="30"
        class="d-inline-block align-top" alt="logo">
        My meetic <?php if(isset($_SESSION)){
        echo " | Bienvenue ".$_SESSION['mrms'].". ".$_SESSION['nom'].
        " ".$_SESSION['prenom'];}?>
      </a>
      <?php if (isset($_SESSION)) {
      ?>
      <script src="Model/menu.js"></script>
      <nav class="btn menu">Menu
        <ul class="list">
          <li><button type="button" class="btn btn-primary profil">
            Profile</button></li>
          <li><button type="button" class="btn btn-primary recherche">
            Recherche</button></li>
          <li><button type="button" class="btn btn-primary Messages">
            <a href="index.php?page=message_controller">Messages</a></button></li>
        </ul>
      </nav>
      <div class="">
        <a href="Model/deconnexion_model.php">
        <button class="btn btn-light" type="button" name="button">
          Deconnexion</button>
        </a>
      </div>
      <?php
      } ?>
  </nav>
</header>
