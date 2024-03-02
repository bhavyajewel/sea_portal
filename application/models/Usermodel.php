<?php
defined('BASEPATH')OR exit('no direct script access allowed');
class Usermodel extends CI_Model
{
public function publicreg($data,$da)
{
    $this->db->insert("login",$da);
    $loginid=$this->db->insert_id();
    $data['loginid']=$loginid;
    return $this->db->insert('publicreg',$data);
}
public function companyreg($data,$da)
{
    $this->db->insert("login",$da);
    $loginid=$this->db->insert_id();
    $data['loginid']=$loginid;
    return $this->db->insert('companyreg',$data);
}
public function contractreg($data,$da)
{
    $this->db->insert("login",$da);
    $loginid=$this->db->insert_id();
    $data['loginid']=$loginid;
    return $this->db->insert('contractreg',$data);
}
public function hash_password($pass)
  {
      return password_hash($pass,PASSWORD_BCRYPT);
  }
 public function admincontra()
 {
    $this->db->select('*');
    $this->db->from('contractreg');
    $this->db->join('login','login.id=contractreg.loginid','inner');
    $query=$this->db->get();
    return $query->result();
 }
 public function admincomp()
 {
    $this->db->select('*');
    $this->db->from('companyreg');
    $this->db->join('login','login.id=companyreg.loginid','inner');
    $query=$this->db->get();
    return $query->result();
 }
 public function adminpublic()
 {
    $this->db->select('*');
    $this->db->from('publicreg');
    $this->db->join('login','login.id=publicreg.loginid','inner');
    $query=$this->db->get();
    return $query->result();
 }
}
?>