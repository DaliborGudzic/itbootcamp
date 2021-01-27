<?php 
    session_start();
    require_once 'include/headerFooter.php';
    require_once 'db/db_connection.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page - MOBILshop</title>
    <link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
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
    
    $id = ($_GET['id'])?? '';

    if($id !== ''){
        $phone = $db->getPhone($id);
        echo "<div class='adminDelete'>";
            echo "Are you sure you want to delete this entry: <b>".$phone['brand']." ".$phone['model']."?</b>";
    }
    ?>
    <form action="actions/delete_entry.php" method="POST">
        <input type="hidden" name="id" value="<?=$id?>" />
        <input type="submit" name="clickDelete" value="Click to delete" />
    </form>
    <?php
    echo "</div>";
    $ob_website->makeMeAFooter(); 
 
 ?>

</body>
</html>