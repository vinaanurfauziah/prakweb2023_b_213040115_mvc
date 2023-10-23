<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
        </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>


    
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <li class="list-group-item ">
                        <?= $mhs['nama'];?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-right ml-1">detail</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-success float-right tampilModalUbah ml-1" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?$mhs['id']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-right ml-1 onclick="return confirm('yakin?');">hapus</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
        </div>
        
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan" autocomplete="off">
                <option value="Teknik Informatika"> Teknik Informatika</option>
                <option value="Teknik Industri"> Teknik Industri</option>
                <option value="Teknik Pangan"> Teknik Pangan</option>
                <option value="Teknik Planologi"> Teknik Planologi</option>
                <option value="Teknik Lingkungan"> Teknik Lingkungan</option>
            </select>
        </div>

      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>