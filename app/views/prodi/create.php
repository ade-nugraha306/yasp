<h2>Tambah Prodi</h2>

<form method="POST" action="/prodi/store">

    <input type="text" name="nama_prodi" placeholder="Nama Prodi" required><br>

    <select name="id_jurusan" required>
        <option value="">-- Pilih Jurusan --</option>
        <?php foreach ($jurusan as $j): ?>
            <option value="<?= $j['id_jurusan'] ?>">
                <?= $j['nama_jurusan'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>

    <button type="submit">Simpan</button>
    <a href="/jurusan">Batal</a>
</form>