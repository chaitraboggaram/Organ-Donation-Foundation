  <form method="POST"><td><input type="submit" value="Update" name="update" id="update" align="right"></td>


  if(isset($_POST['update']))
    {
      echo '<script type="text/javascript"> prompt("Enter the ID") </script>';
      $conn = mysql_connect('localhost', 'root', '');
      if(! $conn )
      {
        die('Could not connect: ' . mysql_error());
      }
      mysql_select_db('organ_transplant');
      $sql = mysql_query("UPDATE `registration` SET `Donated` = 'yes' WHERE `ID` = $id");
      $retval = mysql_query( $sql, $conn );
      if(! $retval )
      {
        die('Could not update data: ' . mysql_error());
      }
      else
      {
        echo '<script type="text/javascript">';
        echo 'alert("Updated data successfully")';
        echo '</script>';
      }
    }