        <section class="content">

            <title>Kelas</title>

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Data Murid</h2>

                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-12">

                            <a href="/home/tambah_murid" style="position: absolute; right: 10px;">
                            
                                <button class="btn btn-md btn-primary"><i class="zmdi zmdi-plus mr-3"></i>Tambah Murid</button>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row clear-fix">

                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="card">

                                <div class="card-body">

                                    <div class="table-responsive">

                                        <table class="table table-striped">
                                            
                                            <thead>

                                                <tr style="text-align: center;">

                                                    <th>No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>NIS</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Agama</th>
                                                    <th>Tempat & Tanggal Lahir</th>
                                                    <th>Alamat</th>
                                                    <th>No Handphone</th>
                                                    <th>Wali Kelas</th>
                                                    <th>Kelas</th>

                                                    <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                        <th width="15%">Action</th>
                                                        
                                                    <?php } ?>

                                                </tr>

                                            </thead>
                                            <tbody> 
                                            
                                                <?php $no = 1; foreach($muridData as $data) { $tanggal_lahir_murid = new DateTime($data -> tanggal_lahir_murid); ?>

                                                    <tr align="center">

                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $data -> nis ?></td>
                                                        <td><?php echo ucwords($data -> nama_lengkap_murid) ?></td>
                                                        <td><?php echo ucwords($data -> jenis_kelamin_murid) ?></td>
                                                        <td><?php echo ucwords($data -> agama_murid) ?></td>
                                                        <td><?php echo ucwords($data -> tempat_lahir_murid) . ', ' . $tanggal_lahir_murid -> format('d F Y') ?></td>
                                                        <td><?php echo ucwords($data -> alamat_murid) ?></td>
                                                        <td><?php echo $data -> no_handphone_murid ?></td>
                                                        <td><?php echo ucwords($data -> nama_lengkap_guru) ?></td>
                                                        <td><?php echo strtoupper($data -> kelas) ?></td>

                                                        <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                            <td>

                                                                <a href="<?= base_url('/home/edit_murid/'.$data -> userMurid) ?>">

                                                                    <button type="button" class="btn btn-info"><i class="zmdi zmdi-edit"></i></button>

                                                                </a>

                                                                <a href="<?= base_url('/home/hapus_murid/'.$data -> userMurid) ?>">

                                                                    <button type="button" class="btn btn-danger"><i class="zmdi zmdi-block"></i></button>

                                                                </a>
                                                            
                                                            </td>

                                                        <?php } ?>

                                                    </tr>

                                                <?php } ?>
                                            
                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>