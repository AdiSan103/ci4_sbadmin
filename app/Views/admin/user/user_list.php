<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>

	<h1 class="h3 mb-4 text-gray-800">Halaman User</h1>

	<div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="<?= base_url('admin/user/tambah') ?>"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode User</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php 

                    	foreach ($rows as $row)
						{
							echo"
							<tr>
								<td>$row->kodeuser</td>
								<td>$row->username</td>
								<td>$row->password</td>
								<td>$row->namauser</td>
								<td>
									<a href=".base_url("admin/user/edit/$row->kodeuser")." class='btn btn-primary btn-sm'><i class='fas fa-fw fa-edit'></i> Edit</a>
									<a href=".base_url("admin/user/hapus/$row->kodeuser")." class='btn btn-danger btn-sm'><i class='fas fa-fw fa-trash'></i> Hapus</a>
								</td>
							</tr>
							";
						}
                    	?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>