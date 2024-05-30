<?php
  session_start();
  // session_abort();
  echo $_SESSION['login'];
  $_SESSION['login'] = 0;
  echo $_SESSION['login'];
  header("location:/bookstore-client/index.php");
?>