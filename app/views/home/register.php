<h2>Register Mahasiswa</h2>

<form method="POST" action="/register">

    <input type="text" name="nim" placeholder="NIM" required><br>

    <input type="text" name="nama" placeholder="Nama" required><br>

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="tgl_lahir" required><br>

    <input type="text" name="alamat" placeholder="Alamat" required><br>

    <!-- Agama -->
    <label>Agama:</label><br>
    <select name="agama" required>
        <option value="">-- Pilih --</option>
        <option value="I">Islam</option>
        <option value="K">Kristen</option>
        <option value="H">Hindu</option>
        <option value="B">Buddha</option>
    </select><br>

    <!-- Kelamin -->
    <label>Jenis Kelamin:</label><br>
    <select name="kelamin" required>
        <option value="">-- Pilih --</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>

    <input type="text" name="no_hp" placeholder="Nomor HP" required><br>

    <input type="email" name="email" placeholder="Email" required><br>

    <!-- PRODI -->
    <label>Program Studi:</label><br>
    <select name="id_prodi" required>
        <option value="">-- Pilih Prodi --</option>
        <?php foreach ($prodi as $p): ?>
            <option value="<?= $p['id_prodi'] ?>">
                <?= $p['nama_prodi'] ?? $p['nama'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>

    <input type="password" name="password" placeholder="Password" required><br>

    <button type="submit">Daftar</button>
</form>