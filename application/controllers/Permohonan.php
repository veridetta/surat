<?php

class Permohonan extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_permohonan');
    }

    public function index()
    {

        $data['title'] = 'Data Permohonan';
        $data['mohon'] = $this->Model_permohonan->getallpermohonan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('permohonan/permohonan', $data);
        $this->load->view('templates/footer'); 
    }

    public function formpermohonan()
   {
         $npwp = $this->input->post('npwp');
         $nama_pemilik = $this->input->post('nama_pemilik');
         $nama_perusahaan = $this->input->post('nama_perusahaan');
         $alamat_perusahaan = $this->input->post('alamat_perusahaan');
         $bidang_usaha = $this->input->post('bidang_usaha');
         $kabupaten_kota = $this->input->post('kabupaten_kota');
         $provinsi = $this->input->post('provinsi');
         $jumlah_naker = $this->input->post('jumlah_naker');
         $jumlah_laki = $this->input->post('jumlah_laki');
         $jumlah_pr = $this->input->post('jumlah_pr');
         $nosurat_permohonan = $this->input->post('nosurat_permohonan');
         $email_perusahaan = $this->input->post('email_perusahaan');
         $nama_ketua = $this->input->post('nama_ketua');
         $nama_pimpinan = $this->input->post('nama_pimpinan');
         $jabatan_pimpinan = $this->input->post('jabatan_pimpinan');
         $jabatan_p2k3 = $this->input->post('jabatan_p2k3');

         $id_user = $this->session->userdata('id_user');

         $bpjs = $_FILES['bpjs']['name'];
         $foto = $_FILES['foto']['name'];
         $skdtu = $_FILES['skdtu']['name'];
         $siuk = $_FILES['siuk']['name'];
        
         $nama_anggota = implode("|",$this->input->post('nama_anggota'));
         $jabatan_ang_p2k3 = implode("|",$this->input->post('jabatan_ang_p2k3'));
         $jabatan_perusahaan = implode("|",$this->input->post('jabatan_perusahaan'));

         if ($bpjs) {
             $config['allowed_types'] = 'pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('bpjs')) {
             } else {
                echo $this->upload->display_errors();
             }
          }

           if ($foto) {
             $config['allowed_types'] = 'pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('foto')) {
             } else {
                echo $this->upload->display_errors();
             }
          }

          if ($skdtu) {
             $config['allowed_types'] = 'pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('skdtu')) {
             } else {
                echo $this->upload->display_errors();
             }
          }

          if ($siuk) {
             $config['allowed_types'] = 'pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('siuk')) {
             } else {
                echo $this->upload->display_errors();
             }
          }

          $data = [
             'id_user' => $id_user,
             'nama_perusahaan' => $nama_perusahaan,
             'bidang_usaha' => $bidang_usaha,
             'alamat_perusahaan' => $alamat_perusahaan,
             'kabupaten_kota' => $kabupaten_kota,
             'provinsi' => $provinsi,
             'email_perusahaan' => $email_perusahaan,
             'nama_pemilik' => $nama_pemilik,
             'npwp' => $npwp, 
             'nosurat_permohonan' => $nosurat_permohonan,
             'nama_ketua' => $nama_ketua,
             'jumlah_naker' => $jumlah_naker,
             'jumlah_laki' => $jumlah_laki,
             'jumlah_pr' => $jumlah_pr,
             'nama_pimpinan' => $nama_pimpinan,
             'jabatan_pimpinan' => $jabatan_pimpinan,
             'jabatan_p2k3' => $jabatan_p2k3,
             'bpjs_k' => $bpjs,
             'foto' => $foto,
             'skdtu' => $skdtu,
             'siuk' => $siuk,
                'nama_anggota' => $nama_anggota,
                'jabatan_ang_p2k3' => $jabatan_ang_p2k3,
                'jabatan_perusahaan' => $jabatan_perusahaan,
             'status' => "proses verifikasi",
             'kode' => "0"
           ];
         
        $this->db->insert('tb_permohonan', $data);
        redirect('Permohonan');
   }

   public function lihat($id)
    {
        $dat=explode('key',$id);
        $data['title'] = 'Lihat Permohonan';
        $data['lihat1'] = $this->Model_permohonan->lihatpermohonan($dat[0]);
        $data['lihat2'] = $dat['1'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('permohonan/lihat', $data);
        $this->load->view('templates/footer'); 
    }

    public function tracking()
    {

        $data['title'] = 'Tracking Permohonan';
       
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('permohonan/tracking', $data);
        $this->load->view('templates/footer'); 
    }

    public function prosestrack()
    {

        $npwp = $this->input->post('npwp');

        $x = $this->db->get_where('tb_permohonan', ['npwp' => $npwp])->row_array();

        if($x){

            $data['title'] = 'Proses Permohonan';
            $data['track'] = $this->Model_permohonan->prosestrack($npwp);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('permohonan/hasiltracking', $data);
            $this->load->view('templates/footer'); 
        }else{
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('permohonan/nonpwp');
            $this->load->view('templates/footer'); 
        }
       
        
    }

     public function tolak($id)
    {

        
        $data['title'] = 'Form tolak';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('permohonan/formtolak', $data);
        $this->load->view('templates/footer'); 
        
    }

    public function prosestolak()
    {
        
        $status = $this->input->post('ket');
        $id = $this->input->post('id_mohon');

        $data = array(
                'status' => $status
        );

        $this->db->where('id_mohon', $id);
        $this->db->update('tb_permohonan', $data);
        
         redirect('Permohonan');
    
    }

     public function terima($id)
    {
        $dat=explode("key",$id);
        $data = array(
                'status' => $dat[1],
                'kode' => "1"
        );

        $this->db->where('id_mohon', $dat[0]);
        $this->db->update('tb_permohonan', $data);
        
         redirect('Permohonan');
    
    }

    public function hapusmohon($id)
    {
       $this->Model_permohonan->delete($id);
       redirect('Permohonan');
    }
}

?>