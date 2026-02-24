<div class="w-100">
  <h1 class="h3 mb-0 text-gray-800">Kategori Buku</h1><br>

  <div class="mb-3 clearfix">
    <a href="?page=kategori_tambah" class="btn btn-primary">Tambah Data</a>
  </div>

  <div class="clearfix">
    <table class="table table-bordered" id="dataTable" cellspacing="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; $query = mysqli_query($koneksi, "SELECT * FROM kategori"); while ($data = mysqli_fetch_array($query)) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $data['kategori']; ?></td>
          <td>
            <a href="?page=kategori_ubah&&id=<?= $data['id_kategori']; ?>" class="btn btn-sm btn-info">Edit</a>
            <a href="?page=kategori_hapus&&id=<?= $data['id_kategori']; ?>" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>
