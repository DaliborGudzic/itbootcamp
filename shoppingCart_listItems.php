<?php
    session_start();
    require_once 'include/headerFooter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page - MOBILshop</title>
    <link rel="stylesheet" href="http://localhost:8080/projects/itbootcamp/projekat/css/footer.css">
    <link rel="stylesheet" href="http://localhost:8080/projects/itbootcamp/projekat/css/project.css">
    <link rel="stylesheet" href="http://localhost:8080/projects/itbootcamp/projekat/css/login.css">
    <link rel="stylesheet" href="http://localhost:8080/projects/itbootcamp/projekat/css/cart.css">
    <style>
        @font-face {
            font-family: BigShoulders;
            src: url('http://localhost:8080/projects/itbootcamp/projekat/fonts/BigShouldersInlineDisplay-Light.ttf');
        }
        @font-face {
            font-family: ProximaNova;
            src: url('http://localhost:8080/projects/itbootcamp/projekat/fonts/ProximaNova-Regular.otf');
        }
    </style>
</head>
<body>

<?php 
    $ob_website->makeMeAHeader();
?>
    <div id='shoppingListHeadline'>The list of items you put in your shopping cart. <br>Once you're done shopping, click on proceed to checkout to provide needed details for shipping</div>
    <?php
    if(!isset($_SESSION['cart_items'][0]))
        echo "<div class='shoppingListTable'>Your shopping cart is empty. Please go shop and than come back here.</div>";
    else{ ?>
    <div class="shoppingListTable">
        <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <tr></tr>
            <tr></tr>
        </thead>
        <tbody>
        <?php
        $sum = 0;
            foreach($_SESSION['cart_items'] as $item){
                echo '<tr>';
                    echo '<td id="firstTD">'.$item['name'].'</td>';
                    echo '<td>'.$item['price'].'</td>';
                    echo '<td>'.$item['quantity'].'</td>';
                    echo '<td>'.($item['price'] * $item['quantity']).'</td>';
                    echo '<td><a href="actions/add_entry_in_cart.php?id='.$item['id'].'"><div class="addBtn">Add</div></a></td>';
                    echo '<td><a href="actions/delete_entry_from_cart.php?id='.$item['id'].'"><div class="delBtn">Delete</div></a></td>';
                echo '<tr>';
                $sum+=($item['price'] * $item['quantity']);
            }
        ?>
        </tbody>
        <tfoot>
            <tr></tr>
            <tr></tr>
            <tr>
            <th id="grandeTotal" colspan="3">Grande TOTAL:&nbsp&nbsp</th>
            <td><?=$sum?></td>
            </tr>
        </tfoot>
        </table>
    </div>
<?php
    }
    $ob_website->makeMeAFooter();
?>
<script type="text/javascript" src="http://localhost:8080/projects/itbootcamp/projekat/js/searchANDmodal.js"></script>
</body>

</html>
