<!DOCTYPE html>
<html lang="en">

  <head>
    <title>php-coding</title>
  </head>
    
  <body>
    <h1>Server from php</h1>

    <?php 
      echo <<<_SECTION

        <p style="border-style: solid; border-top-style: solid; width: 500px;">
          <br>
          \$cd ~/someDirectory<br>
          \$php -S localhost:8484<br>
          <br>
        </p>

        <b>
          RESULT:
          <br>
        </b>

      _SECTION;
    ?>

    <?php
      echo "Hello from index.php!";
      echo "<br>";
    ?>

    <p>

      Start code from javascript:
      <br>
      <script type="text/javascript">
        document.write("Today is " + Date() );
      </script>
      <br>
      End code from javascript.
      <br>
    </p>

    <p>
      <hr>
      Start code from code.php:
      <br>
      <?php 
        include "code2.php"
      ?>
      <br>
      End code from code.php.
      <hr>
    </p>



  </body>

</html>
