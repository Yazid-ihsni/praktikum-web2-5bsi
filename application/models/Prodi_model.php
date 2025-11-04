<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_model extends CI_Model
{

    public function lihatData()
    {
        return $this->db->get('prodi')->result();
    }

    public function getAll()
    {
        return $this->db->get('prodi')->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('prodi', ['id_prodi' => $id])->row();
    }

    public function simpan($data)
    {
        return $this->db->insert('prodi', $data);
    }

    public function perbarui($id, $data)
    {
        return $this->db->update('prodi', $data, ['id_prodi' => $id]);
    }

    public function hapus($id)
    {
        return $this->db->delete('prodi', ['id_prodi' => $id]);
    }
}
