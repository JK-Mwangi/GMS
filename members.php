<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="JS/bootstrap.min.js"></script>
</head>

<body>
welcome<?php echo $_SESSION['fname'];?>
</body>
</html>