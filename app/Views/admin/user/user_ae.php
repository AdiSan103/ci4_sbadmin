<?= $this->extend('layout/layoutadmin') ?>

<?= $this->section('content') ?>

	<h1 class="h3 mb-4 text-gray-800">Tambah User</h1>

	<div class="card shadow mb-4">
        <div class="card-body">
            <form>

                <div class="form-group">
                    <label for="kodeuser">Kodeuer</label>
                    <input type="text" class="form-control" name="kodeuser" id="nama" readonly placeholder="AUTO">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="email" class="form-control" name="" id="username">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="" id="password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="" id="nama">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="" id="email">
                </div>
             
                <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>

<?= $this->endSection() ?>