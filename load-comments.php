<?php
  require_once("dbh.php");

  $commentsNewCount = $_POST["commentsNewCount"];

  $sql =  "SELECT * FROM comments LIMIT $commentsNewCount";
  if($stmt = mysqli_prepare($conn, $sql)) {
    mysqli_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div>";
      echo "<p id='author'>" . $row["author"] . "</p>";
      echo "<p id='comment'>" . $row["comment"] . "</p>";
      echo "</div>";
      echo "<hr>";
    }
  } else {
    echo "err";
  }
 ?>
