<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
    function auth($username,$password){
        $query=$this->db->query("SELECT * FROM user WHERE username='$username'AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
}