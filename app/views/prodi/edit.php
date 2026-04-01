<h2>Edit Prodi</h2>

<form method="POST" action="/prodi/update">

    <input type="hidden" name="id_prodi" value="<?= $prodi['id_prodi'] ?>">

    <input type="text" name="nama_prodi" value="<?= $prodi['nama_prodi'] ?>" required><br>

    <select name="id_jurusan" required>
        <?php foreach ($jurusan as $j): ?>
            <option value="<?= $j['id_jurusan'] ?>" <?= $j['id_jurusan'] == $prodi['id_jurusan'] ? 'selected' : '' ?>>
                <?= $j['nama_jurusan'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>

    <button type="submit">Update</button>
</form>