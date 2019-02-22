<?php
if (isset($_GET['page']) && is_file('Controller/'.$_GET['page'].'.php')) {
  include 'Controller/'.$_GET['page'].'.php';
}
else {
  include 'Controller/connexion_controller.php';
}
