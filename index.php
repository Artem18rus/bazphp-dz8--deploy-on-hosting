<?php
  session_start();
  if(isset($_SESSION['name'])) {
    echo "<p>Приветствуем Вас, {$_SESSION['name']}!</p>";
    echo "<a href='exit.php'><<< Назад</a>";
  } else {
    include 'index.html';
  }