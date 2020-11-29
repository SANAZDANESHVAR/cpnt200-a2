
<?php
  // include config
  include 'includes/config.php';

  // get id from url
  $id = $_GET['id'];

  // shows a single customer that corresponse to id
  $sql = "SELECT * FROM customer WHERE id='$id'";

  // make query and get result
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" href="./assets/css/main.css">

  <title>Customer</title>
   
</head>


<body>

  <div class="container">
    <div class="customer">

      <h1>
        <?php echo $customer[0]['first_name']; ?>
        <?php echo $customer[0]['last_name']; ?>
      </h1>

      <div class="customer-info">
        <ol class="info">
          <li><p>Date Of Birth:</p></li>  
          <li><p>Driver License number:</p></li>  
          <li><p>Email:</p></li>  
          <li><p>Phone number:</p></li>  
        </ol>
      </div>
          <div class="valid-info">
           <ol class="personsl-info">
           <li><p><?php echo $customer[0]['dob']; ?></p></li>
           <li><p><?php echo $customer[0]['driver_license_number']; ?></p></li>
           <li><p><?php echo $customer[0]['email']; ?></p></li>
           <li><p><?php echo $customer[0]['phone']; ?></p></li>
           </ol>
           </div>
       <a href="index.php"><button>  BACK</button></a>


    </div>
  </div>
</body>
</html>