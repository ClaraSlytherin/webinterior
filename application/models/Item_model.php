
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_model
{

    public function getProduct()
    {
        $this->db->select('*');
        $this->db->from('tabel_item');
        // $this->db->join('kategori_produk', 'tabel_item.id_kategori = kategori_produk.id_kategori');
        return $query = $this->db->get()->result_array();
    }

    public function getNewProduct()
    {
        return $this->db->get('tabel_item')->result_array();
    }


    public function tampilData($id)
    {
        return $this->db->where('id_item', $id)
            ->get('tabel_item')
            ->row();
    }

    public function getAllItem()
    {

        $query = $this->db->query('SELECT * FROM tabel_item JOIN kategori_produk ON tabel_item.id_kategori = kategori_produk.id_kategori');

        return $query->result_array();
    }

    public function getPelanggan()
    {
        $query = $this->db->query('');
    }

    public function cari($keyword)
    {
        $this->db->select('*');
        $this->db->from('tabel_item');
        $this->db->like('nama_desain', $keyword);
        return $this->db->get()->result_array();
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($data, $table);
    }
}
