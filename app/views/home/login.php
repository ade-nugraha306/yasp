<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">Login</h2>
                    <?php if (isset($_GET['error'])): ?>
                        <div class="alert alert-danger">Email atau password salah.</div>
                    <?php endif; ?>
                    <form method="POST" action="/login">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <p class="text-center mb-0">Tidak punya akun? <a href="/register">Registrasi Disini</a></p>
                        <p class="text-center mb-0"><a href="/">Lanjutkan Tanpa akun</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>