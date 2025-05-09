<?= $this->extend('layout-login/template'); ?>

<?= $this->section('content'); ?>
<hr>
<div class="container d-flex justify-content-center align-items-center" style="margin-top: 100px; margin-bottom:100px;">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h4 class="text-start mb-4"><?= $title2 ?></h2>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger text-center" role="alert">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <div class="login-card">
                <form action="/Login/auth" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <p class="text-center mt-3">Belum punya akun? <a href="/Daftar/">Daftar</a></p>
                <hr>
                <p class="text-center">Atau login dengan:</p>
                <div class="text-center social-icons">
                    <i class="fab fa-google"></i>
                </div>
            </div>
    </div>
</div>

<?= $this->endSection(); ?>