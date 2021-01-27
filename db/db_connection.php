<?php

class Db{
    private $conn;
    public $err;

    // Povezivanje na bazu. Gresku pamtimo u $err i vracamo false ako je konekcija neuspesna
    // Ako je konekcija uspesna, postavljamo charset i vracamo true
    function connect(){
        $this->conn = new mysqli('localhost', 'root', '', 'webshop_cellphones');

        if($this->conn->connect_error){
            $this->err = $this->conn->connect_error;
            return false;
        }
        $this->conn->set_charset("utf8");
        return true;
    }
    function livesearch($search){
        $phone_model = $this->conn->query("SELECT id, model FROM phones WHERE model LIKE '%$search%'");
        $p = $phone_model->fetch_all(MYSQLI_ASSOC);
        return $p;
    }
    function affectedRows(){
        return $this->conn->affected_rows;
    }
    function sql_query($sql){
        return $this->conn->query($sql);
    }
    // function greska(){
    //     return $this->conn->error;
    // }
    function getPhones($brand=''){
        $sql = "SELECT * from phones";
 
        if($brand !== '')
            $sql .= " WHERE brand LIKE '%$brand%'";

        $db_data = $this->conn->query($sql);
        return $db_data->fetch_all(MYSQLI_ASSOC);
    }
    function getPhone($id){
        $db_data = $this->sql_query("SELECT * FROM phones WHERE id=$id");
        // Postavljamo pokazivac i vracamo kao asocijativni niz (proveri!!!)
        $db_data->data_seek(0);
        return $db_data->fetch_assoc();
    }
    function get3phones(){
        // $db_data = $this->sql_query("SELECT * FROM phones ORDER BY id DESC LIMIT 3");
        $db_data = $this->sql_query("SELECT * FROM phones ORDER BY RAND() LIMIT 3");
        return $db_data->fetch_all(MYSQLI_ASSOC);
    }
    function getBrands(){
        $db_data = $this->sql_query("SELECT DISTINCT brand FROM phones");
        return $db_data->fetch_all(MYSQLI_ASSOC);
    }
    function deletePhone($id){
        $this->conn->query("DELETE FROM phones WHERE id=$id");
        return $this->conn->affected_rows;
    }
}
// Novi objekat klase Db()
// Ako konekcija nije uspesna, vrati gresku $err kojoj mozemo pristupiti direktno jer je public
$db = new Db();
if(!$db->connect())
    die("Neuspesno povezivanje! Greska: ".$db->err);
?>
