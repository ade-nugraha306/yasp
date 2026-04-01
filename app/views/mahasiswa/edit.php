<h2>Edit Mahasiswa</h2>

<form method="POST" action="/mahasiswa/update">

    <input type="hidden" name="nim" value="<?= $mhs['nim'] ?>">

    <input type="text" name="nama" value="<?= $mhs['nama'] ?>" required><br>

    <input type="email" name="email" value="<?= $mhs['email'] ?>" required><br>

    <input type="text" name="no_hp" value="<?= $mhs['no_hp'] ?>" required><br>

    <button type="submit">Update</button>
</form>