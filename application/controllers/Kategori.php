<?php

class Kategori extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        //$this->load->model('m_kategori');
        $this->load->helper('form');
        $this->load->database();
        $this->load->helper('url');
    }

    function index()
    {
        $data['judul'] = 'Manage Kategori';
        $this->load->view('templates/header', $data);
        $this->load->view('kategori/index');
        $this->load->view('templates/footer');
    }

    function insert(){
        $data['judul'] = 'Insert Kategori';
        $this->load->view('templates/header', $data);
        $this->load->view('kategori/insert_kategori');
        $this->load->view('templates/footer');
    }

    function update(){
        $data['judul'] = 'Update Kategori';
        $this->load->view('templates/header', $data);
        $this->load->view('kategori/update_kategori');
        $this->load->view('templates/footer');
    }

    function delete(){

    }
}
