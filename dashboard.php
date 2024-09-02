<<<<<<< HEAD
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

include 'users.php';

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Currículos dos Membros</h1>
        <div class="user-list">
            <?php foreach ($curriculums as $user => $data): ?>
                <div class="user-card">
                    <h2><?php echo $data['name']; ?></h2>
                    <p><?php echo $data['bio']; ?></p>
                    <a href="curriculum.php?user=<?php echo $user; ?>" class="view-btn">Ver Currículo</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
=======
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

include 'users.php';

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Currículos dos Membros</h1>
        <div class="user-list">
            <?php foreach ($curriculums as $user => $data): ?>
                <div class="user-card">
                    <h2><?php echo $data['name']; ?></h2>
                    <p><?php echo $data['bio']; ?></p>
                    <a href="curriculum.php?user=<?php echo $user; ?>" class="view-btn">Ver Currículo</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
>>>>>>> a9451c3dfe69788b21995521abde373d67292752
