<!-- dashboard.php -->
<h1>Welcome, <?= session('name') ?>!</h1>
<p>Role: <?= session('role') ?></p>
<a href="<?= site_url('auth/logout') ?>">Logout</a>