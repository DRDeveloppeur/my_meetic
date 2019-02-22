<?php
include 'Model/membre_model.php';
include 'Model/filter_model.php';

if (!empty($_POST)) {
  $resulte = new Search;
  $result = $resulte->Membres($_POST);
  $nbrresult = (int) count($result);
}
else {
  $resulte = new Search;
  $result = $resulte->MembresAll();
  $nbrresult = count($result);
}

include 'View/membre_view.php';
