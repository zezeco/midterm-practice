<?php 
    require_once('database.php');


    // Get current customers
    $customerID = 1002;
    $query = "SELECT firstName, lastName FROM customers where customerID=? order by lastName";
    $customers = $db->prepare($query); 
    $customers->bind_param('s', $customerID);
    $customers->execute();
    $customers->store_result();
    //store results as variables
    $customers->bind_result($firstName, $lastName);
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>customer service</h1>
    </div>

    <div id="main">

        <div id="content">
            <!-- display a table of Customers -->
            
                <?php while ($customers->fetch()){
                    echo "<p>First Name: ".$firstName."";
                    echo "<br />Last Name: ".$lastName;
                } ?>
                  
        </div>
    </div>
    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> My Shop, Inc.</p>
    </div>

    </div><!-- end page -->
<?php
    $customers->free_result();
    $db->close();
?>
</body>
</html>