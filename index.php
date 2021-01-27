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
    // <div class="discount_news">NEW YEAR DISCOUNT FOR ITBOOTCAMP PARTICIPANTS! Click to get 120% discount coupon now...or not bwuhahahahaha</div>
    $ob_website->makeMain();
    $ob_website->makeMeAFooter();
?>
<script type="text/javascript" src="http://localhost:8080/projects/itbootcamp/projekat/js/searchANDmodal.js"></script>
<!-- <script>
// Get the modal
var modal = document.getElementById('login');
var modal2 = document.getElementById('logout');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal.style.display = "none";
    }
}
</script>

<script>
    // let load_img = document.getElementById("loading");
    // let div = document.querySelector('searchResults');
    // let input = document.querySelector('searchbox');
    let div = document.getElementById('searchResults');
    let input = document.getElementById('searchbox');
    
    input.onkeyup = function(event){
        // load_img.style.display = "block";
        div.style.display = "block";
        div.innerHTML = '';
        let v = input.value;
        fetch("db/search.php?search="+v)
        .then((resp)=>resp.json())
        .then((search_array)=>{
            // console.log(search_array);
            // setTimeout(()=>{
            //     load_img.style.display = "none";
                
            //     for(let i=0; i<search_array.length; i++)
            //         div.innerHTML += "<p>"+search_array[i].Grad+"</p>";
            // }, 1000);
            for(let i=0; i<search_array.length; i++)
                div.innerHTML += "<p><a href='details_single.php?id=\""+search_array[i].id+"\"'>"+search_array[i].model+"</a></p>";
                // div.innerHTML += "<p>"+search_array[i].model+"</p>";
        });
    }
</script> -->

</body>

</html>