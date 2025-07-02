<?php
require 'db.php';

// Handle delete single action
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM robot_actions WHERE id = :id");
    $stmt->execute(['id' => $_GET['delete']]);
    header('Location: action_log.php');
    exit();
}
// Handle delete all actions
if (isset($_POST['delete_all'])) {
    $pdo->exec("DELETE FROM robot_actions");
    header('Location: action_log.php');
    exit();
}
// Handle time filter (date and time)
$where = '';
$params = [];
$from = isset($_GET['from']) ? $_GET['from'] : '';
$to = isset($_GET['to']) ? $_GET['to'] : '';
$from_time = isset($_GET['from_time']) ? $_GET['from_time'] : '';
$to_time = isset($_GET['to_time']) ? $_GET['to_time'] : '';
if ($from && $to) {
    $from_full = $from . ($from_time ? (' ' . $from_time . ':00') : ' 00:00:00');
    $to_full = $to . ($to_time ? (' ' . $to_time . ':59') : ' 23:59:59');
    $where = 'WHERE created_at BETWEEN :from AND :to';
    $params = [
        'from' => $from_full,
        'to' => $to_full
    ];
}
$stmt = $pdo->prepare("SELECT id, action, created_at FROM robot_actions $where ORDER BY created_at DESC");
$stmt->execute($params);
$actions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Robot | Action Log</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">AI Robot</div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="features.html">Features</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="motor_control.php">Motor Control</a></li>
                <li><a href="action_log.php">Action Log</a></li>
            </ul>
        </nav>
    </header>
    <section class="action-log pro">
        <h2><span class="icon">📋</span> Action Log</h2>
        <form method="get" class="filter-form pro">
            <div class="filter-row">
                <label>From: <input type="date" name="from" value="<?= htmlspecialchars($from) ?>"> <input type="time" name="from_time" value="<?= htmlspecialchars($from_time) ?>"></label>
                <label>To: <input type="date" name="to" value="<?= htmlspecialchars($to) ?>"> <input type="time" name="to_time" value="<?= htmlspecialchars($to_time) ?>"></label>
                <button type="submit" class="btn filter-btn">Filter</button>
                <a href="action_log.php" class="btn reset-btn">Reset</a>
            </div>
        </form>
        <form method="post" class="delete-all-form">
            <button type="submit" name="delete_all" class="delete-all-btn" onclick="return confirm('Delete all actions?')">Delete All</button>
        </form>
        <div class="table-responsive">
        <table class="pro-table">
            <thead>
                <tr><th>Action</th><th>Time</th><th>Delete</th></tr>
            </thead>
            <tbody>
                <?php foreach($actions as $row): ?>
                    <tr>
                        <td><span class="action-label action-<?= htmlspecialchars($row['action']) ?>"><?= htmlspecialchars(ucfirst($row['action'])) ?></span></td>
                        <td><?= htmlspecialchars($row['created_at']) ?></td>
                        <td><a href="action_log.php?delete=<?= $row['id'] ?>" class="delete-link" onclick="return confirm('Delete this action?')">🗑️</a></td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($actions)): ?>
                    <tr><td colspan="3">No actions found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 AI Robot. All rights reserved.</p>
    </footer>
</body>
</html>
