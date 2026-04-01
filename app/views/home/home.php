<h1 class="mb-4">Data Jurusan</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($jurusans)): ?>
            <?php foreach ($jurusans as $jurusan): ?>
                <tr>
                    <td><?= $jurusan['id_jurusan'] ?></td>
                    <td><?= $jurusan['nama_jurusan'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Data kosong</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<a href="/register"></a>