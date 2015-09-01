
<!--Include PHP file || Connection to Database-->
<?php
include 'database.php';
?>
<!--Grab PHP from Database SQL langugage-->
<?php
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>JS Shoutbox</title>
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <div id="container">
      <header>
        <h1><span>JS Shoutbox</span></h1>
      </header>
      <div id="shouts">
        <ul>
                      <!--   Insert MySQL datbase into HTML     -->
         <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
          <li><?php echo $row['name']; ?>: <?php echo $row['shout']; ?> [<?php echo $row['date']; ?>]</li>
              <?php endwhile; ?>
        </ul>
      </div>
      <footer>
        <form>
          <label>Name: </label>
          <input type="text" id="name" placeholder="Name">
          <label>Shout Text: </label>
          <input type="text" id="shout" placeholder="Enter your message here">
          <input type="submit" id="submit" value="SHOUT!" >
        </form>
      </footer>
    </div>
  </body>
</html>


<!--Video Walkthrough on Lecture 25 || 9min in... -->
