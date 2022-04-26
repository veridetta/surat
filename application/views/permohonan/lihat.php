<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Permohonan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Permohonan Pengajuan Panitia Pembina Keselamatan dan Kesehatan Kerja</h6>
            </div>
            <div class="card-body">
             <center><img src="<?= base_url('assets/img/disnaker.png'); ?>" style="width: 60px; height: 60px;"></center>
             <center><h5>DINAS TENAGA KERJA DAN TRANSIMGRASI PROVINSI JAWA TENGAH</h5></center>
             <hr /><br>

             <h7>Kepada Yth</h7><br>
             <h7>Dinas Tenaga Kerja dan Transmigrasi Provinsi Jawa Tengah</h7><br>

             <h7>Sesuai dengan Ketentuan dalam Peraturan Menteri Tenaga Kerja dan Transmigrasi Republik Indonesia Nomor Permen No 04 Tahub 1987 tentang Panitia Pembina Keselamatan dan Kesehatan Kerja serta tata cara penunjukan ahli keselamatan kerja, Kami yang bertanda tangan dibawah ini :</h7><br>

             <table>
                 <br>
             <tr>
                 <td>Nama Perusahaan</td>
                 <td>:</td>
                 <td><?= $lihat1['nama_perusahaan']; ?></td>
               </tr>
               <tr>
                 <td>Bidang Usaha</td>
                 <td>:</td>
                 <td><?= $lihat1['bidang_usaha']; ?></td>
               </tr>
               <tr>
                 <td>Nama Pemilik</td>
                 <td>:</td>
                 <td><?= $lihat1['nama_pemilik']; ?></td>
               </tr>
               <tr>
                 <td>Alamat Perusahaan</td>
                 <td>:</td>
                 <td><?= $lihat1['alamat_perusahaan']; ?>,Kabupaten <?= $lihat1['kabupaten_kota']; ?> Provinsi <?= $lihat1['provinsi']; ?></td>
               </tr>
               <tr>
                 <td>NPWP Perusahaan</td>
                 <td>:</td>
                 <td><?= $lihat1['npwp']; ?></td>
               </tr>
               <tr>
                 <td>Email Perusahaan</td>
                 <td>:</td>
                 <td><?= $lihat1['email_perusahaan']; ?></td>
               </tr>
               <tr>
                  <tr>
                 <td>Nama Pimpinan</td>
                 <td>:</td>
                 <td><?= $lihat1['nama_pimpinan']; ?></td>
               </tr>
               <tr>
                 <tr>
                  <tr>
                 <td>Jabatan</td>
                 <td>:</td>
                 <td><?= $lihat1['jabatan_pimpinan']; ?></td>
               </tr>
               <tr>
                  <tr>
                 <td>Sekretaris P2K3</td>
                 <td>:</td>
                 <td><?= $lihat1['nama_ketua']; ?></td>
               </tr>
               <tr>
                 <tr>
                  <tr>
                 <td>Jabatan</td>
                 <td>:</td>
                 <td><?= $lihat1['jabatan_p2k3']; ?></td>
               </tr>
               <tr>
               <tr>
                 
               </tr>
               <tr>
                 <td>File Pendukung</td>
                 <td>:</td>
                 <td>
                   <a class="btn btn-outline-primary" href="<?= base_url('uploads/') . $lihat1['bpjs_k']; ?>" type="application/pdf" target="blank_"><i class="fa fa-file"></i> Ahli K3</a>
                   <a class="btn btn-outline-secondary"  href="<?= base_url('uploads/') . $lihat1['foto']; ?>"type="application/pdf" target="blank_"><i class="fa fa-file"></i> Ahli K3</a>
                   <a class="btn btn-outline-warning"  href="<?= base_url('uploads/') . $lihat1['skdtu']; ?>"type="application/pdf" target="blank_"><i class="fa fa-file"></i> KTK Ahli K3</a>
                   <a class="btn btn-outline-success"  href="<?= base_url('uploads/') . $lihat1['siuk']; ?>"type="application/pdf" target="blank_"><i class="fa fa-file"></i> SIUK</a>
                 </td>
               </tr>
             </table><br>
             <h7>dengan ini mengajukan permohonan Pengesahan Struktur P2K3 Seperti dalam lampiran untuk pelaksanaan pengawasan keselamatan dan kesehatan kerja di perusahaan kami.</h7><br>
             <h7>demikian permohonan ini kami ucapkan terima kasih</h7><br><br><br>
             <h7>Hormat Kami</h7><br>
             <h7><?= $lihat1['nama_perusahaan']; ?></h7><br><br><br>


            </div>
            <?php
            //if session admin adn kode =0
            if ($this->session->userdata('level') == "admin" && $lihat1['kode'] == 0){ ?>
            <div class="card-header py-3">
               <a href="<?= base_url('Permohonan/tolak/') . $lihat1['id_mohon']; ?>" class="btn btn-danger">Tolak</a>
               <a href="<?= base_url('Permohonan/terima/'). $lihat1['id_mohon']."keyMenungguSpasiKabidkey1"; ?>" class="btn btn-primary" style="float: right;">Terima</a>
             </div>
             <?php } ?>
             <?php
            if ($this->session->userdata('level') == "kabid" && $lihat1['status'] == "MenungguSpasiKabid"){ ?>
            <div class="card-header py-3">
               <a href="<?= base_url('Permohonan/tolak/') . $lihat1['id_mohon']; ?>" class="btn btn-danger">Tolak</a>
               <a href="<?= base_url('Permohonan/terima/'). $lihat1['id_mohon']."keyMenungguSpasiSekdiskey1"; ?>" class="btn btn-primary" style="float: right;">Terima</a>
             </div>
             <?php } ?>
             <?php
            if ($this->session->userdata('level') == "sekdis" && $lihat1['status'] == "MenungguSpasiSekdis"){ ?>
            <div class="card-header py-3">
               <a href="<?= base_url('Permohonan/tolak/') . $lihat1['id_mohon']; ?>" class="btn btn-danger">Tolak</a>
               <a href="<?= base_url('Permohonan/terima/'). $lihat1['id_mohon']."keyMenungguSpasiKadiskey1"; ?>" class="btn btn-primary" style="float: right;">Terima</a>
             </div>
             <?php } ?>
             <?php
            if ($this->session->userdata('level') == "kadis" && $lihat1['status'] == "MenungguSpasiKadis"){ ?>
            <div class="card-header py-3">
               <a href="<?= base_url('Permohonan/tolak/') . $lihat1['id_mohon']; ?>" class="btn btn-danger">Tolak</a>
               <a href="<?= base_url('Permohonan/terima/'). $lihat1['id_mohon']."keyditerimakey3"; ?>" class="btn btn-primary" style="float: right;">Terima</a>
             </div>
             <?php } ?>
             
          </div>

</div>


