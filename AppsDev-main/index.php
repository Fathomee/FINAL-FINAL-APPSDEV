<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>kiosk</title>
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="validation/validation.css">
 <link rel="stylesheet" href="layout/school-layout.css">
 <link rel="stylesheet" href="sidebar/sidebar.css">
 <link rel="stylesheet" href="layout/zoom.css">
</head>

<body>
<?php include 'validation/loginValidation.php';?>
 <?php include 'sidebar/sidebar.php';?>
 <?php include 'layout/school-layout.php';?>
 <?php include 'layout/zoom.php';?>
 <?php include 'mock/help-detail.php';?>
 <?php include 'validation/validation.php';?>
 <script src="sidebar/sidebar.js"></script>
 <script src="layout/zoom.js"></script>
 <script src="validation/validation.js"></script>
 <script src="validation/timer.js"></script>
</body>

</html>