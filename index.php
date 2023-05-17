<!DOCTYPE html>
<html lang="en">
  <?php
    session_start();
    if(isset($_SESSION['name'])) {
      echo '<link rel="stylesheet" href="/css/app.css">';
      echo "<p class='greeting'>Приветствуем Вас, {$_SESSION['name']}!</p>";
      echo "<a href='exit.php'><<< Назад</a>";
    } else {
    include 'index.html';
    }
  ?>



