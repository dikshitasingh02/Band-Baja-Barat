<?php
  session_start();
  unset($_SESSION[$_COOKIE["login"]]);
  setcookie("login","",time()-1);
  header("location:index.php");
  ?>