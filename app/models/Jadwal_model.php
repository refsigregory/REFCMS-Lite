<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    public function getAll()
    {
        $query=$this->db->query("select * from tb_jadwal");
        if($query->num_rows()>0)
        {
            return $query->result();
        } else {
            return "";
        }
    }

    public function getByID($id)
    {
        $query=$this->db->query("select * from tb_jadwal where id_jadwal = $id");
        if($query->num_rows()>0)
        {
            return $query->result();
        } else {
            return "";
        }
    }

    public function insert($data)
    {
        $query = $this->db->insert("tb_jadwal", $data);
        if($query)
        {
            return true;
        } else {
            return false;
        }
    }

    public function update($id, $data)
    {
        $this->db->where("id_jadwal", $id);
        $query = $this->db->update("tb_jadwal", $data);
        if($query)
        {
            return true;
        } else {
            return false;
        }
    }
}