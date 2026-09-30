<?= view('layout/header', ['title' => $title]) ?>
<section class="card">
    <h1>All Tasks</h1>
    <p class="muted">Every task, ordered by date.</p>

    <?php if ($tasks === []): ?>
        <p>No tasks found.</p>
    <?php else: ?>
        <table>
            <thead><tr><th>Task</th><th>Status</th><th>Date</th></tr></thead>
            <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['title']) ?></td>
                    <td class="status"><?= esc($task['status'] ?? 'pending') ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>
<?= view('layout/footer') ?>
