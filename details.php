<?php
    session_start();
    require_once 'include/headerFooter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed view - MOBILshop</title>
    <link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
    <style>
        @font-face {
            font-family: BigShoulders;
            src: url('fonts/BigShouldersInlineDisplay-Light.ttf');
        }
        @font-face {
            font-family: ProximaNova;
            src: url('fonts/ProximaNova-Regular.otf');
        }
    </style>
</head>
<body>

<?php 
    $ob_website->makeMeAHeader();  
    $ob_website->mobile_brands();
    $ob_website->makeMeAFooter();
?>
<script type="text/javascript" src="js/searchANDmodal.js"></script>
</body>
</html>