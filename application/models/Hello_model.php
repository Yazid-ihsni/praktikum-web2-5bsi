<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello_model extends CI_Model
{
    public function hello_nim()
    {
        return "Hello, perkenalkan nama saya Ahmad Yazid Ihsani NPM 2310020035";
    }

    public function hello_mvc()
    {
        return "Ini menggunakan MVC buatan 2310020035";
    }

    public function kelas()
    {
        return "5B SI Reguler Siang Banjarmasin";
    }
}
