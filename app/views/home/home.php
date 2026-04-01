<h1 class="mb-4">Data Mahasiswa</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Jurusan</th>
            <?php if (isset($_SESSION['user'])): ?>
                <th>Aksi</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= $m['nim'] ?></td>
                <td><?= $m['nama'] ?></td>
                <td><?= $m['nama_prodi'] ?></td>
                <td><?= $m['nama_jurusan'] ?></td>
                <?php if (isset($_SESSION['user'])): ?>
                    <td>
                        <a href="/mahasiswa/edit?nim=<?= $m['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form method="POST" action="/mahasiswa/delete" style="display:inline;">
                            <input type="hidden" name="nim" value="<?= $m['nim'] ?>">
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h1 class="mb-4">Data Jurusan</h1>

<?php if (isset($_SESSION['user'])): ?>
    <a href="/jurusan/create" class="btn btn-primary mb-3">+ Tambah Jurusan</a>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Jurusan</th>
            <?php if (isset($_SESSION['user'])): ?>
                <th>Aksi</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jurusan as $j): ?>
            <tr>
                <td><?= $j['id_jurusan'] ?></td>
                <td><?= $j['nama_jurusan'] ?></td>
                <?php if (isset($_SESSION['user'])): ?>
                    <td>
                        <a href="/jurusan/edit?id=<?= $j['id_jurusan'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form method="POST" action="/jurusan/delete" style="display:inline;">
                            <input type="hidden" name="id_jurusan" value="<?= $j['id_jurusan'] ?>">
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h1 class="mb-4">Data Prodi</h1>

<?php if (isset($_SESSION['user'])): ?>
    <a href="/prodi/create" class="btn btn-primary mb-3">+ Tambah Prodi</a>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Prodi</th>
            <th>Jurusan</th>
            <?php if (isset($_SESSION['user'])): ?>
                <th>Aksi</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($prodi as $p): ?>
            <tr>
                <td><?= $p['id_prodi'] ?></td>
                <td><?= $p['nama_prodi'] ?></td>
                <td><?= $p['nama_jurusan'] ?></td>
                <?php if (isset($_SESSION['user'])): ?>
                    <td>
                        <a href="/prodi/edit?id=<?= $p['id_prodi'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form method="POST" action="/prodi/delete" style="display:inline;">
                            <input type="hidden" name="id_prodi" value="<?= $p['id_prodi'] ?>">
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>