<?php require_once("dbh.php") ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <div id="page-wrapper">
    <div id="comments"></div>
    <div id="button-wrapper"><button id="loadBtn">Load More Comments</button></div>
  </div>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>

    $(function() {

      var commentsCount = 2;
      $("#comments").load("load-comments.php", {
          commentsNewCount: commentsCount
        });

      $("#loadBtn").click(function() {
        commentsCount += 2;
        $("#comments").load("load-comments.php", {
          commentsNewCount: commentsCount
        });
      });
      

    });

  </script>
  </body>
</html>
