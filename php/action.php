<?php

session_start();

  require_once "dbConfig.php";
 
  if (isset($_POST['query'])) {
      $query = "SELECT * FROM Book WHERE AuthorName LIKE '{$_POST['query']}%' LIMIT 50";
      $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_array($result)) {
          $_SESSION['id'] = $res["id"];

        echo"
          <ul>
              <li>
                <img src='" . $res['img'] . "' alt=''>
                <a class='name_book'  href='bookdetails.php'> " . $res['BookTitle'] . "</a>
                <br>
                <a class='name_Ashoz'  href='bookdetails.php'>Ashoz:" . $res['AuthorName'] . "</a>
              </li>
            </ul>

            ";
      }
    } else {
      echo "
      <div class='alert alert-danger mt-3 text-center' role='alert'>
          Song not found
      </div>
      ";
    }
  }
?>