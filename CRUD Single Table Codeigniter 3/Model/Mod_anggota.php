<?php
class Mod_anggota extends ci_model
{

    function select_all()
    {
        //  sama halnya :
        // query = select * from tabel_kategori
        return $this->db->get('tabel_anggota');
    }

    function selectId($id)
    {
        // SELECT * FROM `tabel_kategori` WHERE kategori_id=11
        $query = $this->db->select(['id_anggota', 'nama', 'alamat', 'kota', 'no_telp', 'tgl_lahir'])
            ->where('id_anggota', $id)
            ->get('tabel_anggota');
        return $query;
    }



    function select_parent()
    {
        //  sama halnya :
        // query = select * from tabel_kategori where parent = 0 
        return $this->db->get_where('tabel_anggota', array('parent' => 0));
    }


 

    function simpan($data)
    {
        // sama halnya : 
        // query insert tb_kategori value()
        $this->db->insert('tabel_anggota', $data);
    }
 
    function GetDataSelectDropdown()
    {
        $sql = 
        $query = $this->db->select('SELECT * FROM `p.tabel_kategori` as p');
        return $query;
    }

    function update($data)
    {
        // $data = array(
        //     'name_kategori' => $this->input->post('name'),
        //     'parent' => $this->input->post('parent'),
        //     'link' => $this->input->post('link'),
        //     'name_kategori_seo' => seo_title($this->input->post('name'))
        // );
        $this->db->where('id_anggota', $data['id_anggota']);
        $this->db->update('tabel_anggota', $data);
    }



    // $sql = "SELECT tabel_anggota.kota, tabel_kota.kota_
    // FROM tabel_anggota
    // JOIN tabel_kota ON tabel_anggota.kota = tabel_kota.kota_";
    // $query = $this->db->query($sql);
    
}