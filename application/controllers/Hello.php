<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{
    public function index()
    {
        echo "Hello, perkenalkan nama saya Ahmad Yazid Ihsani";
    }

    public function hello_2310020035()
    {
        $this->load->model('Hello_model');
        $data = $this->Hello_model->hello_nim();
        echo $data;
    }

    public function hello_view()
    {
        $this->load->view('hello_view');
    }

    public function hello_mvc()
    {
        $this->load->model('Hello_model');
        $data['mvc'] = $this->Hello_model->hello_mvc();
        $data['kelas'] = $this->Hello_model->kelas();
        $this->load->view('hello_view', $data);
    }
}
