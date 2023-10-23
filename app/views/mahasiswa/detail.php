<div class="container mt-5">
<!-- <?php var_dump($data['mhs']); ?> -->
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['mhs'][0]['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs'][0]['nrp']; ?></h6>
        <p class="card-text"><?= $data['mhs'][0]['email']; ?></p>
        <p class="card-text"><?= $data['mhs'][0]['jurusan']; ?></p>
        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
      </div>
    </div>

</div>