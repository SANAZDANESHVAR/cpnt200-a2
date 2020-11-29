<?php

  include 'includes/config.php';

  // write query  
  $sql = 'SELECT * FROM customer';

  // make query 
  $result = mysqli_query($conn, $sql);

  // fetch 
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./assets/css/style.css">

<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 

  <title>Customers</title>
  

</head>

<body>
  <div class="my-container">
    <h1>Customers' List</h1>
    <?php  // loop over customers array using foreach?>
    <?php  foreach($customers as $customer){?>

    <div class="my-customers">

      <a href="customer.php?id=<?php echo $customer['id']; ?>">
      <h4>
        <?php echo $customer['last_name']; ?>,

        <?php echo $customer['first_name']; ?> 
        </h4>
      </a> 
      <p>Phone Number: <?php echo $customer['phone']; ?> </p>
      <p>Email: <?php echo $customer['email']; ?> </p>
    </div>
  <?php  } ?>



</body>
</html>
