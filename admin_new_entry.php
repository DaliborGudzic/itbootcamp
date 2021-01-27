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
    <title>Admin New Entry - MOBILshop</title>
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
?>
    <div class="admin">
    <form action="actions/insert_entry.php" method="GET">
        <br>Brand<input type="text" class="adminEditInsert" name="brand" />
        <br>Model<input type="text" class="adminEditInsert" name="model" />
        <br>Dimensions<input type="text" class="adminEditInsert" name="dimensions" />
        <br>Display<input type="text" class="adminEditInsert" name="display" />
        <br>Front camera<input type="text" class="adminEditInsert" name="front_camera" />
        <br>Back camera<input type="text" class="adminEditInsert" name="back_camera" />
        <br>Chipset<input type="text" class="adminEditInsert" name="chipset" />
        <br>RAM<input type="text" class="adminEditInsert" name="ram" />
        <br>Battery<input type="text" class="adminEditInsert" name="battery" />
        <br>Weight<input type="text" class="adminEditInsert" name="weight" />
        <br>Memory<input type="text" class="adminEditInsert" name="memory" />
        <br>Operating System<input type="text" class="adminEditInsert" name="operating_system" />
        <br>Path to picture<input type="text" class="adminEditInsert" name="pic" />
        <br>Path to HiRes picture<input type="text" class="adminEditInsert" name="hires_pic" />
        <br>Price<input type="text" class="adminEditInsert" name="price" />
        <input id='editClick' type="submit" value="Click to insert entry" />
    </form>
    </div>
<?php
    $ob_website->makeMeAFooter(); 
?>

</body>
</html>