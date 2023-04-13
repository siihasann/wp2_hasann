<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }

    public function joinRole()
    {
        $this->db->select('user.id as id, user.name, user.email, user.image, user_role.role, user_role.id as role_id');
        $this->db->from('user');
        $this->db->join('user_role', 'user.role_id = user_role.id');
        $this->db->where('user_role.id < 4');
        $this->db->order_by('user_role.id, user.name');
        return $this->db->get();
    }
}
