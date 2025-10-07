<!-- dashboard.php -->
<h1>Welcome, <?= session('username') ?>!</h1>
<p>Role: <?= session('role') ?></p>
<a href="<?= site_url('auth/logout') ?>">Logout</a>