<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    public function getByID($id)
    {
        $query = $this->db->query("select * from tb_users where id_user = '$id'");
        if($query->num_rows()>0){
            return $query->result();
        } else{
            return "";
        }
    }

    public function getMahasiswa()
    {
        $query = $this->db->query("Select * from tb_users where tipe_user = 'mahasiswa'");
        if($query->num_rows()>0){
            return $query->result();
        } else{
            return "";
        }
    }

    public function getKelas()
    {
        $query = $this->db->query("Select * from tb_kelas");
        if($query->num_rows()>0){
            return $query->result();
        } else{
            return "";
        }
    }

    public function getJadwal()
    {
        $query = $this->db->query("Select * from tb_jadwal");
        if($query->num_rows()>0){
            return $query->result();
        } else{
            return "";
        }
    }

    public function insert($data)
    {
        return $this->db->insert("tb_users", $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_user', $id);
        return $this->db->update("tb_users", $data);
    }

    public function delete($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->delete("tb_users");
    }
}