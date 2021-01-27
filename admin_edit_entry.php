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
    <title>Admin Edit Entry - MOBILshop</title>
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
            ?>
            <div class="admin">
            <form action="actions/edit_entry.php" method="GET">
                <br><input type="hidden" class="adminEditInsert" name="id" value="<?=$phone['id'] ?>" />
                <br>Brand<input type="text" class="adminEditInsert" name="brand" value="<?=$phone['brand'] ?>" />
                <br>Model<input type="text" class="adminEditInsert" name="model" value="<?=$phone['model'] ?>" />
                <br>Dimensions<input type="text" class="adminEditInsert" name="dimensions" value="<?=$phone['dimensions'] ?>" />
                <br>Display<input type="text" class="adminEditInsert" name="display" value="<?=$phone['display'] ?>" />
                <br>Front camera<input type="text" class="adminEditInsert" name="front_camera" value="<?=$phone['front_camera'] ?>" />
                <br>Back camera<input type="text" class="adminEditInsert" name="back_camera" value="<?=$phone['back_camera'] ?>" />
                <br>Chipset<input type="text" class="adminEditInsert" name="chipset" value="<?=$phone['chipset'] ?>" />
                <br>RAM<input type="text" class="adminEditInsert" name="ram" value="<?=$phone['ram'] ?>" />
                <br>Battery<input type="text" class="adminEditInsert" name="battery" value="<?=$phone['battery'] ?>" />
                <br>Weight<input type="text" class="adminEditInsert" name="weight" value="<?=$phone['weight'] ?>" />
                <br>Memory<input type="text" class="adminEditInsert" name="memory" value="<?=$phone['memory'] ?>" />
                <br>Operating System<input type="text" class="adminEditInsert" name="operating_system" value="<?=$phone['operating_system']?>" />
                <br>Path to picture<input type="text" class="adminEditInsert" name="pic" value="<?=$phone['pic'] ?>" />
                <br>Path to HiRes picture<input type="text" class="adminEditInsert" name="hires_pic" value="<?=$phone['hires_pic'] ?>" />
                <br>Price<input type="text" class="adminEditInsert" name="price" value="<?=$phone['price'] ?>" />
                <input id='editClick' type="submit" value="Click me" />
            </form>
            </div>
        <?php
    }

$ob_website->makeMeAFooter(); 
 
 ?>

</body>
</html>