<?php
class Mod_warung extends ci_model
{

    function select_all()
    {
        
        $sql = "SELECT tt.id, tp.name_product, tp.price, tpy.name_payment, tb.name_buyer, tb.phone, tt.created_at

        FROM `tabel_transaction` as tt
        
        JOIN tabel_product as tp ON tp.id=tt.product_id
        JOIN tabel_payment as tpy ON tpy.id=tt.payment_id
        JOIN tabel_buyer as tb ON tb.id=tt.buyer_id";
        $record = $this->db->query($sql);
        return $record;
    }

    function selectId($id)
    {
        
        $sql = "SELECT tt.id, tp.name_product, tp.price, tpy.name_payment, tb.name_buyer, tb.phone, tt.created_at

        FROM `tabel_transaction` as tt
        
        JOIN tabel_product as tp ON tp.id=tt.product_id
        JOIN tabel_payment as tpy ON tpy.id=tt.payment_id
        JOIN tabel_buyer as tb ON tb.id=tt.buyer_id
        WHERE tp.id='$id'";
        $record = $this->db->query($sql)->row_array();
        // print_r($record); die();
        return $record;
        
    }



    function select_parent()
    {
        //  sama halnya :
        // query = select * from tabel_kategori where parent = 0 
        return $this->db->get_where('tabel_transaction', array('parent' => 0));
    }


 

    function simpan($data)
    {
        // sama halnya : 
        // query insert tb_kategori value()
        $this->db->insert('tabel_transaction', $data);
    }
 
    function SelectDropdownProduct()
    {
        $sql = "SELECT id, name_product FROM tabel_product";
        $query = $this->db->query($sql);
        return $query;
    }

    function SelectDropdownPrice()
    {
        $sql = "SELECT id, price FROM tabel_product";
        $query = $this->db->query($sql);
        return $query;
    }

    function SelectDropdownPayment()
    {
        $sql = "SELECT id, name_payment FROM tabel_payment";
        $query = $this->db->query($sql);
        return $query;
    }

    function SelectDropdownBuyer()
    {
        $sql = "SELECT id, name_buyer FROM tabel_buyer";
        $query = $this->db->query($sql);
        return $query;
    }
    function SelectDropdownPhone()
    {
        $sql = "SELECT id, phone FROM tabel_buyer";
        $query = $this->db->query($sql);
        return $query;
    }

    function update($data, $id)
    {
        // $data = array(
        //     'name_kategori' => $this->input->post('name'),
        //     'parent' => $this->input->post('parent'),
        //     'link' => $this->input->post('link'),
        //     'name_kategori_seo' => seo_title($this->input->post('name'))
        // );
        $this->db->where('id', $id);
        $this->db->update('tabel_transaction', $data);
    }

}