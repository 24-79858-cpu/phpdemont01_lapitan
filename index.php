<?php 
    include 'pure_php.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3101</title>
</head>
<body>
    <!-- <h1>Hello World</h1>
    <?php echo "<h1> Hello World </h1>" ?> -->

    <h3>
        Username: <u id ="displayusername"><?php echo $username; ?></u>
        <br>
        User ID: <u id ="displayuserid"><?php echo $user_id; ?> </u>
        <br>
        User Address: <u id ="displayuseraddress"><?php echo $user_address; ?></u>
        <br>
        User Number: <u id ="displayusernumber"><?php echo $user_number; ?></u>
        <br>
        User Age: <u id ="displayuserage"><?php echo $user_age; ?></u>
    </h3>

    <button type="button" onclick="greetUser()">Greet User</button>
    
    <script src="external.js">
    </script>

</body>
</html>