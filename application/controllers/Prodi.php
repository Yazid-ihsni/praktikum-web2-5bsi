<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }

    public function index()
    {
        $data['prodi'] = $this->Prodi_model->getAll();
        $this->load->view('prodi/prodi_view', $data);
    }

    public function tambah()
    {
        $this->load->view('prodi/prodi_tambah');
    }

    public function simpan()
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->Prodi_model->simpan($data);
        redirect('prodi');
    }

    public function edit($id)
    {
        $data['prodi'] = $this->Prodi_model->getById($id);
        $this->load->view('prodi/prodi_edit', $data);
    }

    public function perbarui($id)
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->Prodi_model->perbarui($id, $data);
        redirect('prodi');
    }

    public function hapus($id)
    {
        $this->Prodi_model->hapus($id);
        redirect('prodi');
    }
}
