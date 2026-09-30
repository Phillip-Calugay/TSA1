<?= view('layout/header', ['title' => $title]) ?>
<section class="card">
    <h1>Profile</h1>
    <?php if ($user === null): ?>
        <p>No user profile found.</p>
    <?php else: ?>
        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Full name:</strong> <?= esc($user['full_name']) ?></p>
        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
        <p><strong>Member since:</strong> <?= esc($user['created_at']) ?></p>
    <?php endif; ?>
</section>
<?= view('layout/footer') ?>
