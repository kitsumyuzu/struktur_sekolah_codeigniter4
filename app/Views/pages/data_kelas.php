        <section class="content">

            <title>Kelas</title>

            <div class="body_scroll">

                <div class="block-header">

                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <h2>Data Kelas</h2>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row clear-fix">

                        <div class="col-lg-4">

                            <div class="card">

                                <div class="body">

                                    <form class="form-horizontal" action="<?= base_url('/home/aksi_tambah_kelas')?>" method="POST">

                                        <div class="row clearfix">

                                            <div class="col-lg-12">

                                                <div class="form-group">

                                                    <input type="text" name="kelas" placeholder="nama kelas" class="form-control" required autofocus>

                                                </div>

                                            </div>
                                            
                                        </div>

                                        <div class="row clearfix d-flex justify-content-center">

                                            <button type="submit" class="btn btn-md btn-round btn-success">Submit</button>
                                            
                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-8">

                            <div class="card">

                                <div class="body">

                                    <div class="table-responsive">

                                        <table class="table table-striped table-bordered">
                                            
                                            <thead>

                                                <tr style="text-align: center;">

                                                    <th width="10%">No</th>
                                                    <th>Kelas</th>

                                                    <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                        <th width="20%">Action</th>
                                                        
                                                    <?php } ?>

                                                </tr>

                                            </thead>
                                            <tbody> 
                                            
                                                <?php $no = 1; foreach($kelasData as $data) { ?>

                                                    <tr align="center">

                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo strtoupper($data -> kelas) ?></td>

                                                        <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                            <td>

                                                                <a href="<?= base_url('/home/edit_kelas/'.$data -> id_kelas) ?>">

                                                                    <button type="button" class="btn btn-info"><i class="zmdi zmdi-edit"></i></button>

                                                                </a>

                                                                <a href="<?= base_url('/home/hapus_kelas/'.$data -> id_kelas) ?>">

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