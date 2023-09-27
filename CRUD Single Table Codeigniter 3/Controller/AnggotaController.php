<?php
class AnggotaController extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Mod_anggota', 'model');
  }

  // OOP standard
  // $classalias = New Classname;
  // $class->function()
  // mysqli_result();

  function index()
  {
    // result();
    // num_rows();
    // row_array();
    $data['record'] = $this->model->select_all()->result();
    // $data['record'] = $this->model->select_all()->row_array();
    // print_r($data['record']);
    // die();
    $data['title'] = "List Data Anggota";
    $this->load->view('anggota/dataanggota', $data);
  }
  function input()
  {
    $this->load->view('input_anggota');
  }

  function input_simpan()
{
  $dataanggota = array(
    'nama'=>$this->input->post('nama'),
    'alamat'=>$this->input->post('alamat'),
    'kota'=>$this->input->post('kota'),
    'no_telp'=>$this->input->post('no_telp'),
    'tgl_lahir'=>$this->input->post('tgl_lahir'));
    $this->db->insert('tabel_anggota',$dataanggota);
    $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
    Data Baru Berhasil Ditambahkan!
    </div>');
    redirect('AnggotaController');
    
    
  

}




  function edit()
  {
    $data['title'] = "Halaman Edit Data Berdasarkan id tertentu";
    $data['id'] = $this->uri->segment(3);
    $data['row'] = $this->model->selectId($data['id'])->row_array();
    $this->load->view('anggota/editanggota', $data);
     

  }

  function update()
  {
    // $id = $this->input->post('id');
    $data = array(
      'id_anggota' => $this->input->post('id'),
      'nama'=>$this->input->post('nama'),
      'alamat'=>$this->input->post('alamat'),
      'kota'=>$this->input->post('kota'),
      'no_telp'=>$this->input->post('no_telp'),
      'tgl_lahir'=>$this->input->post('tgl_lahir')
    );

    // print_r($id);
    // echo '<br/>';
    // print_r($data);
    // die();
    // logic update data ke database tb kategori.

    $this->model->update($data);
    redirect('AnggotaController');

  }

  function post()
  {
    if (isset($_POST['submit'])) {

      $data = array(
        'nama' => $this->input->post('nama'),
        // 'parent' => $this->input->post('parent'),
        // 'link' => $this->input->post('link'),
        // 'name_kategori_seo' => seo_title($this->input->post('name'))
      );

      $this->Mod_Anggota->simpan($data);
      redirect('admin/Anggota');
    } else {
      $data['parent'] = $this->Mod_anggota->select_parent()->result();
      $this->load->view('AnggotaController/post', $data);
    }
  }

  // function SelectDropdown()
  // {
  //   $dropdown = $this->model->GetDataSelectDropdown()->result();
  //   return $dropdown;
  // }
  // function edit()
  // {
  //   if (isset($_POST['submit'])) {
  //     $this->Mod_kategori->update();
  //     redirect('admin/kategori');
  //   } else {
  //     $id = $this->uri->segment(4);
  //     $data['row'] = $this->db->get_where('tabel_kategori', array('kategori_id' => $id))->row_array();
  //     $data['parent'] = $this->Mod_kategori->select_parent()->result();
  //     $this->template->load('_template', 'admin/kategori/edit', $data);
  //   }
  // }

   function delete()
   {
     $this->db->where('id_anggota', $this->uri->segment(3));
     $this->db->delete('tabel_anggota');
     $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
     Data Baru Berhasil Ditambahkan!
     </div>');
     redirect('AnggotaController');
   }

    // public function getdatapendaftar()
    // {
    //   $sql = "SELECT tp.id_anggota, ta.nama, ta.no_telp,
    //   tb.no_buku, tb.judul, tb.pengarang, tb.jenis_buku, tb.status 
      
    //   FROM `tabel_pinjam` as tp
      
    //   JOIN tabel_buku as tb ON tb.no_buku=tp.no_buku
    //   JOIN tabel_anggota as ta ON ta.id_anggota=tp.id_anggota";
    //   $record = $this->db->query($sql)->result();
    //   print_r($record);   

    // }


}