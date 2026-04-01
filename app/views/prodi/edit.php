<!-- edit.php -->
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">Edit Prodi</h2>
                    <form method="POST" action="/prodi/update">
                        <input type="hidden" name="id_prodi" value="<?= $prodi['id_prodi'] ?>">
                        <div class="mb-3">
                            <label class="form-label">Nama Prodi</label>
                            <input type="text" name="nama_prodi" class="form-control" value="<?= $prodi['nama_prodi'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <select name="id_jurusan" class="form-select" required>
                                <?php foreach ($jurusan as $j): ?>
                                    <option value="<?= $j['id_jurusan'] ?>" <?= $j['id_jurusan'] == $prodi['id_jurusan'] ? 'selected' : '' ?>>
                                        <?= $j['nama_jurusan'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/jurusan" class="btn btn-outline-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>