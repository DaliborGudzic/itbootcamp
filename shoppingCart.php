<?php

    class Cart {
        function __construct()
        {
            if(!isset($_SESSION['cart_items']))
                $_SESSION['cart_items'] = [];
        }

        function add_to_cart($id, $name, $price, $quantity){
            array_push($_SESSION['cart_items'], 
                ['id'=>$id, 'name'=>$name, 'price'=>$price, 'quantity'=>$quantity]);
        }
        function change_quanitity($id, $quantity){
            for($i=0; $i<count($_SESSION['cart_items']); $i++)
                if($_SESSION['cart_items'][$i]['id'] === $id)
                   $_SESSION['cart_items'][$i]['quantity'] = $quantity; 
        }
        function add_quantity($id, $quantity){
            for($i=0; $i<count($_SESSION['cart_items']); $i++)
                if($_SESSION['cart_items'][$i]['id'] === $id)
                   $_SESSION['cart_items'][$i]['quantity'] += $quantity; 
        }
        function delete_product($id){
            for($i=0; $i<count($_SESSION['cart_items']); $i++)
                if($_SESSION['cart_items'][$i]['id'] === $id){
                    //unset($_SESSION['cart_items'][$i]);
                    array_splice($_SESSION['cart_items'], $i, 1);
                    return;
                }
        }
        function delete_cart(){
            $_SESSION['cart_items'] = [];
        }
        function does_product_exist($id){
            for($i=0; $i<count($_SESSION['cart_items']); $i++){
                if($_SESSION['cart_items'][$i]['id'] === $id)
                    return true;
            }
            return false;
        }
        function show_cart(){
           // TODO
        }
        function total_in_cart(){
            $total = 0;
            foreach($_SESSION['cart_items'] as $s){
                $this->total += ($s['price']*$s['quantity']);
            }
            return $this->total;
        }
}

$cart = new Cart();


?>
