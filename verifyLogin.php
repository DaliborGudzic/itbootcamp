<?php
    session_start();

    require_once 'db/db_connection.php'; 

    $user = $_POST['username'];
    $passw = $_POST['password'];
    
    // TODO
    // cuvanje SHA3 hash lozinke (uz salt) umesto 'ciste' lozinke
    $db_data = $db->sql_query("SELECT * FROM admin_users WHERE username='$user' AND password='$passw'");
    
    // TODO proveriti bolju metodu za proveru
    if($db_data->num_rows === 0){
        echo "Error: Wrong username or password!";
    }else{
        // echo "Successful login! Return to <a href='index.php'> MAIN PAGE</a>";
        $p = $db_data->fetch_all(MYSQLI_ASSOC);
        $id = $p[0]['id'];
        $u = $p[0]['username'];
        if(isset($_POST['chkBox'])){
            setcookie('user_id', $id, time()+(60*60*24*30));
            setcookie('username', $u, time()+(60*60*24*30));
        }
        else{    
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $u;
        }
        header('Location: index.php');
    }
?>