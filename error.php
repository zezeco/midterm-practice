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
            <h1>My Shop</h1>
        </div>

        <div id="main">
            <h2 class="top">Error</h2>
            <p><?php echo $error; ?></p>
        </div>

        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?> My Shop, Inc.
            </p>
        </div>

    </div><!-- end page -->
</body>
</html>