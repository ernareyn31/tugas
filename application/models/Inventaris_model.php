<?php
class Inventaris_model extends CI_Model
{
    public function tambah()
    {
        $post = $this->input->post();
        $gambar = $this->_uploadImage();
        $db = $this->db;
        $db->set('kode', $post['kode']);
        $db->set('jenis', $post['jenis']);
        $db->set('merek', $post['merek']);
        $db->set('model', $post['model']);
        $db->set('warna', $post['warna']);
        $db->set('serial', $post['serial']);
        $db->set('deskripsi', $post['deskripsi']);
        $db->set('status', $post['status']);
        $db->set('lokasi', $post['lokasi']);
        $db->set('gambar', $gambar);
        $db->insert('barang');
        redirect('Inventaris');
    }
    public function edit()
    {
        $post = $this->input->post();
        $gambar_lama = $post['gambarLama'];
        if ($_FILES["gambar"]["name"]) {
            $gambar = $this->_uploadImage();
            if ($gambar_lama != $gambar || $gambar_lama != "noimage.png") {
                unlink("assets/img/barang/$gambar_lama");
            }
        } else {
            $gambar = $gambar_lama;
        }
        $db = $this->db;
        $db->set('kode', $post['kode']);
        $db->set('jenis', $post['jenis']);
        $db->set('merek', $post['merek']);
        $db->set('model', $post['model']);
        $db->set('warna', $post['warna']);
        $db->set('serial', $post['serial']);
        $db->set('deskripsi', $post['deskripsi']);
        $db->set('status', $post['status']);
        $db->set('lokasi', $post['lokasi']);
        $db->set('gambar', $gambar);
        $db->where('id', $post['id']);
        $db->update('barang');
        redirect('Inventaris');
    }

    public function hapus()
    {
        $id = $this->uri->segment('3');
        $barang = $this->db->query("SELECT gambar FROM barang WHERE id = $id")->row();
        if ($barang->gambar != 'noimage.png') {
            unlink("assets/img/barang/$barang->gambar");
        }
        $this->db->where('id', $id);
        $this->db->delete('barang');
        redirect('Inventaris');
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'assets/img/barang/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        return "noimage.png";
    }
}
