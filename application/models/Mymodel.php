<?php
class Mymodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        //for connecting to database
        $this->load->database();
    }
    function save($tablenm,$data)
    {
       $n= $this->db->insert($tablenm , $data);
       return $n;
    }
}