<?php
class Model extends CI_Model
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
    public function getarraybyquery($query){
        $result=$this->db->query($query);
        return $result->result_array();
    }
    // data insert
    public function update($data){ 
    $this->db->where('id', 1);
        $n=$this->db->update('address', $data);
        return $n;
}
 public function service($data){ 
    $this->db->where('id', 1);
        $n=$this->db->update('service', $data);
        return $n;
}
public function do_delete($table, $id){
     $this->db->where('id', $id);
        $n=$this->db->delete($table);
        return $n;
}
}