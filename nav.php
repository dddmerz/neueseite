<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current = basename($_SERVER['PHP_SELF']);

function active($page, $current)
{
    return $current === $page ? "active" : "";
}

?>

<nav>

    <div class="nav-container">

        <!-- Logo -->
        <a href="index.php" class="nav-logo">

            <img src="assets/images/logo.webp" alt="DeMerzli">

            <div>

                <div class="nav-title">
                    DeMerzli
                </div>

                <small>Sammelkartenspiel</small>

            </div>

        </a>

        <!-- Navigation -->
        <div class="nav-menu">

            <a class="<?= active('index.php',$current) ?>" href="index.php">
                🏠 Startseite
            </a>

            <a class="<?= active('cards.php',$current) ?>" href="cards.php">
                🎴 Sammlung
            </a>

            <a class="<?= active('arena.php',$current) ?>" href="arena.php">
                ⚔ Arena
            </a>

            <a class="<?= active('leaderboard.php',$current) ?>" href="leaderboard.php">
                🏆 Rangliste
            </a>

            <a class="<?= active('stats.php',$current) ?>" href="stats.php">
                📊 Statistiken
            </a>

            <a class="<?= active('wiki.php',$current) ?>" href="wiki.php">
                📖 Wiki
            </a>

        </div>

        <!-- Status -->
        <div class="nav-status">
            🟢 Arena Beta
        </div>

        <!-- Benutzer -->
        <div class="nav-user">

            <?php if(isset($_SESSION['twitch_user'])): ?>

                <span class="nav-username">

                    👋 <?= htmlspecialchars($_SESSION['twitch_user']) ?>

                </span>

                <a class="ui-btn ui-btn-primary"
                   href="me.php">

                    👤 Profil

                </a>

                <a class="ui-btn ui-btn-outline"
                   href="logout.php">

                    🚪 Logout

                </a>

            <?php else: ?>

                <a class="ui-btn ui-btn-primary"
                   href="login.php">

                    🎮 Twitch Login

                </a>

            <?php endif; ?>

        </div>

    </div>

</nav>
