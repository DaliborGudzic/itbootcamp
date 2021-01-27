<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] .'/projects/itbootcamp/projekat' . '/include/headerFooter.php';
    require_once $_SERVER['DOCUMENT_ROOT'] .'/projects/itbootcamp/projekat' . '/db/search.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page - MOBILshop</title>
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
    // <div class="discount_news">NEW YEAR DISCOUNT FOR ITBOOTCAMP PARTICIPANTS! Click to get 120% discount coupon now...or not bwuhahahahaha</div>
    $ob_website->makeMain();
    $ob_website->makeMeAFooter();
?>
<script type="text/javascript" src="js/searchANDmodal.js"></script>

</body>

</html>