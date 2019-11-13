<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function getAll()
    {
        $query=$this->db->query("select * from tb_kelas");
        if($query->num_rows()>0)
        {
            return $query->result();
        } else {
            return "";
        }
    }

    public function getByID($id)
    {
        $query=$this->db->query("select * from tb_kelas where id_kelas = $id");
        if($query->num_rows()>0)
        {
            return $query->result();
        } else {
            return "";
        }
    }

    public function insert($data)
    {
        $query = $this->db->insert("tb_kelas", $data);
        if($query)
        {
            return true;
        } else {
            return false;
        }
    }

    public function update($id, $data)
    {
        $this->db->where("id_kelas", $id);
        $query = $this->db->update("tb_kelas", $data);
        if($query)
        {
            return true;
        } else {
            return false;
        }
    }
}