<?php
  session_start();
  if (isset($_SESSION['User_Name']) || isset($_SESSION['Email_id'])) {
    // Delete the session vars by clearing the $_SESSION array
    unset($_SESSION['User_Name']);
    unset($_SESSION['Email_id']);

    session_destroy();
    header('Location: index.php');
  }
?>