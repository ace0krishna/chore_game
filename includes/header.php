<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chore Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/chore-game/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/chore-game/dashboard.php">🏆 Chore Game</a>
        <div class="ms-auto">
            <?php if (isset($_SESSION['user_id'])): ?>
                <span class="text-white me-3">👤 <?= htmlspecialchars($_SESSION['username']) ?></span>
                <span class="badge bg-warning text-dark me-3">⭐ <?= $_SESSION['points'] ?? 0 ?> pts</span>
                <a href="/chore-game/logout.php" class="btn btn-sm btn-outline-light">Logout</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<div class="container mt-4">