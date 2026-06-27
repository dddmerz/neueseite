<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pageTitle = $pageTitle ?? "DeMerzli Sammelkartenspiel";
$pageCss   = $pageCss ?? "";
?>
<!DOCTYPE html>
<html lang="de">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <!-- Core -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/ui.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <!-- Seiten CSS -->
    <?php if($pageCss): ?>
        <link rel="stylesheet" href="assets/css/<?= htmlspecialchars($pageCss) ?>.css">
    <?php endif; ?>

    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

<?php include __DIR__ . '/nav.php'; ?>

<div class="container fade-up">
