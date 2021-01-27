<?php
    session_start();
    require_once 'include/headerFooter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page - MOBILshop</title>
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
        h3 {
            display:inline-block;
            margin-bottom: 30px;
        }
        .formContainer {
            margin: 30px;
            width: 600px;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 15px;
        }
        .formContainer input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        .formContainer input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .formContainer input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php $ob_website->makeMeAHeader();  ?>

<div class="formContainer">
<h3>Contact Form</h3>
  <form action="#">
    <label>First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." />

    <label>Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." />

    <label>Subject</label>
    <textarea id="subject" name="subject" placeholder="Tell us your thoughts..." style="height:200px"></textarea>

    <input type="submit" value="Submit" />
  </form>
</div>

<?php $ob_website->makeMeAFooter(); ?>
<script type="text/javascript" src="js/searchANDmodal.js"></script>
</body>
</html>
