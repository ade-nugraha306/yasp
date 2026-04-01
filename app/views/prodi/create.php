<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">Tambah Prodi</h2>
                    <form method="POST" action="/prodi/store">
                        <div class="mb-3">
                            <label class="form-label">Nama Prodi</label>
                            <input type="text" name="nama_prodi" class="form-control" placeholder="Nama Prodi" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <select name="id_jurusan" class="form-select" required>
                                <option value="">-- Pilih Jurusan --</option>
                                <?php foreach ($jurusan as $j): ?>
                                    <option value="<?= $j['id_jurusan'] ?>"><?= $j['nama_jurusan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/jurusan" class="btn btn-outline-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>