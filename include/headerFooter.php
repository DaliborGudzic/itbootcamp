<?php

require_once $_SERVER['DOCUMENT_ROOT'] .'/projects/itbootcamp/projekat' . '/db/db_connection.php'; 

class Website{
    function makeMeAFooter(){
        echo '<div class="footer">';
        echo '<footer>';
            echo '<div class="footerContainer">';
                echo '<div class="row">';
                    echo '<div class="footerItem">';
                        echo '<h3>Services</h3>';
                        echo '<ul>';
                            echo '<li><a href="#">Cellphone sale</a></li>';
                            echo '<li><a href="#">Cellphone repair</a></li>';
                            echo '<li><a href="#">Mobile app development</a></li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="footerItem">';
                        echo '<h3>About</h3>';
                        echo '<ul>';
                            echo '<li><a href="#">Company</a></li>';
                            echo '<li><a href="#">Team</a></li>';
                            echo '<li><a href="contactPage.php">Contact us</a></li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '<div class="footerItem">';
                        echo '<h3>Resources</h3>';
                        echo '<ul>';
                            echo '<li><a href="#">Our story</a></li>';
                            echo '<li><a href="#">Company certificate</a></li>';
                            echo '<li><a href="#">Tax statement</a></li>';
                        echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                echo '<p class="copyright">MOBILshop © 2021</p>';
            echo '</div>';
        echo '</footer>';
    echo '</div>';

    }
    function makeMeAHeader(){
        global $db;
        ?>
        <header class="header">
        <span class="topHeader1">contact us: info@itbootcamp.kim</span>
        <span class="topHeader2" style="width:auto;">&emsp;|&emsp;Register</span>
        <span class="topHeader3" onclick="<?php  
                                                if(isset($_SESSION['user_id']) || isset($_COOKIE['user_id'])){
                                                    echo "document.getElementById('logout').style.display='block';";
                                                }else{
                                                    echo "document.getElementById('login').style.display='block';";  
                                                }?>"><?php
            // Ako smo ukogovani prikazujemo ime korisnika, u suprotnom Login
            if(isset($_SESSION['user_id']) || isset($_COOKIE['user_id'])){
                echo $_SESSION['username'].":&nbsp logout";
            }else{
                echo "Login";
            } ?>
        </span>
        </header>
        
        <div id="login" class="modal">
            <form action="verifyLogin.php" method="POST" class="modal-content">
                <span onclick="document.getElementById('login').style.display='none'" class="closeX" title="Close Modal">&times;</span>
                <div class="loginContainer">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter username" name="username" required />
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter password" name="password" required />

                    <button type="submit">Login</button>
                    <label class="rememberBox">
                        <input type="checkbox" name="chkBox" value="chkBox"/> Remember me
                    </label>
                </div>
                <div class="loginContainer2">
                    <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="password">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <div id="logout" class="modal2">
            <span onclick="document.getElementById('logout').style.display='none'" class="closeX" title="Close Modal">&times;</span><br>
            <button><a href='logout.php'>Logout</a></button>
        </div>
        <?php
        echo '<div class="header2">';
            echo '<div id="logo"><img src="icons/mobilecart.svg" alt="mobCart" height="50px" width="50px" /> <span id=\'mobil\'>MOBIL</span>Shop</div>';
            if(substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/")+1) == 'index.php'){
                echo '<div id="infoDiv">';
                echo "<p class='infoDivHeadline'>Check our lates additions!</p><p class='infoDivBody'>Over 200 models available at any time. Check with your local dealer for shipping information</p>";
                echo "<div id='infoBtn'>Latest additions</div><div id='infoBtn2'>Best discounts</div>";
                echo '</div>';
            }
        echo '</div>';
        
        echo '<div class="menu">';
            echo '<ul>';
                echo "<li><a href='index.php'>&nbsp[&nbsp</pre>Home&nbsp]&nbsp</a></li>";
                echo "<li class='submenu'><a href='details.php?brand=''>Phones</a>";
                    echo '<ul>';
                        $arr_brands = $db->getBrands();
                        foreach($arr_brands as $brand){
                            echo "<li class='submenu_item'><a href='details.php?brand=".$brand['brand']."'>".$brand['brand']."</a></li>";
                        }
                    echo '</ul>';
                echo '</li>';
                echo "<li><a href='#'>Tablets</a></li>";
                echo "<li><a href='#'>Accessories</a></li>";
                echo "<li><a href='#'>Headphones</a></li>";
                // TODO check!!!
                if(isset($_SESSION['user_id']) || isset($_COOKIE['user_id'])){
                    echo "<li style='opacity:0.5;color:gray;'><a href='admin.php'>admin page</a></li>";
                }else{
                    echo "";
                }
                echo '<span><a href="shoppingCart_listItems.php">Shopping Cart';
                //TODO proveriti za [0] da li je ok
                if(isset($_SESSION['cart_items'][0])){
                    echo " (".count($_SESSION['cart_items']).")";
                }else{
                    echo "";
                }
                echo '</a></span><img class="cart" src="icons/phoneCart2.png" alt="cartPic" height="30px" width="30px" />';
                ?>
                <div id='searchBoxDiv'>
                    <input type='text' class='searchboxInput' placeholder='Search..' id='searchbox' name='searchbox' />
                    <div id='searchResults' name='searchResults'></div>
                </div>
            <?php
            echo "</ul>";
        echo '</div>';
    }
    function makeMain(){
        global $db;
        echo '<div class="main">';
        echo '<div class="threeMainDivs">';
            $arr_phones = $db->get3phones();
            foreach($arr_phones as $phone){
                echo "<a href='details_single.php?id=".$phone['id']."'><div class='phone1'>";
                    // echo "<span class='modelFont'>".$phone['model']."</span><br>";
                    echo "<div class='phone1_pic' style=\"background-image:url('".$phone['pic']."')\"></div>";
                    echo "<div class='phone1_model'>";
                        echo "<span class='modelFont'>".$phone['model']."</span><br><br>";
                        echo "<img class='icons' src='icons/icon-ekran2.png' alt='screenPic' /><br>".$phone['display']."<br><br>";
                        echo "<img class='icons' src='icons/icon-camera2.png' alt='weightPic' /><br>".$phone['back_camera']."<br><br>";
                        echo "<img class='icons' src='icons/icon-processor2.png' alt='cpuPic' /><br>".$phone['chipset']."<br><br>";
                        echo "<img class='icons' src='icons/icon-battery2.png' alt='battPic' /><br>".$phone['battery']."<br><br>";
                    echo "</div>";
                    echo "<div class='addToCartandBuyBtns'><a href=\"actions/addToCart.php?id=".$phone['id']."&model=".$phone['model']."&price=".$phone['price']."\"><button id='buyBtn'>Add to cart</button></a><button id='priceBtn'>".$phone['price']."EUR</button></div>";
                echo "</div></a>";
            }
        echo '</div>';
        echo '<div class="smallPics">';
            $arr_phones = $db->getPhones();
            foreach($arr_phones as $phone){
                echo "<a href='details_single.php?id=".$phone['id']."'><div class='phone2'>";
                    echo "<div class='phone2_model'><span class='phone2_heading'>".$phone['model']."</span></div>";
                    echo "<div class='phone2_pic' style=\"background-image:url('".$phone['pic']."')\"></div>";
                echo "</a><div><a href=\"actions/addToCart.php?id=".$phone['id']."&model=".$phone['model']."&price=".$phone['price']."\"><button class='buyBtn2'>Add to cart</button></a></div></div>";
            }
        echo '</div>';
    echo '</div>';
    }
    function mobile_brands(){
        global $db;
        $b = ($_GET['brand'])?? '';
        echo '<div class="smallPics">';
            $arr_phones = $db->getPhones($b);
            if(!$arr_phones)
                die("Dont have brands for ya");

            foreach($arr_phones as $phone){
                echo "<a href='details_single.php?id=".$phone['id']."'><div class='phone2'>";
                    echo "<div class='phone2_model'><span class='phone2_heading'>".$phone['model']."</span></div>";
                    echo "<div class='phone2_pic' style=\"background-image:url('".$phone['pic']."')\"></div>";
                    echo "</a><div><a href=\"actions/addToCart.php?id=".$phone['id']."&model=".$phone['model']."&price=".$phone['price']."\"><button class='buyBtn2'>Add to cart</button></a></div></div>";
                // echo "</a></div>";
            }
        echo '</div>';
    }
    function getPhone(){
        global $db;
        $id = ($_GET['id'])?? '';
        if(!$id)
            die("Something went wrong! No id provided");

            $phone = $db->getPhone($id);
            if(!$phone)
                die("Look ma\' no phone!");

            echo "<div class='singleMainDiv'>";
            echo "<span class='single_page_model'>".$phone['brand']." ".$phone['model']."</span><br><br>";
            echo "<img src='".$phone['hires_pic']."' width='40%' heigth='40%' />";
                echo "<div class='phone_single'>";
                    echo "<table>";
                        // echo "<tr>";
                        //     echo "<td>Model</td>";
                        //     echo "<td>".$phone['model']."</td>";
                        // echo "</tr>";
                        echo "<tr>";
                            echo "<td>Dimensions</td>";
                            echo "<td>".$phone['dimensions']."</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>Display</td>";
                            echo "<td>".$phone['display']."</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>Selfi camera</td>";
                            echo "<td>".$phone['front_camera']."</td>";
                            echo "</tr>";
                        echo "<tr>";
                            echo "<td>Main camera</td>";
                            echo "<td>".$phone['back_camera']."</td>";
                            echo "</tr>";
                        echo "<tr>";
                            echo "<td>Chipset</td>";
                            echo "<td>".$phone['chipset']."</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>RAM</td>";
                            echo "<td>".$phone['ram']."</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>Battery</td>";
                            echo "<td>".$phone['battery']."</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>Weight</td>";
                            echo "<td>".$phone['weight']."</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>Memory</td>";
                            echo "<td>".$phone['memory']."</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>Operating System</td>";
                            echo "<td>".$phone['operating_system']."</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>Price</td>";
                            echo "<td>".$phone['price']."</td>";
                        echo "</tr>";
                    echo "</table>";
                echo "</div>";
            echo "</div>";
    }
    function makeAdminPage(){
        global $db;
        echo '<div class="adminPhones">';
            $arr_phones = $db->getPhones('');
            if(!$arr_phones)
                die("Dont have phones for ya");

            foreach($arr_phones as $phone){
                echo '<table class="adminTable">';
                    echo '<tr class="AdmintableRow">';
                        echo '<td>'.$phone['brand'].' '.$phone['model'].'</td>';
                        echo '<td><img src="'.$phone['pic'].'" alt="phonePic" height="30px" width="20px" /></td>';
                        echo '<td><a href="admin_edit_entry.php?id='.$phone['id'].'"><div class="phoneEditButton">Edit</div></a></td>';
                        echo '<td><a href="admin_delete_entry.php?id='.$phone['id'].'"><div class="phoneDelButton">Delete</div></a></td>';
                    echo '</tr>';
                echo '</table>';
            }
        echo '</div>';
        echo '<div class="adminMgmt">';
            echo "<div class='mgmtButtons'><a href='admin_new_entry.php'>New entry</a></div>";
            echo "<div class='mgmtButtons'><a href='#'>New user</a></div>";
            echo "<div class='mgmtButtons'><a href='#'>New Now :)</a></div>";
        echo '</div>';
        echo '<div class="grpMgmt">';
            echo "<div class='grpMgmtButtons'><a href='#' onclick='alert(\"I am a weird option!\");'>Some weird option</a></div>";
        echo '</div>';
    }
}
$ob_website = new Website();

?>