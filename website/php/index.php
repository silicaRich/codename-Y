<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/relationship.php";

  /*** EXAMPLE OF A READ ***
    $id = $_GET["id"];
    $expression = new Expression("id", "=", $id);
    $user = Users::read($expression);
    $url = $user->url;
  **************************/
?>
