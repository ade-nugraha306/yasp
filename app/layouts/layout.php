<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'App' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">Sertikom</span>

        <ul class="nav">

            <?php if (isset($_SESSION['user'])): ?>

                <li class="nav-item">
                    <span class="nav-link text-white">
                        Halo, <?= $_SESSION['user']['nama'] ?>
                    </span>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="/logout">Logout</a>
                </li>

            <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>

            <?php endif; ?>

        </ul>
    </div>
</nav>

<div class="container mt-4">
    <?= $content ?>
</div>

</body>
</html>