<h2>Edit Jurusan</h2>

<form method="POST" action="/jurusan/update">

    <input type="hidden" name="id_jurusan" value="<?= $jurusan['id_jurusan'] ?>">

    <input type="text" name="nama_jurusan" value="<?= $jurusan['nama_jurusan'] ?>" required><br>

    <button type="submit">Update</button>
</form>