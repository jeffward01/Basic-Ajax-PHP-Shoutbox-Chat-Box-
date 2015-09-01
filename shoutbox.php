<?php include 'database.php';?>

<?php
if(isset($_POST['name']) && isset($_POST['shout'])){
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $shout = mysqli_real_escape_string($connection, $_POST['shout']);
  $date = mysqli_real_escape_string($connection, $_POST['date']);

    //Set Timezone
    date_default_timezone_set('America/New_York');
    $date = date('h:i:s a',time());
    
    
    //Query for Database
    $query = "INSERT INTO shouts (name, shout, date) VALUES ('$name','$shout','$date')";
  
    //Check for errors
    if(!mysqli_query($connection, $query)){
      echo "Error: ".mysqli_error($connection);
    
    } else {
      echo '<li>'.$name.": ".$shout.' ['.$date.'] </li>';
    } //End if
    
} //End if


?>
