<?php
include 'Model/inscription_model.php';
include 'View/inscription_view.php';

if (!empty($_POST)) {
  $ins = new Manager;
  $ins->add($_POST);
}
