<?php

class Product_model extends CI_Model {

    public $tableName = "products";

    public function __construct(){
        parent::__construct();
    }


    //Tüm kayıtlara bana getirecek olan metot
    public function get_all(){
        return $this->db->get($this->tableName)->result();
    }

}




?>