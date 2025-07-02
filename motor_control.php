<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    $stmt = $pdo->prepare("INSERT INTO robot_actions (action) VALUES (:action)");
    $stmt->execute(['action' => $action]);
    $message = "Action '$action' sent to robot.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Robot | Motor Control</title>
    <link rel="stylesheet" href="style.css">
    <script src="robot3d.js" defer></script>
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
    <section class="motor-control">
        <h2>Motor Control</h2>
        <?php if(isset($message)) echo "<p class='success'>$message</p>"; ?>
        <div class="robot-3d-container">
            <div class="robot-3d">
                <div class="robot-head"></div>
                <div class="robot-body"></div>
                <div class="robot-arm left"></div>
                <div class="robot-arm right"></div>
                <div class="robot-leg left"></div>
                <div class="robot-leg right"></div>
            </div>
            <form method="POST" class="motor-form-3d">
                <div class="motor-row">
                    <button type="submit" name="action" value="up" title="Move Up">⬆️</button>
                </div>
                <div class="motor-row">
                    <button type="submit" name="action" value="left" title="Move Left">⬅️</button>
                    <button type="submit" name="action" value="stop" title="Stop">⏹️</button>
                    <button type="submit" name="action" value="right" title="Move Right">➡️</button>
                </div>
                <div class="motor-row">
                    <button type="submit" name="action" value="down" title="Move Down">⬇️</button>
                </div>
                <div class="motor-row">
                    <button type="submit" name="action" value="forward" title="Move Forward">Forward</button>
                    <button type="submit" name="action" value="backward" title="Move Backward">Backward</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 AI Robot. All rights reserved.</p>
    </footer>
</body>
</html>
