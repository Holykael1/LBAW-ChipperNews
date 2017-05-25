<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');  
  include_once($BASE_DIR .'database/users.php');  
  if (!isset($_POST['comment_id']) || !isset($_SESSION['user_id'])) {
    $_SESSION['error_messages'][] = 'Couldn\'t delete comment, server failure';
    exit;
  }
  try {
    if(deleteComment($_POST['comment_id'])){
        echo 0;
    }
    else echo json_encode(-1);
  } catch (PDOException $e) {
     $_SESSION['error_messages'][] = $e->getMessage();
     exit;
  }
  exit
?>