<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Permohonan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Permohonan P2K3</h6>
            </div>
            <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Form Permohonan</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NPWP</th>
                      <th>Nama Pemilik</th>
                      <th>Nama Perusahaan</th>
                      <th>Alamat Perusahaan</th>
                      <th>Sekretaris P2K3</th>
                      <th>File</th>
                      <th>Status</th>
                       <?php if($this->session->userdata('level')=='admin'){ ?>
                      <th>Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($mohon as $dat) : ?>
                    <tr>
                      <td><?= $dat['npwp']; ?></td>
                      <td><?= $dat['nama_pemilik']; ?></td>
                      <td><?= $dat['nama_perusahaan']; ?></td>
                      <td><?= $dat['alamat_perusahaan']; ?></td>
                      <td><?= $dat['nama_ketua']; ?></td>
                      <td> 
                          <a href="<?= base_url('uploads/') . $dat['bpjs_k']; ?>">Sertifikat Ahli K3</a><br>
                          <a href="<?= base_url('uploads/') . $dat['foto']; ?>">SKP Ahli K3</a><br>
                          <a href="<?= base_url('uploads/') . $dat['skdtu']; ?>">KTK Ahli K3 (Opsional)</a><br>
                          <a href="<?= base_url('uploads/') . $dat['siuk']; ?>">SIUK</a>
                      </td>
                       <td><?= str_replace('Spasi', ' ', $dat['status']); ?></td>
                       <?php 
                       //switch if admin, kabid, sakdin, dan kadis
                       $key = "";
                        switch ($this->session->userdata('level')){
                           case 'admin':
                              $key = "MenungguSpasiKabid";
                              break;
                           case 'kabid':
                              $key = "MenungguSpasiSekdis";
                              break;
                           case 'sekdis':
                              $key = "MenungguSpasiKadis";
                              break;
                           case 'kadis':
                              $key = "diterima";
                              break;
                           default:
                              $key = "";
                              break;
                        }
                       //if level = kabid, sekdis, and kadis
                       if($this->session->userdata('level')=='kabid' || $this->session->userdata('level')=='sekdis' || $this->session->userdata('level')=='kadis'){ ?>
                         <td>
                           <a href="<?= base_url('permohonan/lihat/') . $dat['id_mohon']."key".$key; ?>"> <button type="button"><i class="fa fa-eye" style='font-size:15px;color:blue'></i></button></a>
                           </td>
                         <?php } ?>
                       <?php if($this->session->userdata('level')=='admin'){ ?>
                       <td>
                          <a href="<?= base_url('Permohonan/lihat/') . $dat['id_mohon']."key".$key; ?>" ><button type="button"><i class="fa fa-eye" style='font-size:15px;color:blue'></i></button></a> 
                     
                     <!-- Button trigger modal -->
                     <button type="button" data-toggle="modal" data-target="#Modal"> <i class="fas fa-trash-alt" style='font-size:15px;color:red'></i>
                     	
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="Modal" tabindex="-1" role="dialog"
                     	aria-labelledby="Modal" aria-hidden="true">
                     	<div class="modal-dialog" role="document">
                     		<div class="modal-content">
                     			<div class="modal-header">
                     				<h5 class="modal-title" id="Modal">Data Permohonan</h5>
                     				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     					<span aria-hidden="true">&times;</span>
                     				</button>
                     			</div>
                     			<div class="modal-body">
                     				Apakah ingin menghapus data ini???
                     			</div>
                     			<div class="modal-footer">
                     				<button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
                                 <a href="<?= base_url('Permohonan/hapusmohon/') . $dat['id_mohon']; ?>" class="btn btn-danger">Hapus</a>
                     			</div>
                     		</div>
                     	</div>
                     </div>
                     </td>
                       <?php } ?>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</div>
<!-- membuat modal   -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Permohonan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!--bootstrap stepper-->
         <form action="<?= base_url('Permohonan/formpermohonan') ?>" method="POST" enctype="multipart/form-data" >
            <div class="col-md-12 mt-5">
               <div id="stepper1" class="bs-stepper">
                  <div class="bs-stepper-header">
                  <div class="step" data-target="#data-perusahaan">
                     <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Data Perusahaan</span>
                     </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#kepengurusan">
                     <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">kepengurusan</span>
                     </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#dokumen">
                     <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Dokumen</span>
                     </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#keanggotaan">
                     <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">Keanggotaan</span>
                     </button>
                  </div>
                  </div>
                  <div class="bs-stepper-content">
                     <div id="data-perusahaan" class="content">
                        <!--input data perusahaan-->
                        <!-- input nama dan bidang perusahaan -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="nama_perusahaan">Nama Perusahaan</label>
                                 <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="bidang_usaha">Bidang Perusahaan</label>
                                 <input type="text" class="form-control" id="bidang_usaha" name="bidang_usaha" placeholder="Bidang Perusahaan" required>
                              </div>
                           </div>
                        </div>
                        <!-- textarea alamat -->
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="alamat_perusahaan">Alamat Perusahaan</label>
                                 <textarea class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="Alamat Perusahaan" required></textarea>
                              </div>
                           </div>
                        </div>
                        <!-- input alamat perusahaan -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="provinsi">Provinsi</label>
                                 <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="kota_perusahaan">Kab/Kota Perusahaan</label>
                                 <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota" placeholder="Kab/Kota Perusahaan" required>
                              </div>
                           </div>
                        </div>
                        <!-- email perusahaan -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="email_perusahaan">Email Perusahaan</label>
                                 <input type="email" class="form-control" id="email_perusahaan" name="email_perusahaan" placeholder="Email Perusahaan" required>
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                     </div>
                     <div id="kepengurusan" class="content">
                        <!-- input data kepengurusan -->
                        <!-- nama dan jabatan pimpinanya -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="nama_pimpinan">Nama Pimpinan</label>
                                 <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan" placeholder="Nama Pimpinan" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="jabatan_pimpinan">Jabatan Pimpinan</label>
                                 <input type="text" class="form-control" id="jabatan_pimpinan" name="jabatan_pimpinan" placeholder="Jabatan Pimpinan" required>
                              </div>
                           </div>
                        </div>
                        <!-- nama ketua dan jabatan p2k3 -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="nama_ketua">Sekretaris P2K3</label>
                                 <input type="text" class="form-control" id="nama_ketua" name="nama_ketua" placeholder="Sekretaris P2K3" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="jabatan_p2k3">Jabatan</label>
                                 <input type="text" class="form-control" id="jabatan_p2k3" name="jabatan_p2k3" placeholder="Jabatan Ketua" required>
                              </div>
                           </div>
                        </div>
                        <!--jumlah naker -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="jumlah_naker">Jumlah Tenaga Kerja</label>
                                 <input type="number" class="form-control" id="jumlah_naker" name="jumlah_naker" placeholder="Jumlah Naker" required>
                              </div>
                           </div>
                        </div>
                        <!-- jumlah laki dan pr  -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="jumlah_laki">Jumlah Laki-Laki</label>
                                 <input type="number" class="form-control" id="jumlah_laki" name="jumlah_laki" placeholder="Jumlah Laki-Laki" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="jumlah_pr">Jumlah Perempuan</label>
                                 <input type="number" class="form-control" id="jumlah_pr" name="jumlah_pr" placeholder="Jumlah Perempuan" required>
                              </div>
                           </div>
                        </div>

                        <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                        <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                     </div>
                     <div id="dokumen" class="content">
                        <!--input no surat dan nama pemilik -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="nosurat_permohonan">No Surat</label>
                                 <!-- no surat permohonan value = tanggal sekrang -->
                                 <input type="text" class="form-control" id="nosurat_permohonan" name="nosurat_permohonan" placeholder="No Surat" value="<?php echo date('m/d/Y'); ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="nama_pemilik">Nama Pemilik</label>
                                 <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik" required>
                              </div>
                           </div>
                        </div>
                        <!-- npwp -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="npwp">NPWP Perusahaan</label>
                                 <input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP" required>
                              </div>
                           </div>
                        </div>
                        <!-- input file bpjs dan foto -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="bpjs">Sertifikat Ahli K3 <small>.PDF</small></label>
                                 <input type="file" class="form-control" id="bpjs" name="bpjs" placeholder="Sertifikat Ahli K3" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="foto">SKP Ahli K3 <small>.PDF</small></label>
                                 <input type="file" class="form-control" id="foto" name="foto" placeholder="SKP Ahli" required>
                              </div>
                           </div>
                        </div>
                        <!-- input file skdtu dan siuk -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="skdtu">KTK Ahli K3 <small>.PDF</small></label>
                                 <input type="file" class="form-control" id="skdtu" name="skdtu" placeholder="KTK Ahli K3" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="siuk">Surat Permohonan <small>.PDF</small></label>
                                 <input type="file" class="form-control" id="siuk" name="siuk" placeholder="Surat Permohonan" required>
                              </div>
                           </div>
                        </div>
                        <a class="btn btn-primary" onclick="stepper1.next()">Next</a>
                        <a class="btn btn-primary" onclick="stepper1.previous()">Previous</a>
                     </div>
                     <div id="keanggotaan" class="content">
                        <?php 
                        //foreach 20 nama anggota
                        for ($i=1; $i <= 18 ; $i++) { 
                           ?>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="nama_anggota">Nama Anggota <?php echo $i;?></label>
                                    <input type="text" class="form-control" id="nama_anggota" name="nama_anggota[]" placeholder="Nama Anggota" >
                                 </div>
                              </div>
                              <!-- jabatan p2k3 dan jabatan perusahaan -->
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="jabatan_p2k3">Jabatan P2K3</label>
                                    <input type="text" class="form-control" id="jabatan_p2k3" name="jabatan_ang_p2k3[]" placeholder="Jabatan P2K3" >
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="jabatan_perusahaan">Jabatan Perusahaan</label>
                                    <input type="text" class="form-control" id="jabatan_perusahaan" name="jabatan_perusahaan[]" placeholder="Jabatan Perusahaan" >
                                 </div>
                              </div>
                           </div>
                           <?php
                        };?>
                        <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                        <!-- input submit -->
                        <button type="submit" class="btn btn-primary">Tambah</button>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
  </div>
</div>