<?php
class Inventaris extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('inventaris_model');
    }
    public function index()
    {
        $data['barang'] = $this->db->get('barang')->result();
        $this->load->view('index', $data);
    }
    public function tambah()
    {
        $this->load->view('tambah');
    }
    public function tambah_data()
    {
        $this->inventaris_model->tambah();
    }
    public function edit()
    {
        $id = $this->uri->segment('3');
        $data['barang'] = $this->db->get_where('barang', ['id' => $id])->row();
        $this->load->view('edit', $data);
    }
    public function edit_data()
    {
        $this->inventaris_model->edit();
    }
    public function hapus()
    {
        $this->inventaris_model->hapus();
    }
}
