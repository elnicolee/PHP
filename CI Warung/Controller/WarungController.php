<?php
class WarungController extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_warung', 'model');
  }

  function index()
  {
    $data['record'] = $this->model->select_all()->result();
    $data['title'] = "List Data Warung";
    $this->load->view('warung/datawarung', $data);
    // $this->load->view('input_warung', $data);
  }
  function input()
  {
    $data['selectproduct'] = $this->SelectDropdownProduct();
    $data['selectprice'] = $this->SelectDropdownPrice();
    $data['selectpayment'] = $this->SelectDropdownPayment();
    $data['selectbuyer'] = $this->SelectDropdownBuyer();
    $data['selectphone'] = $this->SelectDropdownPhone();
    $this->load->view('input_warung', $data);
  }

  function input_simpan()
{
  ;
    $datawarung = array(
        'id' => uniqid(),
        'product_id'=>$this->input->post('product'),
        'payment_id'=>$this->input->post('payment'),
        'buyer_id'=>$this->input->post('buyer'),
        'created_at'=>$this->input->post('created_at'),
      );
      // print_r($datawarung); die();
      
      // print_r($datawarung); die(); 
      $this->db->insert('tabel_transaction', $datawarung);

     
      redirect('WarungController');

}
  function edit()
  {
    $data['title'] = "Halaman Edit Data Berdasarkan id tertentu";
    $data['id'] = $this->uri->segment(3);
    $data['row'] = $this->model->selectId($data['id']);
    $data['selectproduct'] = $this->SelectDropdownProduct();
    $data['selectprice'] = $this->SelectDropdownPrice();
    $data['selectpayment'] = $this->SelectDropdownPayment();
    $data['selectbuyer'] = $this->SelectDropdownBuyer();
    $data['selectphone'] = $this->SelectDropdownPhone();
    $this->load->view('warung/editwarung', $data);
     

  }

  function update()
  {
    // $id = $this->input->post('id');
    $id = $this->input->post('id');
    $data = array(
      'product_id'=>$this->input->post('product'),
      'payment_id'=>$this->input->post('payment'),
      'buyer_id'=>$this->input->post('buyer'),
    );

// print_r($id); die();
    $this->model->update($data, $id);
    redirect('WarungController');

  }

  function post()
  {
    if (isset($_POST['SUBMIT'])) {

      $data = array(
        'id' => $this->input->post('id'),
        'product_id'=>$this->input->post('product'),
        'payment_id'=>$this->input->post('payment'),
        'buyer_id'=>$this->input->post('buyer'),
        'created_at'=>$this->input->post('created_at'),
      );
    
    
      

      $this->Mod_warung->simpan($data);
      redirect('admin/warung');
    } else {
      $data['parent'] = $this->Mod_product->select_parent()->result();
      $this->load->view('WarungController/post', $data);
    }
  }

  function SelectDropdownProduct()
  {
    $dropdown = $this->model->SelectDropdownProduct()->result();
    return $dropdown;
  }

  function SelectDropdownPrice()
  {
    $dropdown = $this->model->SelectDropdownPrice()->result();
    return $dropdown;
  }

  function SelectDropdownPayment()
  {
    $dropdown = $this->model->SelectDropdownPayment()->result();
    return $dropdown;
  }
  function SelectDropdownBuyer()
  {
    $dropdown = $this->model->SelectDropdownBuyer()->result();
    return $dropdown;
  }
  function SelectDropdownPhone()
  {
    $dropdown = $this->model->SelectDropdownPhone()->result();
    return $dropdown;
  }

   function delete()
   {
     $this->db->where('id', $this->uri->segment(3));
     $this->db->delete('tabel_transaction');
     $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
     Data Baru Berhasil Ditambahkan!
     </div>');
     redirect('WarungController');
   }




}