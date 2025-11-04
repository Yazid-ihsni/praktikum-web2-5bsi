<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Prodi_model');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->lihatData();
        //echo json_encode($data);
        $this->load->view('mahasiswa/mahasiswa_view', $data);
    }

    public function mhs_row($id)
    {
        $data['row'] = $this->Mahasiswa_model->metodeRow($id);
        //echo json_encode($data);
        $this->load->view('mahasiswa/row_view', $data);
    }

    public function mhs_azrray_row($id)
    {
        $data['row'] = $this->Mahasiswa_model->metoderesultArray($id);
        //echo json_encode($data);
        $this->load->view('mahasiswa/arrayrow_view', $data);
    }

    public function tambah()
    {
        $data['prodi'] = $this->Prodi_model->lihatData();
        $this->load->view('mahasiswa/mahasiswa_tambah', $data);
    }

    public function simpan()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'id_prodi' => $this->input->post('id_prodi')
        ];
        $this->Mahasiswa_model->simpan($data);
        redirect('mahasiswa');
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get($id);
        $data['prodi'] = $this->Prodi_model->lihatData();
        $this->load->view('mahasiswa/mahasiswa_edit', $data);
    }

    public function perbaharui($id)
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'id_prodi' => $this->input->post('id_prodi')
        ];
        $this->Mahasiswa_model->perbaharui($id, $data);
        redirect('mahasiswa');
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapus($id);
        redirect('mahasiswa');
    }

    public function cetak()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->lihatData();
        $this->load->view('mahasiswa/mahasiswa_print', $data);
    }
}
